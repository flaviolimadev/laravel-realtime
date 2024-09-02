<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class RegisterUser extends Component
{
    public $user;
    public $email;
    public $password;

    protected $rules = [
        'user' => 'required|min:5|unique:users,user|regex:/^[a-z0-9]+$/',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
    ];

    public function register()
    {
        $this->user = $this->sanitizeUser($this->user);
        $this->validate();

        // Gerar o código único
        $code = $this->generateUniqueCode();

        $user = User::create([
            'user' => $this->user,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'code' => $code
        ]);

        session()->flash('message', 'User successfully registered.');

         // Autenticar o usuário
         Auth::login($user);

         // Redirecionar para a rota 'index' com uma mensagem de sucesso
         return redirect()->route('site.index')->with('message', 'User successfully registered and logged in.');

        // Opcional: Limpar os campos após o cadastro
        $this->reset(['user', 'email', 'password']);
    }

    // Método para gerar o código no formato xx-xxx-xx
    protected function generateUniqueCode()
    {
        do {
            $code = Str::upper(Str::random(2)) . '-' . Str::upper(Str::random(3)) . '-' . Str::upper(Str::random(2));
        } while (User::where('code', $code)->exists());

        return $code;
    }

    protected function sanitizeUser($user)
    {
        // Remove espaços, converte para minúsculas, e remove acentos
        $user = strtolower(trim($user));
        $user = preg_replace('/[^a-z0-9]/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $user));
        
        return $user;
    }

    public function render()
    {
        return view('livewire.register-user');
    }
}
