@extends('admin.layout')

@section('titulo', 'Relatórios')

@section('conteudo')

<div class="container p-10">

    <h3 class="mb-2">Relatórios</h3>

    <p class="mt-8">Selecione o período do frete para gerar o relatório</p>
    <hr class="mt-6 border-zinc-300">

    <form class="mt-6 gap-12" action="{{route('admin.relatorios.gerar')}}" method="POST">
        @csrf

        <div class="flex w-full justify-between">
            <div class="">
                <p class="mb-4">Período:</p>
                <div class="flex gap-4 items-center">
                    <p>De</p>
                    <input type="datetime-local" name="data_de" class="py-4 px-4">
                    <p>a</p>
                    <input type="datetime-local" name="data_a" class="py-4 px-4">
                </div>
            </div>

            {{-- <div class="">
                <p class="mb-4">Status dos Fretes:</p>
                <div class="flex gap-4">
                    <select class="py-4 px-4">
                        <option value="" selected>Todos os status</option>
                        <option value="0">Pendente</option>
                        <option value="1">Aprovado</option>
                        <option value="2">Em andamento</option>
                        <option value="3">Concluído</option>
                        <option value="99">Cancelado</option>
                    </select>
                </div>
            </div>

            <div class="">
                <p class="mb-4">Tipo dos Fretes:</p>
                <div class="flex gap-4">
                    <select class="py-4 px-4">
                        <option value="" selected>Todos os tipos</option>
                        <option value="0">Pendente</option>
                        <option value="1">Aprovado</option>
                        <option value="2">Em andamento</option>
                        <option value="3">Concluído</option>
                        <option value="99">Cancelado</option>
                    </select>
                </div>
            </div> --}}
        </div>

        <hr class="border-zinc-300 mt-8">

        <div class="flex gap-8 mt-12">
            <button type="submit" class="bg-orange-500 py-4 px-8 font-medium rounded-lg" name="gerar_pdf">Gerar PDF</button>
        </div>
    </form>
</div>

@endsection
