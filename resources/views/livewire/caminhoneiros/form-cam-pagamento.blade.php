<div>
    <div class="cadastro-pagamentos col s12">
        <p style="font-size: 16px;font-weight:500;">Informações de Pagamento:</p>
        <div class="input-field col s6">
            <select name="info_bancarias[info_0][tipo]">
                <option value="" selected>Selecione o tipo de pagamento</option>
                <option value="pix">PIX</option>
                <option value="conta_bancaria">Conta Bancária</option>
            </select>
            <label>Tipo de Pagamento</label>
        </div>
        <div class="input-field col s6">
            <input placeholder="Insira os dados do pagamento..." type="text" name="info_bancarias[info_0][dados]">
            <label>Dados de Pagamento</label>
        </div>
    </div>
    @foreach($forms as $form)
        <div class="input-field col s6">
            <select name="info_bancarias[info_{{$form}}][tipo]">
                <option value="" selected>Selecione o tipo de pagamento</option>
                <option value="pix">PIX</option>
                <option value="conta_bancaria">Conta Bancária</option>
            </select>
            <label>Tipo de Pagamento</label>
        </div>
        <div class="input-field col s6">
            <input placeholder="Insira os dados do pagamento..." type="text" name="info_bancarias[info_{{$form}}][dados]">
            <label>Dados de Pagamento</label>
        </div>
    @endforeach
    <a href="#" class="btn btn-secondary grey" wire:click.prevent="add({{$index}})">Adicionar pagamento</a>
</div>
