<?php

namespace App\Http\Controllers;

use App\Item;
use App\Attribute;
use Illuminate\Http\Request;


class ItemsController extends Controller
{
    public function index(Request $request)
    {
        //$attributes = Item::find([1])->attributes();
        $attributes = Attribute::find([1,3,5])->items();
        //$item->attributes()->attach([1, 4, 6]);
        dd($attributes);
    }
}
