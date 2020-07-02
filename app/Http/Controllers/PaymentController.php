<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Payment;

class PaymentController extends Controller


{
    public $gateway;
    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId('AX7xKIK_2lRUi6QXk1YtTSi7zZY63WPGsOoon2PRpBGP56-Kn9S6cXIjUSgmOSilidkCdwgedriM8FuX');//insert client id here
        $this->gateway->setSecret('EPJSu8dy5RNAwDjimDcxCF831xPjoIZI6tuYywRJwraxK7Ma7Pg7m6h0xmiC_QERtUcZwWf2GWPGwDWR');//insert secret here
        $this->gateway->setTestMode(true); //set it to 'false' when going  live
    }
 
    public function index()
    {
        return view('payment');
    }
    public function charge(Request $request)
    {
        if($request->input('submit'))
        {
            try {
                $response = $this->gateway->purchase(array(
                    'amount' => $request->input('amount'),
                    'currency' => env('PAYPAL_CURRENCY'),
                    'returnUrl' => url('paymentsuccess'),
                    'cancelUrl' => url('paymenterror'),
                ))->send();
          
                if ($response->isRedirect()) {
                    $response->redirect(); // this will automatically forward the customer
                } else {
                    // not successful
                    return $response->getMessage();
                }
            } catch(Exception $e) {
                return $e->getMessage();
            }
        }
    }
    public function payment_success(Request $request)
    {
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID'))
        {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();
         
            if ($response->isSuccessful())
            {
                // The customer has successfully paid.
                $arr_body = $response->getData();
         
                // Insert transaction data into the database
                $isPaymentExist = Payment::where('payment_id', $arr_body['id'])->first();
         
                if(!$isPaymentExist)
                {
                    $payment = new Payment;
                    $payment->payment_id = $arr_body['id'];
                    $payment->payer_id = $arr_body['payer']['payer_info']['payer_id'];
                    $payment->payer_email = $arr_body['payer']['payer_info']['email'];
                    $payment->amount = $arr_body['transactions'][0]['amount']['total'];
                    $payment->currency = env('PAYPAL_CURRENCY');
                    $payment->payment_status = $arr_body['state'];
                    $payment->save();
                }
         
                return redirect('afterpayment');
                
            } else {
                return $response->getMessage();
            }
        } else {
            return 'Transaction is declined';
        }
    }
    public function payment_error()
    {
        return 'User is canceled the payment.';
    }
 
}

