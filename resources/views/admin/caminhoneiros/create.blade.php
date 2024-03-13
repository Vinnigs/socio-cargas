@extends('admin.layout')

@section('titulo','Cadastro de Caminhoneiro')

@section('conteudo')

<div class="container" style="margin-bottom: 80px">
    <div class="container">
        <h3>Cadastrando Caminhoneiro</h3>
        <div class="divider"></div>

        @livewire('caminhoneiros.cadastro-cam-form')
    </div>
</div>


@endsection
