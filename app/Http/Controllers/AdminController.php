<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_bd()
    {
        $prod = \App\Models\product::all();
        return view('home', ['prod'=>$prod]);
    }   
    public function add(Request $req)
    {
      $file = $req->file('image');
      $filename = $file->getClientOriginalName();
      $file -> move(public_path('img'), $filename);
        \App\Models\product::create(
          [
            "name_product" => $req->input('name_product'),
            "price" => $req->input('price'),
            "image"  => 'img/'.$filename
          ]
        );
        return redirect(route('admin'));
    }
    public function delete_tov_bd($id)
    {
        \App\Models\product::find($id)->delete();
        return redirect(route('admin'));
    }
}
