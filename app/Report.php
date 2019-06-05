<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'reason', 'info',
    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
