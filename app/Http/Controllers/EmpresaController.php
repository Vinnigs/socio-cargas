<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Frete;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresa = Empresa::where('user_id', auth()->user()->id)->firstOrFail();

        $fretesEmProgresso = $empresa->fretes()->where('status', 2)->get();
        $fretesAtivos = $empresa->fretes()->where('status', 1)->get();
        $fretesPendentes = $empresa->fretes()->where('status', 0)->get();


        return view('empresas.conta.minha-empresa', compact('empresa', 'fretesEmProgresso', 'fretesAtivos', 'fretesPendentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::where('caminhoneiro', 0)->where('empresa', 0)->where('admin', 0)->get();

        return view('admin.empresas.create', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = User::where('id', $request->usuarioId)->firstOrFail();
        $empresa = new Empresa;

        $usuario->empresa = $request->empresa;
        $usuario->caminhoneiro = 0;
        $usuario->admin = 0;

        $empresa->nome = $request->empresaNome;
        $empresa->cnpj = $request->cnpj;
        $empresa->user_id = $usuario->id;

        $newSlug = Str::slug($request->empresaNome);
        if($empresa->whereSlug($newSlug)->exists()){
            $newSlug = $newSlug.($usuario->id + 5);
        }
        $empresa->slug = $newSlug;

        // Image upload - Tratamento de imagem.
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;

            $request->image->move(public_path('assets/img/empresas/'), $imageName);

            $empresa->imagem = $imageName;
        }

        $usuario->update();
        $empresa->save();

        return redirect(route('admin.empresas.index'))->with('msgSucesso', 'Empresa cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $empresa = Empresa::where('slug', '=', $slug)->firstOrFail();
        $fretesAtivos = Frete::where('empresa_id', $empresa->id)->where('status', 1)->get();

        return view('empresas.show', compact('empresa', 'fretesAtivos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $empresa = Empresa::where('slug', $slug)->firstOrFail();

        return view('admin.empresas.edit', compact('empresa'));
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
        $empresa = Empresa::where('id', $id)->firstOrFail();

        $empresa->nome = $request->empresaNome;

        $newSlug = Str::slug($request->empresaNome);
        if($empresa->whereSlug($newSlug)->exists()){
            $newSlug = $newSlug.($empresa->user->id + 5);
        }
        $empresa->slug = $newSlug;

        // Image upload - Tratamento de imagem.
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;

            $request->image->move(public_path('assets/img/empresas/'), $imageName);

            $empresa->imagem = $imageName;
        }

        $empresa->update();

        return redirect(route('admin.empresas.index'))->with('msgSucesso', 'Empresa editada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa = Empresa::where('id', $id)->firstOrFail();
        $usuario = User::where('id', $empresa->user->id)->firstOrFail();

        $usuario->empresa = 0;

        $usuario->update();
        $empresa->delete();

        return redirect(route('admin.empresas.index'))->with('msgErro', 'Empresa excluída com sucesso.');
    }



    public function contaFretes(){

        $empresa = Empresa::where('user_id', auth()->user()->id)->firstOrFail();
        $fretesEmProgresso = $empresa->fretes()->where('status', 2)->get();
        $fretesAtivos = $empresa->fretes()->where('status', 1)->get();
        $fretesPendentes = $empresa->fretes()->where('status', 0)->get();

        return view('empresas.conta.fretes', compact('empresa', 'fretesEmProgresso', 'fretesAtivos', 'fretesPendentes'));
    }
    public function contaHistorico(){

        $empresa = Empresa::where('user_id', auth()->user()->id)->firstOrFail();
        $fretesConcluidos = $empresa->fretes()->where('status', 3)->get();
        $fretesEmProgresso = $empresa->fretes()->where('status', 2)->get();
        $fretesAtivos = $empresa->fretes()->where('status', 1)->get();
        $fretesPendentes = $empresa->fretes()->where('status', 0)->get();
        $fretesRejeitados = $empresa->fretes()->where('status', 98)->get();
        $fretesCancelados = $empresa->fretes()->where('status', 99)->get();

        return view('empresas.conta.historico', compact('empresa', 'fretesConcluidos', 'fretesEmProgresso', 'fretesAtivos', 'fretesPendentes', 'fretesRejeitados', 'fretesCancelados'));
    }
    public function contaConfig(){

        $empresa = Empresa::where('user_id', auth()->user()->id);

        return view('empresas.conta.configuracoes', compact('empresa'));
    }
    public function contaSair(){

        $empresa = Empresa::where('user_id', auth()->user()->id)->firstOrFail();

        return view('empresas.conta.sair', compact('empresa'));
    }





    public function lista(){

        $empresas = Empresa::all();

        return view('empresas.lista', compact('empresas'));
    }
}
