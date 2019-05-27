<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{

    protected $fillable = [
        'name'
    ];

    public function product(){
        return $this->hasMany('App\Product', 'foreign_key', 'other_key');
    }
}
