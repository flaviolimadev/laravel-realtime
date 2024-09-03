<?php

namespace App\Http\Controllers;

use App\Events\AtivosUpdate;
use App\Models\Ativo;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //// Disparar o evento
    public function index(){

        $ativos = Ativo::all();

        return view('site', [
            'ativos' => $ativos 
        ]);
    }
}
