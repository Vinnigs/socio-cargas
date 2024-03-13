@extends('admin.layout')

@section('titulo', 'Cadastrar Frete - Painel de Controle')

@section('conteudo')

<div class="row container" style="margin-top: 56px; margin-bottom: 80px;">

    <div class="row">
        <h3>Cadastrar Frete</h3>
        <form action="{{ route('admin.fretes.store') }}" method="POST" class="col s12">
            @csrf
            @method('POST')

            <div class="row">

                <div class="input-field" style="margin-bottom: 32px">
                    <select name="empresa_id" required>
                        <option value="" disabled selected>Selecione qual empresa o frete pertence</option>
                        @foreach($empresas as $empresa)
                        <option value="{{$empresa->id}}">{{$empresa->nome}}</option>
                        @endforeach
                    </select>
                    <label>Empresa</label>
                </div>
                <div class="input-field">
                    <select name="tipo" required>
                        <option value="0" selected>Frete Comum</option>
                        <option value="1">Frete Exclusivo</option>
                        <option value="2">Frete Urgente</option>
                    </select>
                    <label>Tipo de Frete</label>
                </div>
            </div>

            <div class="row">
                <p style="margin-top:32px; margin-bottom:14px; font-weight:600;">Endereço de origem</p>

                <div class="input-field col s4">
                    <input id="origem_cep" type="text" class="validate" name="endereco_origem[cep]">
                    <label for="origem_cep">CEP</label>
                </div>
                <div class="input-field col s4">
                    <input id="origem_numero" type="text" class="validate" name="endereco_origem[numero]">
                    <label for="origem_numero">Número</label>
                </div>
                <div class="input-field col s4">
                    <input id="origem_rua" type="text" class="validate" name="endereco_origem[rua]">
                    <label for="origem_rua">Rua</label>
                </div>
                <div class="input-field col s4">
                    <input id="origem_bairro" type="text" class="validate" name="endereco_origem[bairro]">
                    <label for="origem_bairro">Bairro</label>
                </div>
                <div class="input-field col s4">
                    <input id="origem_complemento" type="text" class="validate" name="endereco_origem[complemento]">
                    <label for="origem_complemento">Complemento (opcional)</label>
                </div>
                <div class="input-field col s4">
                    <input id="origem_cidade" type="text" class="validate" name="endereco_origem[cidade]">
                    <label for="origem_cidade">Cidade</label>
                </div>
                <div class="input-field col s4">
                    <input id="origem_estado" type="text" class="validate" name="endereco_origem[estado]">
                    <label for="origem_estado">Estado</label>
                </div>
                <div class="input-field col s4">
                    <input id="origem_previsao_carga" type="date" class="validate" name="endereco_origem[previsao_carga]">
                    <label for="origem_previsao_carga">Previsão de carga</label>
                </div>
                <div class="input-field col s4">
                    <input id="origem_hora_carga" type="time" class="validate" name="endereco_origem[hora_carga]">
                    <label for="origem_hora_carga">Hora da carga</label>
                </div>
            </div>

            <div class="row">
                <p style="margin-top:32px; margin-bottom:14px; font-weight:600;">Endereço de destino</p>

                <div class="input-field col s4">
                    <input id="destino_cep" type="text" class="validate" name="endereco_destino[cep]">
                    <label for="destino_cep">CEP</label>
                </div>
                <div class="input-field col s4">
                    <input id="destino_numero" type="text" class="validate" name="endereco_destino[numero]">
                    <label for="destino_numero">Número</label>
                </div>
                <div class="input-field col s4">
                    <input id="destino_rua" type="text" class="validate" name="endereco_destino[rua]">
                    <label for="destino_rua">Rua</label>
                </div>
                <div class="input-field col s4">
                    <input id="destino_bairro" type="text" class="validate" name="endereco_destino[bairro]">
                    <label for="destino_bairro">Bairro</label>
                </div>
                <div class="input-field col s4">
                    <input id="destino_complemento" type="text" class="validate" name="endereco_destino[complemento]">
                    <label for="destino_complemento">Complemento (opcional)</label>
                </div>
                <div class="input-field col s4">
                    <input id="destino_cidade" type="text" class="validate" name="endereco_destino[cidade]">
                    <label for="destino_cidade">Cidade</label>
                </div>
                <div class="input-field col s4">
                    <input id="destino_estado" type="text" class="validate" name="endereco_destino[estado]">
                    <label for="destino_estado">Estado</label>
                </div>
                <div class="input-field col s4">
                    <input id="destino_previsao_descarga" type="date" class="validate" name="endereco_destino[previsao_descarga]">
                    <label for="destino_previsao_descarga">Previsão de descarga</label>
                </div>
                <div class="input-field col s4">
                    <input id="destino_hora_descarga" type="time" class="validate" name="endereco_destino[hora_descarga]">
                    <label for="destino_hora_descarga">Hora da descarga</label>
                </div>
            </div>

            <div class="row">
                <p style="margin-top:32px; margin-bottom:14px; font-weight:600;">Informações do Frete</p>

                <div class="input-field col s6">
                    <input id="valor_frete" type="number" class="validate" name="valor">
                    <label for="valor_frete">Valor do frete</label>
                </div>
                input:nu

                <div class="input-field col s6">
                    <input id="produto_frete" type="text" class="validate" name="produto">
                    <label for="produto_frete">Produto</label>
                </div>

                <div class="input-field col s4">
                    <select name="tipo_carga">
                        <option value="" disabled>Escolha o tipo de carga</option>
                        <option value="Completa">Completa</option>
                        <option value="Complemento">Complemento</option>
                    </select>
                    <label>Tipo de Carga</label>
                </div>

                <div class="input-field col s4">
                    <input id="especie" type="text" class="validate" name="especie">
                    <label for="especie">Espécie da carga</label>
                </div>

                <div class="input-field col s4">
                    <input id="km" type="text" class="validate" name="km">
                    <label for="km">KM do Frete</label>
                </div>

                <div class="input-field col s6">
                    <input id="info-carga" type="text" class="validate" name="peso[volumes]">
                    <label for="info-carga">Volumes da Carga</label>
                </div>
                <div class="input-field col s6">
                    <input id="peso-carga" type="text" class="validate" name="peso[total]">
                    <label for="peso-carga">Peso Total da Carga</label>
                </div>

                <div class="input-field col s3">
                    <p style="margin-bottom: 14px; font-weight:600;">Precisa de Lona?</p>
                    <p>
                        <label>
                            <input class="with-gap" name="lona" type="radio" value="1" />
                            <span>Sim</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input class="with-gap" name="lona" type="radio" value="0" checked />
                            <span>Não</span>
                        </label>
                    </p>
                </div>

                <div class="input-field col s3">
                    <p style="margin-bottom: 14px; font-weight:600;">Rastreador necessário?</p>
                    <p>
                        <label>
                            <input class="with-gap" name="rastreador" type="radio" value="1" />
                            <span>Sim</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input class="with-gap" name="rastreador" type="radio" value="0" checked />
                            <span>Não</span>
                        </label>
                    </p>
                </div>

                <div class="input-field col s3">
                    <p style="margin-bottom: 14px; font-weight:600;">Agenciamento?</p>
                    <p>
                        <label>
                            <input class="with-gap" name="agenciamento" type="radio" value="1" />
                            <span>Sim</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input class="with-gap" name="agenciamento" type="radio" value="0" checked />
                            <span>Não</span>
                        </label>
                    </p>
                </div>

            </div>

            <div class="row">
                <p style="margin-top:32px; margin-bottom:14px; font-weight:600;">Veículos permitidos para o frete</p>
                <div class="input-field col s12">
                    <select multiple name="veiculos_pesados[]">
                        <option value="" disabled>Escolha os Veículos Pesados</option>
                        <option value="Carreta">Carreta</option>
                        <option value="Carreta LS">Carreta LS</option>
                        <option value="Vanderléia">Vanderléia</option>
                        <option value="Bitrem">Bitrem</option>
                        <option value="Rodotrem">Rodotrem</option>
                    </select>
                    <label>Veículos Pesados</label>
                </div>
                <div class="input-field col s12">
                    <select multiple name="veiculos_medios[]">
                        <option value="" disabled>Escolha os Veículos Médios</option>
                        <option value="Truck">Truck</option>
                        <option value="Bitruck">Bitruck</option>
                    </select>
                    <label>Veículos Médios</label>
                </div>
                <div class="input-field col s12">
                    <select multiple name="veiculos_leves[]">
                        <option value="" disabled>Escolha os Veículos Leves</option>
                        <option value="Fiorino">Fiorino</option>
                        <option value="VLC">VLC</option>
                        <option value="3/4">3/4</option>
                        <option value="Toco">Toco</option>
                    </select>
                    <label>Veículos Leves</label>
                </div>
            </div>

            <div class="row">
                <p style="margin-top:32px; margin-bottom:14px; font-weight:600;">Carroceria permitida para o frete</p>
                <div class="input-field col s12">
                    <select multiple name="carroceria[]">
                        <option value="" disabled>Escolha a Carroceria</option>
                        <option value="Graneleiro">Graneleiro</option>
                        <option value="Grade Baixa">Grade Baixa</option>
                        <option value="Sider">Sider</option>
                        <option value="Baú">Baú</option>
                        <option value="Tanque">Tanque</option>
                    </select>
                    <label>Carroceria</label>
                </div>
            </div>

            <div class="row">
                <p style="margin-bottom: 14px; font-weight:600;">Formas de Pagamento</p>
                <div class="input-field col s12">
                    <select multiple name="pagamento[]">
                        <option value="" disabled selected>Escolha o tipo de pagamento</option>
                        <option value="PIX">PIX</option>
                        <option value="Depósito em conta">Depósito em conta</option>
                    </select>
                    <label>Pagamento</label>
                </div>

                <p style="margin-bottom: 14px; font-weight:600;">Pedágio?</p>
                <p>
                    <label>
                        <input class="with-gap" name="pedagio" type="radio" value="1" />
                        <span>Sim</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="with-gap" name="pedagio" type="radio" value="0" checked />
                        <span>Não</span>
                    </label>
                </p>
            </div>



            <div class="row">
                <div class="input-field col s12">
                  <textarea placeholder="Insira observações adicionais..." name="observacoes" id="textarea2" class="materialize-textarea" data-length="120" style="height:250px;width:400px;margin-top:24px;padding:14px"></textarea>
                  <label for="textarea2">Observações (opcional)</label>
                </div>
            </div>

            <div class="input-field row" style="margin: 40px 0;">
                <select name="status">
                    <option value="0" selected>Não</option>
                    <option value="1">Sim</option>
                </select>
                <label>Frete aprovado?</label>
            </div>

            <button type="submit" class="btn btn-large">Cadastrar Frete</button>
        </form>
    </div>
</div>

@endsection
