<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Wishlist;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id=request('user_id');
        $product_id= request('product_id');

        $wishlist = Wishlist::where('user_id', $user_id)->first();

        if ($wishlist == null) {
            $wishlist = new Wishlist([
                'user_id' => $user_id
            ]);
            $wishlist->save();

        }

        $wishlistItem = $wishlist->products()->where('product_id', $product_id)->first();

        if ($wishlistItem == null){
            $wishlist->products()->attach($product_id);
        }
        return redirect('/description/'.$product_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wishlists=\App\Wishlist::where('user_id',$id)->first();

        if ($wishlists == null) {
            $products = null;
        } else {
            $products = $wishlists->products;
        }

        return view('wishlist',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
