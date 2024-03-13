<?php

namespace App\Livewire\Caminhoneiros;

use Livewire\Component;

use App\Models\User;

class CadastroCamForm extends Component
{

    public $usuarios;

    public $usuario;
    public $usuarioSelectId;


    public function mount()
    {
        $this->usuarios = User::where('caminhoneiro', 0)->where('empresa', 0)->where('admin', 0)->get();
    }

    public function form()
    {
        if($this->usuarioSelectId != ''){
            $this->usuario = User::where('id', $this->usuarioSelectId)->firstOrFail();
        }else{
            $this->usuario = '';
        }
    }

    public function limpar()
    {
        $this->usuario = '';
        $this->usuarioSelectId = '';
    }

    public function render()
    {
        return view('livewire.caminhoneiros.cadastro-cam-form');
    }
}
