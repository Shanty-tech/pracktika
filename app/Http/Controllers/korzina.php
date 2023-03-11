<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\korzina as UI;
use App\Models\user;
class korzina extends Controller
{
    public function add($id)
    {
        UI::create([
            'user_id' => auth()->user()->id,
            'tovar_id' => $id
        ]);
        $lox =  UI::where('user_id', auth()->user()->id)->get();
        return view('korzina', ['lox' => $lox]);
    }
    public function view_kor()
    {
        $lox =  UI::where('user_id', auth()->user()->id)->get();
        return view('korzina', ['lox' => $lox]);
    }
    public function dellete($id)
    {
        UI::find($id)->delete();
        return redirect(route('korzina'));
    }
    public function product($name = 'id')
    {
        $prod = \App\Models\product::orderby($name)->limit(5)->get();
        return view('korzina', ['prod'=>$prod]);
    }
}
