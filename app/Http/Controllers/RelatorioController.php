<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\Frete;

class RelatorioController extends Controller
{
    public function index()
    {
        return view('admin.relatorios.index');
    }


    public function gerarRelatorio(Request $request)
    {

        $data_de = $request->data_de;
        $data_a = $request->data_a;
        $hoje = Carbon::today();

        if($request->has('gerar_pdf')){
            $fretes = Frete::whereBetween('created_at', [$data_de, $data_a])->get();

            $data_de = Carbon::parse($data_de)->format('d/m/Y');
            $data_a = Carbon::parse($data_a)->format('d/m/Y');

            $pdf = Pdf::loadView('admin.relatorios.pdf.relatorio', compact('fretes', 'data_de', 'data_a', 'hoje'));
            
            return $pdf->stream('fretes-' . Carbon::today()->format('d/m/Y') . '.pdf');

            // return view('admin.relatorios.pdf.relatorio', compact('fretes', 'data_de', 'data_a', 'hoje'));
        }

        if($request->has('gerar_excel')){
            dd('Excel');
        }

        dd('Deu ruim');

    }


    public function relatorioDetalhes($id)
    {
        $frete = Frete::where('id', $id)->firstOrFail();
        $hoje = Carbon::today()->format('d/m/Y');

        if($frete->status == 3 || $frete->status == 99){

            $pdf = PDF::loadView('admin.relatorios.detalhes.relatorio', compact('frete', 'hoje'));

            return $pdf->stream('relatorio.pdf');

        }else{
            dd('erro');
        }

    }
}
