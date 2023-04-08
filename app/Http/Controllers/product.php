<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class product extends Controller
{
    public function product()
    {
        $prod = \App\Models\product::all();
        return view('welcome', ['prod'=>$prod]);
    }
    
    public function products()
    {
        $prod = \App\Models\product::all();
        return view('cart', ['prod'=>$prod]);
    }
    public function min_price($price = 'price')
    {
        $prod = \App\Models\product::orderby($price, "ASC")->get();
        return view('cart', ['prod'=>$prod]);
    }
    public function max_price($price = 'price')
    {
        $prod = \App\Models\product::orderby($price, "DESC")->get();
        return view('cart', ['prod'=>$prod]);
    }
}
