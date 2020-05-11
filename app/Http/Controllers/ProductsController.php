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
//        $category=Category::findOrFail($cat_id);
//        return view('category_test',compact('category'));
        return view('category',compact('category'));
    }



    public function productDescription($id){
        return view('view_single_product');
    }

    public function show(Category $category)
    {
        $category->load('products');
//        dd($category);
        return view('specific_category',compact('category'));
    }
}
