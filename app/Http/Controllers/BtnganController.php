<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BtnganController extends Controller
{
    //
    public function btngan(){
        return view('btngan2');
    }
    public function btngana($id){
        return  '<h1>btngana raqm: '.$id.' kbera</h1> ';

    }
}
