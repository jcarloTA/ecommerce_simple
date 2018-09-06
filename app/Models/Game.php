<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model{
    protected $table = 'games';

    public function types()
    {
        return $this->belongsToMany('App\Models\Type');
    }

    public function getPriceFloatAttribute() 
    {
        $price = (float) $this->attributes['price'] /100;

        return round($price,20);
    }
}

