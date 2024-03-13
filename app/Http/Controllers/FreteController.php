<?php

namespace App\Http\Controllers;

use App\Models\Caminhoneiro;
use App\Models\Frete;
use App\Models\Empresa;
use App\Models\Atributo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use Carbon\Carbon;

class FreteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $totalFretes = Frete::where('status', 1)->get()->count();
        // $fretesAtivos = Frete::where('status', 1)->orderBy('created_at', 'DESC')->get();

        return view('fretes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if(Gate::allows('empresa')){

            $empresa = Empresa::findOrFail(auth()->user()->empresas->id);

            return view('empresas.fretes.create', compact('empresa'));


        }elseif(Gate::allows('admin')){

            $empresas = Empresa::all();

            return view('admin.fretes.create', compact('empresas'));
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $frete = new Frete;
        $atributos = new Atributo;

        if(Gate::allows('empresa')){

            $atributos->origem = $request->origem;
            $atributos->destino = $request->destino;
            $atributos->produto = $request->produto;
            $atributos->preco = $request->preco;
            $atributos->veiculos_pesados = $request->veiculos_pesados;
            $atributos->veiculos_medios = $request->veiculos_medios;
            $atributos->veiculos_leves = $request->veiculos_leves;
            $atributos->carroceria = $request->carroceria;
            $atributos->pedagio = $request->pedagio;
            $atributos->rastreador = $request->rastreador;
            $atributos->volumes = $request->volumes;
            $atributos->pagamento = $request->pagamento;

            $frete->tipo = $request->tipo;
            $frete->status = 0;
            $frete->empresa_id = $request->empresa_id;

            $atributos->save();

            $frete->atributos_id = $atributos->id;

            $frete->save();

            return redirect(route('minhaempresa.index'))->with('msgSucesso', 'Frete #'.$frete->id.' criado com sucesso!');


        }elseif(Gate::allows('admin')){


            $atributos->endereco_origem = $request->endereco_origem;
            $atributos->endereco_destino = $request->endereco_destino;

            $atributos->produto = $request->produto;
            $atributos->valor = $request->valor;
            $atributos->veiculos_pesados = $request->veiculos_pesados;
            $atributos->veiculos_medios = $request->veiculos_medios;
            $atributos->veiculos_leves = $request->veiculos_leves;
            $atributos->carroceria = $request->carroceria;

            $atributos->tipo_carga = $request->tipo_carga;
            $atributos->agenciamento = $request->agenciamento;
            $atributos->pedagio = $request->pedagio;
            $atributos->rastreador = $request->rastreador;
            $atributos->peso = $request->peso;
            $atributos->lona = $request->lona;
            $atributos->pagamento = $request->pagamento;
            $atributos->observacoes = $request->observacoes;
            $atributos->especie = $request->especie;
            $atributos->km = $request->km;

            $atributos->save();

            $frete->atributos_id = $atributos->id;
            $frete->status = $request->status;
            $frete->tipo = $request->tipo;
            $frete->empresa_id = $request->empresa_id;
            $frete->save();

            return redirect(route('admin.dashboard'))->with('msgSucesso', 'Frete #'.$frete->id.' criado com sucesso!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Frete  $frete
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $frete = Frete::where('id', $id)->firstOrFail();

        $empresa = Empresa::where('id', $frete->empresa_id)->firstOrFail();
        $empresaFretesAtivos = $empresa->fretes()->where('status', 1)->count();


        $fretesRelacionados = Frete::withWhereHas('atributos', function($query) use ($frete) {
                                    $query->where('endereco_origem->estado', $frete->atributos->endereco_origem['estado']);
                                })
                                ->where('status', 1)
                                ->orderBy('created_at', 'desc')
                                ->get();

        return view('fretes.show', compact('frete', 'empresaFretesAtivos', 'fretesRelacionados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frete  $frete
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if(Gate::allows('empresa')){

            $frete = Frete::findOrFail($id);

            Gate::authorize('view', $frete);

            return view('empresas.fretes.edit', compact('frete'));

        }elseif(Gate::allows('admin')){

            $frete = Frete::findOrFail($id);

            Gate::authorize('view', $frete);

            return view('admin.fretes.edit', compact('frete'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Frete  $frete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $frete = Frete::where('id', $request->id)->firstOrFail();
        $atributos = Atributo::where('id', $frete->atributos_id)->firstOrFail();

        if(Gate::allows('empresa')){


            Gate::authorize('update', $frete);

            $frete->caminhoneiro_id = NULL;
            $frete->save();

            $atributos->origem = $request->origem;
            $atributos->destino = $request->destino;
            $atributos->produto = $request->produto;
            $atributos->preco = $request->preco;
            $atributos->veiculos_pesados = $request->veiculos_pesados;
            $atributos->veiculos_medios = $request->veiculos_medios;
            $atributos->veiculos_leves = $request->veiculos_leves;
            $atributos->carroceria = $request->carroceria;
            $atributos->pedagio = $request->pedagio;
            $atributos->rastreador = $request->rastreador;
            $atributos->volumes = $request->volumes;
            $atributos->pagamento = $request->pagamento;
            $atributos->save();

            return redirect()->route('minhaempresa.index');

        }elseif(Gate::allows('admin')){

            $atributos->endereco_origem = $request->endereco_origem;
            $atributos->endereco_destino = $request->endereco_destino;

            $atributos->produto = $request->produto;
            $atributos->valor = $request->valor;
            $atributos->veiculos_pesados = $request->veiculos_pesados;
            $atributos->veiculos_medios = $request->veiculos_medios;
            $atributos->veiculos_leves = $request->veiculos_leves;
            $atributos->carroceria = $request->carroceria;

            $atributos->tipo_carga = $request->tipo_carga;
            $atributos->agenciamento = $request->agenciamento;
            $atributos->pedagio = $request->pedagio;
            $atributos->rastreador = $request->rastreador;
            $atributos->peso = $request->peso;
            $atributos->lona = $request->lona;
            $atributos->pagamento = $request->pagamento;
            $atributos->observacoes = $request->observacoes;
            $atributos->especie = $request->especie;
            $atributos->km = $request->km;

            $atributos->save();

            $frete->caminhoneiro_id = null;
            $frete->tipo = $request->tipo;
            $frete->status = $request->status;
            $frete->save();

            return redirect()->route('admin.fretes.detalhes', $frete->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frete  $frete
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Gate::allows('empresa')){

            $frete = Frete::findOrFail($id);
            $atributo = Atributo::where('id', $frete->atributos_id);

            Gate::authorize('delete', $frete);

            $atributo->delete();
            $frete->delete();

            return redirect()->route('home');

        }elseif(Gate::allows('admin')){

            $frete = Frete::findOrFail($id);
            $atributo = Atributo::where('id', $frete->atributos_id);

            $atributo->delete();
            $frete->delete();

            return redirect(route('admin.dashboard'))->with('msgErro', 'Frete #'.$frete->id.' excluído com sucesso!');
        }
    }




    public function candidatar($id){

        $caminhoneiro = Caminhoneiro::where('user_id', auth()->user()->id)->firstOrFail();
        $frete = Frete::where('id', $id)->firstOrFail();

        // Checando se o caminhoneiro possui um frete em progresso, se já se candidatou a esse frete e se ele possui candidaturas disponíveis.
        if(Gate::allows('caminhoneiroFreteProgresso', $caminhoneiro)){
            abort(403);
        }
        if(Gate::allows('checaCandidaturas', $caminhoneiro)){
            abort(403);
        }
        if(Gate::allows('freteCandidatado', $frete)){
            abort(403);
        }
        if(Gate::denies('candAssinaturaFrete', $frete)){
            abort(403);
        }

        // Vinculando candidatura do caminhoneiro ao frete.
        $caminhoneiro->fretesCandidato()->attach($id);

        // Tirando uma candidatura dele.
        $caminhoneiro->candidaturas -= 1;

        $caminhoneiro->save();

        return redirect()->route('home');
    }

    public function atribuirFreteCaminhoneiro($freteId, $id)
    {
        $caminhoneiro = Caminhoneiro::where('id', $id)->firstOrFail();
        $frete = Frete::where('id', $freteId)->firstOrFail();

        if(Gate::allows('caminhoneiroFreteProgresso', $caminhoneiro)){
            abort(403);
        }

        $frete->caminhoneiro_id = $caminhoneiro->id;
        $frete->status = 2;
        $frete->data_progresso = Carbon::now();

        $frete->save();

        return redirect()->back();
    }



    public function detalhes($id)
    {
        $frete = Frete::where('id', $id)->firstOrFail();
        $caminhoneiros = $frete->caminhoneiros();

        return view('admin.fretes.detalhes', compact('frete', 'caminhoneiros'));
    }



    // Atualização de Status
    public function aprovarFrete($id)
    {
        $frete = Frete::where('id', $id)->firstOrFail();

        if($frete->status == 0){
            $frete->status = 1;
            $frete->data_ativo = Carbon::now();
            $frete->save();
        }else{
            abort(403);
        }

        return redirect()->back();
    }

    public function definirPendente($id)
    {
        $frete = Frete::where('id', $id)->firstOrFail();

        if($frete->status == 1){
            $frete->status = 0;
            $frete->save();
        }else{
            abort(403);
        }

        return redirect()->back();
    }

    public function cancelarFrete(Request $request, $id)
    {
        $frete = Frete::where('id', $id)->firstOrFail();

        if($frete->status != 99){
            $frete->status = 99;
            $frete->msg_cancelado = $request->msg_cancelamento;
            $frete->data_cancelado = Carbon::now();
            $frete->save();
        }else{
            abort(403);
        }

        return redirect()->back();
    }

    public function freteConcluido($id)
    {
        $frete = Frete::where('id', $id)->firstOrFail();

        if($frete->status == 2){

            $frete->status = 3;
            $frete->data_concluido = Carbon::now();
            $frete->save();

            return redirect()->back();

        }else{
            abort(403);
        }
    }
}
