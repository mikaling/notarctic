<?php

namespace App;

use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use App\Category;
use App\Review;

class Product extends Model
{
    //
    use Searchable, SearchableTrait;

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

    public function reviews() {
        return $this->hasMany('Review');
    }

    /**
     * Get the index name for the model
     * 
     * @return string
    */
    public function searchableAs() {
        return 'products_index';
    }

    //TODO: Set up searchable array of fields
    // public function toSearchableArray() {
    //     $array = $this->toArray();

    //     //Customizing array
    //     $array = [];

    //     return $array;
    // }
}
