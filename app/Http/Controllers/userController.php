<?php

namespace App\Http\Controllers;

use App\Events\UserNameUpdated;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //
    public function updateUserName(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->save();

        // Disparar o evento
        broadcast(new UserNameUpdated($user));

        // Adicione um log ou dd() para verificar
        Log::info('Evento UserNameUpdated disparado', ['user_id' => $user->id, 'new_name' => $user->name]);
        dd('Evento disparado');


    }

    public function index(){

        $user = User::find(1);

        return view('welcome', [
            'user' => $user,
        ]);
    }
}
