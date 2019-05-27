<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    public $primarykey = 'id';
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function condition()
    {
        return $this->belongsTo('App\Condition', 'foreign_key', 'other_key');
    }
}
