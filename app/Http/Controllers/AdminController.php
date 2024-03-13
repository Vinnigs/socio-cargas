<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Frete;
use App\Models\Empresa;
use App\Models\Caminhoneiro;

class AdminController extends Controller
{
    public function index(){

        $fretesAndamento = Frete::where('status', 2)->orderBy('updated_at', 'DESC')->paginate(5);
        $fretesPendentes = Frete::where('status', 0)->orderBy('updated_at', 'DESC')->paginate(5);
        $fretesAtivos = Frete::where('status', 1)->orderBy('updated_at', 'DESC')->paginate(5);

        // Contagem de Fretes.
        $contFretesAtivos = Frete::where('status', 1)->count();
        $contFretesPendentes = Frete::where('status', 0)->count();
        $contFretesProgresso = Frete::where('status', 2)->count();
        $contFretesCancelados = Frete::where('status', 3)->count();

        // Contagem Caminhoneiros
        $contCaminhoneiro = Caminhoneiro::where('status', 1)->count();
        $contCaminhoneiroPendente = Caminhoneiro::where('status', 0)->count();
        $contCaminhoneiroRota = Caminhoneiro::withWhereHas('fretesAtribuidos', function($query){
            $query->where('status', 2);
        })->count();

        // Contagem Empresa
        $contEmpresa = Empresa::where('status', 1)->count();

        return view('admin.dashboard', compact('fretesAndamento', 'fretesPendentes', 'fretesAtivos', 'contFretesPendentes', 'contFretesAtivos', 'contFretesProgresso', 'contFretesCancelados', 'contEmpresa', 'contCaminhoneiro', 'contCaminhoneiroRota', 'contCaminhoneiroPendente'));
    }


    public function usuarios(){

        $usuariosComum = User::where('caminhoneiro', '=', 0)->where('empresa', '=', 0)->where('admin', '=', 0)->get();
        $usuarios = User::all();

        return view('admin.usuarios.index', compact('usuariosComum', 'usuarios'));
    }


    public function caminhoneiros(){

        $camStatus = request()->query('status');
        $caminhoneiros = Caminhoneiro::query();

        if($camStatus == 'pendentes'){
            $caminhoneiros = $caminhoneiros->where('status', 0)->get();
            return view('admin.caminhoneiros.index', compact('caminhoneiros'));
        }

        $caminhoneiros = $caminhoneiros->where('status', 1)->get();
        return view('admin.caminhoneiros.index', compact('caminhoneiros'));
    }


    public function empresas(){

        $empresas = Empresa::all();

        return view('admin.empresas.index', compact('empresas'));
    }




    public function fretes(){

        $freteStatus = request()->query('status');

        $fretes = Frete::query();

        if($freteStatus == 'pendentes'){
            $fretes = $fretes->where('status', 0)->get();
            return view('admin.fretes.index', compact('fretes'));

        }elseif($freteStatus == 'andamento'){
            $fretes = $fretes->where('status', 2)->get();
            return view('admin.fretes.index', compact('fretes'));

        }elseif($freteStatus == 'historico'){
            $fretes = Frete::where('status', '>', 2)->get();
            return view('admin.fretes.index', compact('fretes'));
        }

        $fretes = $fretes->where('status', 1)->get();
        return view('admin.fretes.index', compact('fretes'));
    }
}
