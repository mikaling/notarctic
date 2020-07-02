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

        $count_rating_one = Review::where(['product_id' => $id,'rating' => 1])->count();
        $count_rating_two = Review::where(['product_id' => $id,'rating' => 2])->count();
        $count_rating_three = Review::where(['product_id' => $id,'rating' => 3])->count();
        $count_rating_four = Review::where(['product_id' => $id,'rating' => 4])->count();
        $count_rating_five = Review::where(['product_id' => $id,'rating' => 5])->count();
        $review_count = Review::where('product_id', $id)->count();
        $review_rating = Review::where('product_id', $id)->avg('rating');

        $review_analysis = [
            'review_count' => $review_count,
            'review_rating' => $review_rating,
            'count_rating_one' => $count_rating_one,
            'count_rating_two' => $count_rating_two,
            'count_rating_three' => $count_rating_three,
            'count_rating_four' => $count_rating_four,
            'count_rating_five' => $count_rating_five
        ];
        //dd($review_analysis);
        return view('view_single_product',compact('product', 'reviews', 'review_analysis'));
    }

    public function show(Category $category)
    {
        $category->load('products');
//        dd($category);
        return view('specific_category',compact('category'));
    }

    public function showSearchResults(Request $request) {
        $request->validate([
            'query' => 'required|min:3',
        ]);
        $query = $request->input('query');
        // $products = Product::where('name', 'like', "%$query%")->paginate(1);
        $products = Product::search($query)->paginate(3);
        return view('search.basic-search')->with('products', $products);
    }
}
