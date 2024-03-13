<div>

    <form action="{{route('admin.empresas.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <p style="font-size: 18px;font-weight:600;">Selecione o usuário responsável pela empresa para continuar</p>

        <select wire:model="usuarioSelecionadoId" wire:change="form">
            <option value="" selected>Selecione o usuário...</option>
            @foreach($usuarios as $user)
                <option value="{{$user->id}}">{{$user->firstName.' '.$user->lastName}}</option>
            @endforeach
        </select>

        <div class="image-field">
            <label for="image">Logo da empresa:</label>
            <input type="file" id="image" name="image">
        </div>

        <div class="input-field col s12">
            <input type="text" name="empresaNome" placeholder="Insira o nome da empresa..." required>
            <label>Nome da Empresa</label>
        </div>
        <div class="input-field col s12">
            <input type="text" name="cnpj" placeholder="Insira o número do documento...">
            <label>CNPJ</label>
        </div>

        <div><p>Informações do Responsável:</p></div>

    @if($usuario)
        <div class="input-field col s6">
            <input disabled value="{{$usuario->firstName}}" id="disabled" type="text">
            <label for="disabled">Nome</label>
        </div>

        <div class="input-field col s6">
            <input disabled value="{{$usuario->lastName}}" id="disabled" type="text">
            <label for="disabled">Sobrenome</label>
        </div>

        <div class="input-field col s12">
            <input disabled value="{{$usuario->email}}" id="disabled" type="text">
            <label for="disabled">E-mail</label>
        </div>

        <input type="hidden" name="empresa" value="1">
        <input type="hidden" name="usuarioId" value="{{$usuario->id}}">

        <button type="submit" class="btn btn-large">Registrar Empresa</button>
    @endif

    </form>

</div>
