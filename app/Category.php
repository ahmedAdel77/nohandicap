<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name'
    ];

    public function product(){
        return $this->hasMany('App\Product', 'foreign_key', 'other_key');
    }
}
