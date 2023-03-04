<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class product extends Controller
{
    public function product($name = 'id')
    {
        $prod = \App\Models\product::orderby($name)->limit(5)->get();
        return view('welcome', ['prod'=>$prod]);
    }
    public function products($name = 'id')
    {
        $prod = \App\Models\product::orderby($name)->get();
        return view('cart', ['prod'=>$prod]);
    }
}
