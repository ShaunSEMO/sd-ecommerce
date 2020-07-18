<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $gaurded = [];

    public function items() {
        return $this->hasMany('App\Item');
    }

}
