@extends('admin.layout')

@section('titulo', 'Usuários Cadastrados')

@section('conteudo')

<div class="container" style="margin-top: 80px;">

    @if(session('msgSucesso'))
    <div class="alert success">
        <i class="material-icons">check</i>
        <p>{{session('msgSucesso')}}</p>
    </div>
    @endif

    <div class="flex justify-between pb-10 mb-10 border-b-2 border-zinc-300">
        <h3 class="text-[20px]">Usuários Cadastrados</h3>
        <div class="col s6"><a href="{{route('admin.usuarios.create')}}" class="py-5 px-8 rounded bg-green-600">Cadastrar Usuário</a></div>
    </div>



    <div class="row">
        <div id="geral">
            <table class="w-full text-left">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Tipo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->id}}</td>
                        <td>{{$usuario->firstName.' '.$usuario->lastName}}</td>
                        <td>{{$usuario->caminhoneiro ? 'Caminhoneiro' : ($usuario->empresa ? 'Empresa' : ($usuario->admin ? 'Admin' : 'Comum'))}}</td>
                        <td>
                            <a href="">Ver</a>
                            <a href="">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
