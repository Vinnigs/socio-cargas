<?php

namespace App\Livewire\Caminhoneiros;

use Livewire\Component;

class FormCamVeiculos extends Component
{
    public $index;
    public $forms;


    public function mount()
    {
        $this->index = 1;
        $this->forms = [];
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

    public function render()
    {
        return view('livewire.caminhoneiros.form-cam-veiculos');
    }
}
