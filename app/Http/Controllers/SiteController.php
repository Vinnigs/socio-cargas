<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Gate;

// use App\Models\User;
use App\Models\Frete;
// use App\Models\Empresa;
// use App\Models\Caminhoneiro;

class SiteController extends Controller
{
    public function index(){

        $fretesAtivos = Frete::where('status', 1)
                        ->where('tipo', 2)
                        ->get();

        return view('site.inicio', compact('fretesAtivos'));
    }


    public function institucional(){
        return view('site.institucional.institucional');
    }

    public function sobre(){
        return view('site.institucional.sobre-nos');
    }

}
