<div>
    <p style="font-size: 16px;font-weight:500;">Editando de Veículos:</p>
        <div class="cadastro-veiculos col s12">
            @foreach($veiculosJson as $veiculo)
                <div class="campo-cadastro col s12">
                    <div class="input-field col s6">
                        <select id="veiculo_{{$loop->index}}" name="veiculos[veiculo_{{$loop->index}}][tipo]">
                            <option value="" selected>Selecione o tipo</option>
                            <option {{$veiculo['tipo'] == 'carreta' ? 'selected' : ''}} value="carreta">Carreta</option>
                            <option {{$veiculo['tipo'] == 'cavalo' ? 'selected' : ''}} value="cavalo">Cavalo</option>
                            <option {{$veiculo['tipo'] == 'dolly' ? 'selected' : ''}} value="dolly">Dolly</option>
                        </select>
                        <label for="veiculo_{{$loop->index}}">Tipo de Veículo</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Insira o número da placa..." type="text" name="veiculos[veiculo_{{$loop->index}}][placa]" value="{{$veiculo['placa']}}">
                        <label>Placa do Veículo</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Insira o nome  proprietário..." type="text" name="veiculos[veiculo_{{$loop->index}}][prop]" value="{{$veiculo['prop']}}">
                        <label>Proprietário do Veículo</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Insira o número de CPF..." type="text" name="veiculos[veiculo_{{$loop->index}}][cpf_prop]" value="{{$veiculo['cpf_prop']}}">
                        <label>CPF do Proprietário</label>
                    </div>
                    <div class="input-field col s3">
                        <input placeholder="Insira a quantidade..." type="number" name="veiculos[veiculo_{{$loop->index}}][eixos]" value="{{$veiculo['eixos']}}">
                        <label>Quantidade de Eixos</label>
                    </div>
                </div>
                @if($loop->index > 0)
                    <a href="#" class="btn btn-secondary red lighten-3" wire:click.prevent="destroy({{$loop->index}})">Excluir</a>
                @endif
            @endforeach


            @foreach($forms as $form => $value)
                <div class="campo-cadastro col s12">
                    <div class="input-field col s6">
                        <select name="veiculos[veiculo_{{$value}}][tipo]">
                            <option value="" selected>Selecione o tipo</option>
                            <option value="carreta">Carreta</option>
                            <option value="cavalo">Cavalo</option>
                            <option value="dolly">Dolly</option>
                        </select>
                        <label>Tipo de Veículo</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Insira o número da placa..." type="text" name="veiculos[veiculo_{{$value}}][placa]">
                        <label>Placa do Veículo</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Insira o nome  proprietário..." type="text" name="veiculos[veiculo_{{$value}}][prop]">
                        <label>Proprietário do Veículo</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Insira o número de CPF..." type="text" name="veiculos[veiculo_{{$value}}][cpf_prop]">
                        <label>CPF do Proprietário</label>
                    </div>
                    <div class="input-field col s3">
                        <input placeholder="Insira a quantidade..." type="number" name="veiculos[veiculo_{{$value}}][eixos]">
                        <label>Quantidade de Eixos</label>
                    </div>
                </div>

                <div class="col s12">
                    <a href="#" class="btn btn-secondary red" wire:click.prevent="remove({{$form}})">X</a>
                </div>

            @endforeach
        </div>
    <div class="input-field col s12">
        <a href="#" class="btn btn-secondary grey" wire:click.prevent="add({{$index}})">Adicionar veículo</a>
    </div>
</div>
