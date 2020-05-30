<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_image extends Model
{
    protected $gaurded = [];
    
    public function item() {
        return $this->belongsTo('App\Item');
    }
}
