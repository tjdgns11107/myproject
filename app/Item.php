<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [ 
        'item_title', 'item_content', 'item_picture', 'seller_id', 'price', 'dept',
    ];

    public function seller() {
        return $this->belongsTo('App\Seller');
    }
}
