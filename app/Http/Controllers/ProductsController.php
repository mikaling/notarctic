<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //

    public function homePageProducts(){
        $products=Product::all();
        return view('home',compact('products'));
    }

    public function displayByCategory(){

        $category=Category::all();

        return view('category',compact('category'));
    }



    public function productDescription($id){
        $product=Product::where('id',$id)->get();
        return view('view_single_product',compact('product'));
    }

    public function show(Category $category)
    {
        $category->load('products');
//        dd($category);
        return view('specific_category',compact('category'));
    }
}
