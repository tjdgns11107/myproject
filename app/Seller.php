<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable = [
        'seller_id', 'seller_name', 'seller_phone',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function items() {
        return $this->hasMany('App\Item');
    }
}
