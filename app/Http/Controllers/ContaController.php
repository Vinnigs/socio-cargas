<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use App\Models\User;
use App\Models\Caminhoneiro;
use App\Models\Empresa;
use App\Models\Frete;

class ContaController extends Controller
{
    public function minhaConta()
    {
        $usuario = User::where('id', auth()->user()->id)->firstOrFail();

        // Acesso para Caminhoneiros.
        if(Gate::allows('caminhoneiro')){

            $caminhoneiro = Caminhoneiro::where('id', auth()->user()->caminhoneiros->id)->firstOrFail();
            $freteAndamento = $caminhoneiro->fretesAtribuidos()->where('status', 2)->get(); // Buscando fretes em andamento do usuário.


            return view('caminhoneiros.minha-conta', compact('caminhoneiro', 'freteAndamento'));

        // Acesso para usuários comuns.
        }elseif(Gate::allows('user')){

            $usuario = auth()->user();

            return view('site.minha-conta', compact('usuario'));
        }

        return redirect()->route('home');
    }



    // Caminhoneiros.
    public function fretesPendentes()
    {
        $caminhoneiro = Caminhoneiro::where('id', auth()->user()->caminhoneiros->id)->firstOrFail();
        $fretesPendentes = $caminhoneiro->fretesCandidato()->where('status', 1)->get(); // Buscando fretes pendentes do usuário.

        return view('caminhoneiros.fretes', compact('fretesPendentes'));
    }


    public function fretesHistorico()
    {
        $caminhoneiro = Caminhoneiro::where('id', auth()->user()->caminhoneiros->id)->firstOrFail();
        $fretesHistorico = $caminhoneiro->fretesAtribuidos()->where('status', '>', 0)->get(); // Busca fretes atribuidos ao caminhoneiro que não estão pendentes.

        return view('caminhoneiros.historico', compact('fretesHistorico'));
    }
    

    public function sairCaminhoneiro()
    {
        return view('caminhoneiros.sair');
    }
    // ~~~~




    // Usuário Comum.
    public function cadastroCaminhoneiro()
    {

        // if(Gate::denies('caminhoneiro')){
        //     $caminhoneiro = Caminhoneiro::where('user_id', auth()->user()->id)->firstOrFail();
        //     dd('barrou');
        // }

        return view('site.cadastro-cam');
    }
    // ~~~~
}
