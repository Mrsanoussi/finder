<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function items()
    {
        return $this->belongsToMany('App\Item');
    }
}
