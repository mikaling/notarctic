<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\StripePayment;



class StripePaymentController extends Controller

{
    public function index()
    {
        return view('stripepayment');
    }
    public function charge(Request $request)
    {
        if ($request->input('stripeToken')) {

            $gateway = Omnipay::create('Stripe');
            $gateway->setApiKey('sk_test_51GuiySDSVAZTTXtTiNqqQ5uupiXdXJyec1NFapU7x3OBjHGbu6RPIooqZkqovEaBgW8zYVOj8OxuJIglxGBfLp5N00Gj0kTc6x');//enter api key

            $token = $request->input('stripeToken');

            $response = $gateway->purchase([
                'amount' => $request->input('amount'),
                'currency' => 'USD',
                'token' => $token,
            ])->send();

            if ($response->isSuccessful()) {
                // payment was successful: insert transaction data into the database
                $arr_payment_data = $response->getData();

                $isPaymentExist = StripePayment::where('payment_id', $arr_payment_data['id'])->first();

                if(!$isPaymentExist)
                {
                    $payment = new StripePayment;
                    $payment->payment_id = $arr_payment_data['id'];
                    $payment->payer_email = $request->input('email');
                    $payment->amount = $arr_payment_data['amount']/100;
                    $payment->currency = 'USD';
                    $payment->payment_status = $arr_payment_data['status'];
                    $payment->save();
                }
                Cart::empty();
                return  redirect('afterpayment');
            } else {
                // payment failed: display message to customer
                return $response->getMessage();
            }
        }
    }
}
