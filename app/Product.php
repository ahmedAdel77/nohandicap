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

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function report(){

        return $this->belongsTo('App\Report');
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
