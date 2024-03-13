@extends('admin.layout')

@section('titulo', 'Cadastrar Usuário')

@section('conteudo')

<div class="container">

    @if(session('msgErro'))
    <div class="alert error">
        <i class="material-icons">check</i>
        <p>{{session('msgErro')}}</p>
    </div>
    @endif

    <h3>Cadastro de Usuário</h3>
    <div class="divider"></div>
    <form action="{{route('admin.usuarios.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s6">
                <input type="text" name="firstName" id="firstName" required>
                <label for="firstName">Nome</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="lastName" id="lastName" required>
                <label for="lastName">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email" required>
                <label for="email">E-mail</label>
            </div>
            <div class="input-field col s12">
                <input type="password" name="password" id="password" required>
                <label for="password">Senha</label>
            </div>

            <button type="submit" class="btn btn-large">Cadastrar usuário</button>

        </div>
    </form>
</div>

@endsection
