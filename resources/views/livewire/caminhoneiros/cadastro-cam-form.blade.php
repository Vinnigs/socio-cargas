<div>
    <form action="{{route('admin.caminhoneiros.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="row">
            <p style="font-size: 18px;font-weight:600;">Selecione o usuário que será cadastrado como caminhoneiro.</p>

            @if(!$usuario)
                <select wire:model="usuarioSelectId" wire:change="form">
                    <option value="" selected>Selecione o usuário...</option>
                    @foreach($usuarios as $user)
                        <option value="{{$user->id}}">{{$user->firstName.' '.$user->lastName}}</option>
                    @endforeach
                </select>
            @else
                <p>Usuário selecionado: {{$usuario->firstName.' '.$usuario->lastName}} #{{$usuario->id}}</p>
                <a href="#" wire:click.prevent="limpar">Escolher outro usuário</a>
            @endif


            @if($usuario)
                <div class="input-field col s6">
                    <input disabled value="{{$usuario->firstName}}" type="text" required>
                    <label>Nome</label>
                </div>
                <div class="input-field col s6">
                    <input disabled value="{{$usuario->lastName}}" type="text" required>
                    <label>Sobrenome</label>
                </div>
                <div class="input-field col s12">
                    <input disabled value="{{$usuario->email}}" type="text" required>
                    <label>E-mail</label>
                </div>

                <div class="input-field col s12">
                    <input placeholder="Insira o número de celular..." type="number" name="celular" id="celular" required>
                    <label for="celular">Celular</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Insira o número de CPF..." type="number" name="cpf" id="cpf" required>
                    <label for="cpf">CPF</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Insira o número..." type="text" name="antt" id="antt" required>
                    <label for="antt">ANTT/Proprietário:</label>
                </div>

                @livewire('caminhoneiros.form-cam-veiculos')

                @livewire('caminhoneiros.form-cam-pagamento')

                <p style="font-size: 16px;font-weight:500;" class="col s12">Informações Adicionais:</p required>
                <div class="input-field col s12">
                    <input placeholder="Insira o número..." type="text" name="semparar" required>
                    <label>(TAG) SEM PARAR</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Insira o número..." type="text" name="pis" required>
                    <label>PIS/INSS</label>
                </div>


                <input type="hidden" name="caminhoneiro" value="1">
                <input type="hidden" name="id" value="{{$usuario->id}}">
                <button type="submit" class="btn btn-large col s12">Enviar Cadastro</button>
            @endif
        </div>
    </form>
</div>
