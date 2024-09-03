<?php

namespace App\Http\Controllers;

use App\Events\AtivosUpdate;
use App\Models\Ativo;
use Illuminate\Http\Request;

class UpdatesBroadsController extends Controller
{
    //
    public function ativos(){

        $ativos = Ativo::all();
        broadcast(new AtivosUpdate($ativos));
    }
}
