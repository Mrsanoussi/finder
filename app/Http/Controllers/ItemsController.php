<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Item;
use App\Attribute;
use Illuminate\Http\Request;


class ItemsController extends Controller
{
    public function index(Request $request)
    {
        if(request()->brand){
            $item = Item::with('brands')->whereHas('brands', function($query){
                $query->where('name', request()->brand);
            })->get();
            $brand = Brand::all();
        }else{
            $item = Item::inRandomOrder()->get();
            $brand = Brand::all();
        }

        if(request()->attribute){
            $item = Item::with('attributes')->whereHas('attributes', function($query){
                $query->where('name', request()->attribute);
            })->get();
            $attribute = Attribute::all();
        }else{
            $attribute = Attribute::all();
        }

        /*$item = Item::find(15);
        $item->brands()->attach(5);*/

        /*$item = Item::find(15);
        $item->attributes()->attach([1,2]);
        


        //$item = Item::paginate(8);
        //$item = Item::find(1)->attributes()->get();
        /*$attributes = Item::find([1])->attributes();
        $attributes = Attribute::find([1,3,5])->items();
        $item->attributes()->attach([1, 4, 6]);*/
        //dd($item);

        return view('index', [
            'item' => $item,
            'brand' => $brand,
            'attribute' => $attribute,
            ]);

    }

    public function show()
    {
        return view('app.show', ['item' => $item]);
    }
}
