<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TestComponent extends Component
{
    public $login;
    public $password;

    protected $rules = [
        'login' => 'required',
        'password' => 'required|min:6',
    ];

    public function upLogin()
    {
        $this->validate();

        $field = filter_var($this->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'user';

        if (Auth::attempt([$field => $this->login, 'password' => $this->password])) {
            return redirect()->route('dash.op');
        } else {
            $this->addError('login', trans('auth.failed'));
        }
    }

    public function render()
    {
        return view('livewire.test-component');
    }
}
