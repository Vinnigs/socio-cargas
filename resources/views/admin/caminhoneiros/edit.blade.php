@extends('admin.layout')

@section('titulo', 'Editando Caminhoneiro - '.$caminhoneiro->users->firstName.' '.$caminhoneiro->users->lastName)

@section('conteudo')

<div class="container">
    <div class="container">
        <h3>Caminhoneiro (ID: #{{$caminhoneiro->id}})</h3>
        <div class="divider"></div>

        {{-- Editando Caminhoneiro --}}
        <form action="{{route('admin.caminhoneiros.update', $caminhoneiro->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <p style="font-size: 18px;font-weight:600;">Status do caminhoneiro: {{$caminhoneiro->status == 0 ? 'Pendente' : ($caminhoneiro->status == 1 ? 'Ativo' : ($caminhoneiro->status == 98 ? 'Suspenso' : ($caminhoneiro->status == 99 ? 'Banido' : '')))}}</p>

                <div class="image-field">
                    <label for="image">Foto do caminhoneiro:</label>
                    <input type="file" id="image" name="image">
                </div>

                <div class="input-field col s6">
                    <input disabled value="{{$caminhoneiro->users->firstName}}" id="disabled" type="text">
                    <label for="disabled">Nome</label>
                </div>
                <div class="input-field col s6">
                    <input disabled value="{{$caminhoneiro->users->lastName}}" id="disabled" type="text">
                    <label for="disabled">Sobrenome</label>
                </div>
                <div class="input-field col s12">
                    <input disabled value="{{$caminhoneiro->users->email}}" id="disabled" type="text">
                    <label for="disabled">E-mail</label>
                </div>

                <div class="input-field col s12">
                    <input placeholder="Insira o número de celular..." type="number" name="celular" id="celular" value="{{$caminhoneiro->dados->celular}}">
                    <label for="celular">Celular</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Insira o número de CPF..." type="number" name="cpf" id="cpf" value="{{$caminhoneiro->dados->cpf}}">
                    <label for="cpf">CPF</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Insira o número..." type="text" name="antt" id="antt" value="{{$caminhoneiro->dados->antt}}">
                    <label for="antt">ANTT/Proprietário:</label>
                </div>

                @if(count($caminhoneiro->dados->veiculos) > 0)
                    @livewire('caminhoneiros.form-cam-veiculos-edit', [$caminhoneiro])
                @else
                    @livewire('caminhoneiros.form-cam-veiculos')
                @endif

                @if(count($caminhoneiro->dados->info_bancarias) > 0)
                    @livewire('caminhoneiros.form-cam-pagamento-edit', [$caminhoneiro])
                @else
                    @livewire('caminhoneiros.form-cam-pagamento')
                @endif


                <p style="font-size: 16px;font-weight:500;" class="col s12">Informações Adicionais:</p>
                <div class="input-field col s12">
                    <input placeholder="Insira o número..." type="text" name="semparar" value="{{$caminhoneiro->dados->semparar}}">
                    <label>(TAG) SEM PARAR</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Insira o número..." type="text" name="pis" value="{{$caminhoneiro->dados->pis}}">
                    <label>PIS/INSS</label>
                </div>
            </div>

            @if($caminhoneiro->status == 0 || $caminhoneiro->status == 2)
                <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" name="status" value="1">Aprovar</button>
                <button type="submit" class="mt-8 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" name="status" value="{{$caminhoneiro->status}}">Atualizar dados</button>
                {{-- <button type="submit" class="btn btn-large red" name="status" value="2">Rejeitar...</button> --}}
            @elseif($caminhoneiro->status == 1)
                <button type="submit" class="mt-8 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" name="status" value="{{$caminhoneiro->status}}">Atualizar dados</button>
                <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" name="status" value="0">Desativar</button>
                {{-- <button type="submit" class="btn btn-large red" name="status" value="99">Banir...</button> --}}
            @endif


        </form>

        {{-- Excluindo Caminhoneiro --}}
        {{-- <form action="{{route('admin.caminhoneiros.destroy', $caminhoneiro->id)}}" method="POST">
            @csrf
            @method('POST')
            <input type="hidden" name="id" value="{{$caminhoneiro->id}}">
            <button type="submit" class="btn btn-large red">Excluir Caminhoneiro</button>
        </form> --}}
    </div>
</div>

@endsection
