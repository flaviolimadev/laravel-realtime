<?php

namespace App\Livewire;

use App\Models\Ativo;
use Livewire\Component;

class ActiveDropdown extends Component
{
    public $search = '';
    public $ativos = [];

    public function mount()
    {
        $this->loadData();
    }

    public function loadData()
    {
        $query = Ativo::where('status', 1);

        if ($this->search) {
            $query->where('ativo', 'like', '%' . $this->search . '%');
        }

        $this->ativos = $query->get();
    }

    public function updatedSearch()
    {
        $this->loadData();
    }

    public function refreshDropdown()
    {
        $this->loadData();
    }

    public function render()
    {
        return view('livewire.active-dropdown');
    }
}
