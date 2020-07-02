<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    public $table = "wishlist";

    protected $fillable = ['user_id'];
    //

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
