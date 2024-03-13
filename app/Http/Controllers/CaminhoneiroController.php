<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Caminhoneiro;
use App\Models\Dado;

class CaminhoneiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caminhoneiros = Caminhoneiro::all();

        return view('caminhoneiros.lista', compact('caminhoneiros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.caminhoneiros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = User::where('id', $request->id)->where('caminhoneiro', 0)->where('empresa', 0)->where('admin', 0)->firstOrFail();
        $usuario->caminhoneiro = $request->caminhoneiro;
        $usuario->empresa = 0;
        $usuario->admin = 0;

        $caminhoneiro = new Caminhoneiro;
        $dados = new Dado;

        $newSlug = Str::slug($usuario->firstName.' '.$usuario->lastName);

        if($caminhoneiro->whereSlug($newSlug)->exists()){
            $newSlug = Str::slug($usuario->firstName.' '.$usuario->lastName.' '.($usuario->id+2));
        }

        $caminhoneiro->slug = $newSlug;
        $caminhoneiro->user_id = $usuario->id;
        $caminhoneiro->status = 1;

        $caminhoneiro->save();

        $dados->celular = $request->celular;
        $dados->cpf = $request->cpf;
        $dados->antt = $request->antt;
        $dados->veiculos = $request->veiculos;
        $dados->info_bancarias = $request->info_bancarias;
        $dados->semparar = $request->semparar;
        $dados->pis = $request->pis;
        $dados->caminhoneiro_id = $caminhoneiro->id;

        $dados->save();

        $usuario->save();

        return redirect(route('admin.caminhoneiros.index'))->with('msgSucesso', 'Caminhoneiro (#'.$caminhoneiro->id.') registrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $caminhoneiro = Caminhoneiro::where('slug', '=', $slug)->first();

        if($caminhoneiro){
            return view('caminhoneiros.show', compact('caminhoneiro'));
        }

        dd('erro');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $caminhoneiro = Caminhoneiro::where('slug', '=', $slug)->firstOrFail();

        return view('admin.caminhoneiros.edit', compact('caminhoneiro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $caminhoneiro = Caminhoneiro::where('id', $id)->firstOrFail();
        $dados = $caminhoneiro->dados;

        $caminhoneiro->status = $request->status;

        $dados->celular = $request->celular;
        $dados->cpf = $request->cpf;
        $dados->antt = $request->antt;
        $dados->veiculos = $request->veiculos;
        $dados->info_bancarias = $request->info_bancarias;
        $dados->semparar = $request->semparar;
        $dados->pis = $request->pis;
        $dados->caminhoneiro_id = $caminhoneiro->id;

        // Image upload - Tratamento de imagem.
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;

            $request->image->move(public_path('assets/img/caminhoneiros/'), $imageName);

            $caminhoneiro->imagem = $imageName;
        }

        $caminhoneiro->save();
        $dados->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $caminhoneiro = Caminhoneiro::where('id', $request->id)->firstOrFail();
        $dados = $caminhoneiro->dados;

        $usuario = User::where('id', $caminhoneiro->users->id)->firstOrFail();
        $usuario->caminhoneiro = 0;

        $usuario->update();

        $dados->delete();
        $caminhoneiro->delete();

        return redirect(route('admin.caminhoneiros.index'))->with('msgErro', 'Caminhoneiro deletado com sucesso.');
    }







    public function lista(){

        $caminhoneiros = Caminhoneiro::all();

        return view('caminhoneiros.lista', compact('caminhoneiros'));
    }




    public function storeFromUser(Request $request)
    {
        $usuario = User::where('id', auth()->user()->id)->where('caminhoneiro', 0)->where('empresa', 0)->where('admin', 0)->firstOrFail();

        // Validando dados inseridos
        $request->validate([
            'celular' => 'required',
            'cpf' => 'required',
        ]);

        $usuario->caminhoneiro = 1;
        $usuario->empresa = 0;
        $usuario->admin = 0;

        $caminhoneiro = new Caminhoneiro;
        $dados = new Dado;

        $newSlug = Str::slug($usuario->firstName.' '.$usuario->lastName);

        if($caminhoneiro->whereSlug($newSlug)->exists()){
            $newSlug = Str::slug($usuario->firstName.' '.$usuario->lastName.' '.($usuario->id+2));
        }

        $caminhoneiro->slug = $newSlug;
        $caminhoneiro->user_id = $usuario->id;
        $dados->celular = $request->celular;
        $dados->cpf = $request->cpf;
        $dados->antt = $request->antt;
        $dados->veiculos = $request->veiculos;
        $dados->info_bancarias = $request->info_bancarias;
        $dados->semparar = $request->semparar;
        $dados->pis = $request->pis;

        $caminhoneiro->save();

        $dados->caminhoneiro_id = $caminhoneiro->id;
        $dados->save();

        $usuario->save();

        return redirect(route('site.minhaconta'));
    }
}
