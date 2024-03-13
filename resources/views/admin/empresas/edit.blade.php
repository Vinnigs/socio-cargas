@extends('admin.layout')

@section('titulo','Editando Empresa')

@section('conteudo')

<div class="container">
    <div class="nav-wrapper" style="margin-top: 32px">
        <div class="col s12">
            <a href="{{route('admin.empresas.index')}}" class="breadcrumb" style="color:black">Voltar</a>
        </div>
    </div>
    <h3>Editando Empresa ({{$empresa->nome}})</h3>
    <div class="divider"></div>
    <form action="{{route('admin.empresas.update', $empresa->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">

            <p style="font-size: 24px;font-weight:600;">Edite as informações da empresa</p>

            <div class="image-field">
                <label for="image">Logo da empresa:</label>
                <input type="file" id="image" name="image">
            </div>

            <div class="input-field col s12">
                <input type="text" name="empresaNome" placeholder="Insira o nome da empresa..." value="{{$empresa->nome}}" required>
                <label>Nome da Empresa</label>
            </div>

            <div><p>Informações do Responsável:</p></div>

            <div class="input-field col s6">
                <input disabled value="{{$empresa->user->firstName}}" id="disabled" type="text">
                <label for="disabled">Nome</label>
            </div>
            <div class="input-field col s6">
                <input disabled value="{{$empresa->user->lastName}}" id="disabled" type="text">
                <label for="disabled">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input disabled value="{{$empresa->user->email}}" id="disabled" type="text">
                <label for="disabled">E-mail</label>
            </div>

            <button type="submit" class="btn btn-large">Editar Empresa</button>
        </div>
    </form>
    <form action="{{route('admin.empresas.destroy', $empresa->id)}}" method="POST" style="margin-top: 32px">
        @csrf
        @method('POST')

        {{-- <input type="submit" value="Excluir Empresa" class="btn btn-large red"> --}}
    </form>
</div>


@endsection
