<?php

namespace App\Livewire\Caminhoneiros;

use App\Models\Caminhoneiro;

use Livewire\Component;

class FormCamPagamentoEdit extends Component
{

    public Caminhoneiro $caminhoneiro;

    public $pagamentosJson;

    public $index = 0;
    public $forms = [];


    public function mount(Caminhoneiro $caminhoneiro)
    {
        $this->caminhoneiro = $caminhoneiro;

        $this->pagamentosJson = $caminhoneiro->dados->info_bancarias;

        foreach($this->pagamentosJson as $pag){
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
        $pag = 'info_' . $index;
        unset($this->pagamentosJson->$pag);
    }


    public function render()
    {
        return view('livewire.caminhoneiros.form-cam-pagamento-edit');
    }
}
