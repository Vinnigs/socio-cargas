<?php

namespace App\Livewire\Caminhoneiros;

use App\Models\Caminhoneiro;
use Livewire\Component;

// use function Laravel\Prompts\alert;

class FormCamVeiculosEdit extends Component
{

    public Caminhoneiro $caminhoneiro;

    public $veiculosJson;

    public $index = 0;
    public $forms = [];


    public function mount(Caminhoneiro $caminhoneiro)
    {

        $this->caminhoneiro = $caminhoneiro;

        $this->veiculosJson = $caminhoneiro->dados->veiculos;

        foreach($this->veiculosJson as $veiculo){
            $this->index = $this->index + 1;
        }

    }


    public function add($index)
    {
        $this->index = $index + 1;
        array_push($this->forms, $index);
    }


    public function remove($form)
    {
        unset($this->forms[$form]);
    }


    public function destroy($index)
    {
        $veiculo = 'veiculo_' . $index;
        unset($this->veiculosJson->$veiculo);
    }


    public function render()
    {
        return view('livewire.caminhoneiros.form-cam-veiculos-edit');
    }
}
