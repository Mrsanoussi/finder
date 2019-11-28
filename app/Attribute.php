<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    public function items()
    {
        return $this->belongsToMany('App\Item');
    }
}
