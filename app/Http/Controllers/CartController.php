<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function index() {
        return view ('cart.cart');
    }

    public function store(Product $product) {
        $duplicate = Cart::search(function ($cartItem, $rowId) use ($product) {
            return $cartItem->id === $product->id;
        });
        if($duplicate->isNotEmpty())
            return redirect()->route('cart.index')->with('success_message', 'Item is already in your cart');
        Cart::add($product, 1);
        return redirect()->route('cart.index')
            ->with('success_message', 'Item added to cart!');
    }

    public function remove($rowId) {
        Cart::remove($rowId);
        return back()->with('success_message', 'Item removed from cart');
    }

    public function update(Request $request, $rowId) {
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);

        if($validator->fails()) {
            session()->flash('errors', collect(['Quantity must be between 1 and 5']));
            return response()->json(['success' => false], 400);
        }
        Cart::update($rowId, $request->quantity);
        session()->flash('success_message', 'Quantity of item updated successfully');
        return response()->json(['success' => true]);
    }

    public function storeCartInDb($userId) {
        //Storing cart instance in database
        Cart::store($userId);
    }

    public function restoreCart($userId) {
        Cart::restore($userId);
    }
}
