<?php

namespace App;

use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Review;
use Gloudemans\Shoppingcart\Contracts\Buyable;

class Product extends Model implements Buyable
{
    //
    use SearchableTrait;

    protected $searchable = [
        'columns' => [
            'product.name' => 10,
            'product.brand' => 10,
            'product.description' => 5,
        ],
    ];

    public $table = "product";

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function wishlist(){
        return $this->belongsTo(Wishlist::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function getBuyableIdentifier($options = null){
        return $this->id;
    }

    public function getBuyableDescription($options = null){
        return $this->name;
    }

    public function getBuyablePrice($options = null){
        return $this->price;
    }


    //TODO: Set up searchable array of fields
    // public function toSearchableArray() {
    //     $array = $this->toArray();

    //     //Customizing array
    //     $array = [];

    //     return $array;
    // }
}
