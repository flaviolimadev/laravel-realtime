<?php

namespace App\Http\Controllers;

use App\Events\UserNameUpdated;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

abstract class Controller
{
    //
    public function updateUserName(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->save();

        // Disparar o evento
        broadcast(new UserNameUpdated($user));

        return view('welcome', [
            'user' => $user,
        ]);


    }
}
