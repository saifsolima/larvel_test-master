<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    //
    public function show($id)
    {
        return view('Blade.b1')->with('id',$id);
    }
    public function view()
    {
        $BladeArray =[50,20,10,125,12];
        return view('Blade.b2')->with('BA',$BladeArray);
    }

}
