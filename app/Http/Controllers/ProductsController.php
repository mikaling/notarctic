<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Review;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //

    public function homePageProducts() {
        $products=Product::all();
        return view('home',compact('products'));
    }

    public function displayByCategory() {

        $category=Category::all();

        return view('category',compact('category'));
    }


    public function productDescription($id) {
        $product = Product::where('id', $id)->get();
        $reviews = Review::where('product_id', $id)->paginate(3);
        $review_count = Review::count();
        $review_rating = Review::avg('rating');
        //dd($reviews);
        return view('view_single_product',compact('product', 'reviews', 'review_count', 'review_rating'));
    }

    public function show(Category $category)
    {
        $category->load('products');
//        dd($category);
        return view('specific_category',compact('category'));
    }
}
