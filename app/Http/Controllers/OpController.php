<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OpController extends Controller
{
    //
    public function op(){

        return view('grafico',[
            'auth' => Auth::user(),
        ]);
    }
}
