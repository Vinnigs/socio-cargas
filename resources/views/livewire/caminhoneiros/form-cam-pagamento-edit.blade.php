<div>
    @foreach($pagamentosJson as $pagamento)
        <div class="cadastro-pagamentos col s12">
            <p style="font-size: 16px;font-weight:500;">Informações de Pagamento:</p>
            <div class="input-field col s6">
                <select name="info_bancarias[info_{{$loop->index}}][tipo]">
                    <option value="" selected>Selecione o tipo de pagamento</option>
                    <option {{$pagamento['tipo'] == 'pix' ? 'selected' : ''}} value="pix">PIX</option>
                    <option {{$pagamento['tipo'] == 'conta_bancaria' ? 'selected' : ''}} value="conta_bancaria">Conta Bancária</option>
                </select>
                <label>Tipo de Pagamento</label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Insira os dados do pagamento..." type="text" name="info_bancarias[info_{{$loop->index}}][dados]" value="{{$pagamento['dados']}}">
                <label>Dados de Pagamento</label>
            </div>
        </div>
        @if($loop->index > 0)
            <a href="#" class="btn btn-secondary red lighten-3" wire:click.prevent="destroy({{$loop->index}})">Excluir</a>
        @endif
    @endforeach


    @foreach($forms as $form => $value)
        <div class="input-field col s6">
            <select name="info_bancarias[info_{{$value}}][tipo]">
                <option value="" selected>Selecione o tipo de pagamento</option>
                <option value="pix">PIX</option>
                <option value="conta_bancaria">Conta Bancária</option>
            </select>
            <label>Tipo de Pagamento</label>
        </div>
        <div class="input-field col s6">
            <input placeholder="Insira os dados do pagamento..." type="text" name="info_bancarias[info_{{$value}}][dados]">
            <label>Dados de Pagamento</label>
        </div>

        <div class="col s12">
            <a href="#" class="btn btn-secondary red" wire:click.prevent="remove({{$form}})">X</a>
        </div>
    @endforeach
        <div class="col s12" style="margin-top: 24px">
            <a href="#" class="btn btn-secondary grey" wire:click.prevent="add({{$index}})">Adicionar pagamento</a>
        </div>
</div>
