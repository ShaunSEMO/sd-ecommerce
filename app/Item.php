<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $gaurded = [];
    
    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function images() {
        return $this->hasMany('App\Item_image');
    }
}
