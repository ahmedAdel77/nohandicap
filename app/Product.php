<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\Viewable;
use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;

class Product extends Model implements ViewableContract
{
    use Viewable;
    //
    protected $table = 'products';
    public $primarykey = 'id';
    public $timestamps = true;

    public function scopeFilter($q)
    {
        // if (request('price_from')) {
        //     $q->where('price', '>', request('price_from'));
        // }
        if (request('category')) {
            $q->where('category', '=', request('category'));
        }

        return $q;
    }

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function reports(){
        return $this->hasMany('App\Report');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'foreign_key', 'other_key');
    }

    public function condition()
    {
        return $this->belongsTo('App\Condition', 'foreign_key', 'other_key');
    }
}
