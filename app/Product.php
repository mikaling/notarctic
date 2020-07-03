<?php

namespace App;

use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Review;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use phpDocumentor\Reflection\Types\Self_;

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

    public static function addQuantity($id, $qty) {
        $product = self::where('id', $id)->take(1)->first();
        $product->quantity += $qty;
//        dd($product);
        $product->save();

    }

    public static function reduceQuantity($id) {
        $product = self::where('id', $id)->take(1)->first();
//        dd($product);
        $product->quantity -= 1;
        $product->save();
    }

    public static function getQuantity($id) {
        $product = self::where('id', $id)->take(1)->first();
        return $product->quantity;
    }


    //TODO: Set up searchable array of fields
    // public function toSearchableArray() {
    //     $array = $this->toArray();

    //     //Customizing array
    //     $array = [];

    //     return $array;
    // }
}
