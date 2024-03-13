<?php

namespace App\Livewire\Empresas;

use Livewire\Component;

use App\Models\User;

class CadastroEmpresaForm extends Component
{

    public $usuarios;

    public $usuario;
    public $usuarioSelecionadoId;


    public function mount()
    {
        $this->usuarios = User::where('caminhoneiro', 0)->where('empresa', 0)->where('admin', 0)->get();
    }


    public function form()
    {
        if($this->usuarioSelecionadoId != ''){
            $this->usuario = User::where('id', $this->usuarioSelecionadoId)->firstOrFail();
        }else{
            $this->usuario = '';
        }
    }


    public function render()
    {
        return view('livewire.empresas.cadastro-empresa-form');
    }
}
