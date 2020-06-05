<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Review;

class Product extends Model
{
    //
    public $table = "product";

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function reviews() {
        return $this->hasMany('Review');
    }
}
