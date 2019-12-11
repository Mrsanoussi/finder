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
        
        $item = Item::with('brands')->get();
        $brand = Brand::all();
        $attribute = Attribute::all();
       
        /*
        if(request()->attribute_multi){
            // zwembad,gym,tennissen -> ['zwembad', 'gym', 'tennissen']
            $query_array = explode(',', request()->attribute_multi);

            $all_data = array();

            foreach($query_array as &$request_type){

                $type_data = Item::with('attributes')->whereHas('attributes', function($query){
                    $query->where('name', $request_type);
                })->get();

                foreach($type_data as &$single_obj) {
                    $all_data->array_push($single_obj->name);
                }

            }

            dd($all_data);  

        }*/

        /*$item = Item::find(13);
        $item->brands()->attach(3);*/

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

    public function show(Request $request, Item $item, Brand $brand)
    {

        /*if(request()->item){
        $item = Item::with('attributes')->whereHas('attributes', function($query){
            $query->where('name', request()->attribute);
        })->get();
    };*/

        $brand = Brand::with('items')->whereHas('items', function($query){
            $query->where('name', request()->item);
        })->first();

        $attribute = Attribute::all();

        return view('app.show', [
            'item' => $item,
            'attribute' => $attribute,
            'brand' => $brand,
            ]);
    }

    
    public function get(Request $request)
    {
 
      

        $search = $request->search;
// dump($search);
        $items = Brand::with('items')->where('id', '=',$search)->get();
       


        //    $items = Item::with('brands')->whereHas('brands', function($query){
        //         $query->where('name', request()->search);
        //     })->get();

        // dump($items);
    }
}
