<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function attributes()
    {
        return $this->belongsToMany('App\Attribute');
    }

    public function brands()
    {
        return $this->belongsToMany('App\Brand');
    }
}
