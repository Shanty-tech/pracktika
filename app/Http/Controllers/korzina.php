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
    }
    public function view_tov()
    {
        $lox =  UI::where('user_id', auth()->user()->id)->get();
        return view('korzina', ['lox' => $lox]);
    }
}
