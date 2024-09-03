<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AccountDropdown extends Component
{
    public $conta_type;
    public $balance_fake;
    public $balance;

    public function mount()
    {
        // Inicialize as propriedades com os dados do usuário autenticado
        $this->conta_type = Auth::user()->conta_type; // 0 para conta demo, 1 para conta real
        $this->balance_fake = Auth::user()->balance_fake;
        $this->balance = Auth::user()->balance;
    }

    public function switchAccount($accountType)
    {
        // Atualize a conta ativa
        $this->conta_type = $accountType;
        // Aqui você pode adicionar lógica para salvar a conta ativa no banco de dados, se necessário
        Auth::user()->conta_type = $accountType;
        Auth::user()->save();
    }

    public function render()
    {
        return view('livewire.account-dropdown');
    }
}
