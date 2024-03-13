<?php

namespace App\Livewire\Fretes;

use Livewire\Component;

use App\Models\Frete;
use Illuminate\Http\Request;

class Lista extends Component
{

    public $fretesAtivos;   // Model.
    public $fretesContagem;

    public $filterOrigem;

    public $filterDestino;

    public $filterDistancia;
    public $distancia;

    public array $filterVeiculos = [];

    public array $filterCarroceria = [];
    

    public function mount(){
        // Encapsulando atributo Fretes Ativos assim que a página é carregada.
        $fretesAtivos = Frete::where('status', 1)->get();

        // Verificando requisições da página inicial.
        if(request()->filled('origem')){
            $this->filterOrigem = request()->input('origem');
            $this->filterFretes();
        }

        $this->fretesContagem = $fretesAtivos->count();
        $this->fretesAtivos = $fretesAtivos;
    }


    public function filterFretes(){
        
        $query = Frete::query();    // Abrindo uma Query dos Fretes.

        // Filtro Origem/Destino.
        if($this->filterOrigem)
        {
            $query->withWhereHas('atributos', function($q){
                $q->where('endereco_origem->estado', $this->filterOrigem);
            });
        }
        if($this->filterDestino)
        {
            $query->withWhereHas('atributos', function($q){
                $q->where('endereco_destino->estado', $this->filterDestino);
            });
        }
        // ~~~~

        // Filtro de Distância.
        if($this->filterDistancia)
        {

            if($this->filterDistancia == 'ate50km'){
                $this->distancia = [0, 50];
            }elseif($this->filterDistancia == 'ate100km'){
                $this->distancia = [51, 100];
            }elseif($this->filterDistancia == 'mais100km'){
                $this->distancia = [101, 999999999];
            }

            $query->withWhereHas('atributos', function($q){
                $q->whereBetween('km', $this->distancia);
            });
        }
        // ~~~~

        // Filtro de Veículos
        if($this->filterVeiculos)
        {
            $query->withWhereHas('atributos', function($q){
                foreach($this->filterVeiculos as $veiculo => $value){
                    if($value){
                        $q->where(function($qr) use ($veiculo){
                            $qr->orWhereJsonContains('veiculos_pesados', $veiculo);
                            $qr->orWhereJsonContains('veiculos_medios', $veiculo);
                            $qr->orWhereJsonContains('veiculos_leves', $veiculo);
                        });
                    }
                }
            });
            // dd($this->filterVeiculos);
        }
        // ~~~~
        
        // Filtro de Carroceria
        if($this->filterCarroceria)
        {
            $query->withWhereHas('atributos', function($q){
                foreach($this->filterCarroceria as $carroceria => $valor){
                    if($valor){
                        $q->whereJsonContains('carroceria', $carroceria);
                    }
                }
            });
        }
        // ~~~~

        $this->fretesAtivos = $query->get();
        $this->fretesContagem = $this->fretesAtivos->count();
    }


    public function render()
    {
        $fretesAtivos = $this->fretesAtivos;
        
        return view('livewire.fretes.lista', compact('fretesAtivos'));
    }
}
