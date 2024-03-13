
@extends('admin.layout')

@section('titulo','Cadastro de Empresa')

@section('conteudo')

<div class="container">
    <div class="container">
        <h3>Cadastrando Empresa</h3>
        <div class="divider"></div>

        @livewire('empresas.cadastro-empresa-form')
    </div>
</div>

@endsection
