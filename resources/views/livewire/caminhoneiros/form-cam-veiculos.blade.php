<div>
    <p style="font-size: 16px;font-weight:500;">Cadastro de Veículos:</p>
        <div class="cadastro-veiculos col s12">
            <div class="campo-cadastro col s12">
                <div class="input-field col s6">
                    <select id="veiculo-0" name="veiculos[veiculo_0][tipo]">
                        <option value="" selected>Selecione o tipo</option>
                        <option value="carreta">Carreta</option>
                        <option value="cavalo">Cavalo</option>
                        <option value="dolly">Dolly</option>
                    </select>
                    <label for="veiculo-0">Tipo de Veículo</label>
                </div>
                <div class="input-field col s6">
                    <input placeholder="Insira o número da placa..." type="text" name="veiculos[veiculo_0][placa]">
                    <label>Placa do Veículo</label>
                </div>
                <div class="input-field col s6">
                    <input placeholder="Insira o nome  proprietário..." type="text" name="veiculos[veiculo_0][prop]">
                    <label>Proprietário do Veículo</label>
                </div>
                <div class="input-field col s6">
                    <input placeholder="Insira o número de CPF..." type="text" name="veiculos[veiculo_0][cpf_prop]">
                    <label>CPF do Proprietário</label>
                </div>
                <div class="input-field col s3">
                    <input placeholder="Insira a quantidade..." type="number" name="veiculos[veiculo_0][eixos]">
                    <label>Quantidade de Eixos</label>
                </div>
            </div>
            @foreach($forms as $form)
                <div class="campo-cadastro col s12">
                    <div class="input-field col s6">
                        <select name="veiculos[veiculo_{{$form}}][tipo]">
                            <option value="" selected>Selecione o tipo</option>
                            <option value="carreta">Carreta</option>
                            <option value="cavalo">Cavalo</option>
                            <option value="dolly">Dolly</option>
                        </select>
                        <label>Tipo de Veículo</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Insira o número da placa..." type="text" name="veiculos[veiculo_{{$form}}][placa]">
                        <label>Placa do Veículo</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Insira o nome  proprietário..." type="text" name="veiculos[veiculo_{{$form}}][prop]">
                        <label>Proprietário do Veículo</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Insira o número de CPF..." type="text" name="veiculos[veiculo_{{$form}}][cpf_prop]">
                        <label>CPF do Proprietário</label>
                    </div>
                    <div class="input-field col s3">
                        <input placeholder="Insira a quantidade..." type="number" name="veiculos[veiculo_{{$form}}][eixos]">
                        <label>Quantidade de Eixos</label>
                    </div>
                </div>
            @endforeach
        </div>
    <div class="input-field col s12">
        <a href="#" class="btn btn-secondary grey" wire:click.prevent="add({{$index}})">Adicionar veículo</a>
    </div>
</div>
