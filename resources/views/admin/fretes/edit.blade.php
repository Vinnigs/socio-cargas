@extends('admin.layout')

@section('titulo', 'Editar Frete - Painel de Controle')

@section('conteudo')

<div class="row container" style="margin-top: 56px; margin-bottom: 80px;">

    <div class="row">
        <h3>Editando Frete - #{{$frete->id}}</h3>
        <p><strong>Empresa: </strong><a href="{{route('empresas.show', $frete->empresa->slug)}}">{{$frete->empresa->nome}}</a></p>
        <div class="divider" style="margin: 24px 0"></div>

        <form action="{{route('admin.fretes.update', $frete->id)}}" method="POST" class="col s12">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="input-field">
                    <select name="tipo" required>
                        <option value="0" {{$frete->tipo == 0 ? 'selected' : ''}} >Frete Comum</option>
                        <option value="1" {{$frete->tipo == 1 ? 'selected' : ''}} >Frete Exclusivo</option>
                        <option value="2" {{$frete->tipo == 2 ? 'selected' : ''}} >Frete Urgente</option>
                    </select>
                    <label>Tipo de Frete</label>
                </div>
            </div>

            <div class="row">
                <p style="margin-top:32px; margin-bottom:14px; font-weight:600;">Endereço de origem</p>

                <div class="input-field col s4">
                    <input id="origem_cep" type="text" class="validate" name="endereco_origem[cep]" value="{{$frete->atributos->endereco_origem['cep']}}">
                    <label for="origem_cep">CEP</label>
                </div>
                <div class="input-field col s4">
                    <input id="origem_numero" type="text" class="validate" name="endereco_origem[numero]" value="{{$frete->atributos->endereco_origem['numero']}}">
                    <label for="origem_numero">Número</label>
                </div>
                <div class="input-field col s4">
                    <input id="origem_rua" type="text" class="validate" name="endereco_origem[rua]" value="{{$frete->atributos->endereco_origem['rua']}}">
                    <label for="origem_rua">Rua</label>
                </div>
                <div class="input-field col s4">
                    <input id="origem_bairro" type="text" class="validate" name="endereco_origem[bairro]" value="{{$frete->atributos->endereco_origem['bairro']}}">
                    <label for="origem_bairro">Bairro</label>
                </div>
                <div class="input-field col s4">
                    <input id="origem_complemento" type="text" class="validate" name="endereco_origem[complemento]" value="{{$frete->atributos->endereco_origem['complemento']}}">
                    <label for="origem_complemento">Complemento (opcional)</label>
                </div>
                <div class="input-field col s4">
                    <input id="origem_cidade" type="text" class="validate" name="endereco_origem[cidade]" value="{{$frete->atributos->endereco_origem['cidade']}}">
                    <label for="origem_cidade">Cidade</label>
                </div>
                <div class="input-field col s4">
                    <input id="origem_estado" type="text" class="validate" name="endereco_origem[estado]" value="{{$frete->atributos->endereco_origem['estado']}}">
                    <label for="origem_estado">Estado</label>
                </div>
                <div class="input-field col s4">
                    <input id="origem_previsao_carga" type="date" class="validate" name="endereco_origem[previsao_carga]" value="{{$frete->atributos->endereco_origem['previsao_carga']}}">
                    <label for="origem_previsao_carga">Previsão de carga</label>
                </div>
                <div class="input-field col s4">
                    <input id="origem_hora_carga" type="time" class="validate" name="endereco_origem[hora_carga]" value="{{$frete->atributos->endereco_origem['hora_carga']}}">
                    <label for="origem_hora_carga">Hora da carga</label>
                </div>
            </div>

            <div class="row">
                <p style="margin-top:32px; margin-bottom:14px; font-weight:600;">Endereço de destino</p>

                <div class="input-field col s4">
                    <input id="destino_cep" type="text" class="validate" name="endereco_destino[cep]" value="{{$frete->atributos->endereco_destino['cep']}}">
                    <label for="destino_cep">CEP</label>
                </div>
                <div class="input-field col s4">
                    <input id="destino_numero" type="text" class="validate" name="endereco_destino[numero]" value="{{$frete->atributos->endereco_destino['numero']}}">
                    <label for="destino_numero">Número</label>
                </div>
                <div class="input-field col s4">
                    <input id="destino_rua" type="text" class="validate" name="endereco_destino[rua]" value="{{$frete->atributos->endereco_destino['rua']}}">
                    <label for="destino_rua">Rua</label>
                </div>
                <div class="input-field col s4">
                    <input id="destino_bairro" type="text" class="validate" name="endereco_destino[bairro]" value="{{$frete->atributos->endereco_destino['bairro']}}">
                    <label for="destino_bairro">Bairro</label>
                </div>
                <div class="input-field col s4">
                    <input id="destino_complemento" type="text" class="validate" name="endereco_destino[complemento]" value="{{$frete->atributos->endereco_destino['complemento']}}">
                    <label for="destino_complemento">Complemento (opcional)</label>
                </div>
                <div class="input-field col s4">
                    <input id="destino_cidade" type="text" class="validate" name="endereco_destino[cidade]" value="{{$frete->atributos->endereco_destino['cidade']}}">
                    <label for="destino_cidade">Cidade</label>
                </div>
                <div class="input-field col s4">
                    <input id="destino_estado" type="text" class="validate" name="endereco_destino[estado]" value="{{$frete->atributos->endereco_destino['estado']}}">
                    <label for="destino_estado">Estado</label>
                </div>
                <div class="input-field col s4">
                    <input id="destino_previsao_descarga" type="date" class="validate" name="endereco_destino[previsao_descarga]" value="{{$frete->atributos->endereco_destino['previsao_descarga']}}">
                    <label for="destino_previsao_descarga">Previsão de descarga</label>
                </div>
                <div class="input-field col s4">
                    <input id="destino_hora_descarga" type="time" class="validate" name="endereco_destino[hora_descarga]" value="{{$frete->atributos->endereco_destino['hora_descarga']}}">
                    <label for="destino_hora_descarga">Hora da descarga</label>
                </div>
            </div>

            <div class="row">
                <p style="margin-top:32px; margin-bottom:14px; font-weight:600;">Informações do Frete</p>

                <div class="input-field col s6">
                    <input id="valor_frete" type="number" class="validate" name="valor" value="{{$frete->atributos->valor}}">
                    <label for="valor_frete">Valor do frete</label>
                </div>

                <div class="input-field col s6">
                    <input id="produto_frete" type="text" class="validate" name="produto"value="{{$frete->atributos->produto}}">
                    <label for="produto_frete">Produto</label>
                </div>

                <div class="input-field col s4">
                    <select name="tipo_carga">
                        <option value="" disabled>Escolha o tipo de carga</option>
                        <option value="Completa" {{$frete->atributos->tipo_carga == 'Completa' ? 'selected' : ''}} >Completa</option>
                        <option value="Complemento" {{$frete->atributos->tipo_carga == 'Complemento' ? 'selected' : ''}}>Complemento</option>
                    </select>
                    <label>Tipo de Carga</label>
                </div>

                <div class="input-field col s4">
                    <input id="especie" type="text" class="validate" name="especie" value="{{$frete->atributos->especie}}">
                    <label for="especie">Espécie da carga</label>
                </div>

                <div class="input-field col s4">
                    <input id="km" type="text" class="validate" name="km" value="{{$frete->atributos->km}}">
                    <label for="km">KM do Frete</label>
                </div>

                <div class="input-field col s6">
                    <input id="info-carga" type="text" class="validate" name="peso[volumes]" value="{{$frete->atributos->peso['volumes']}}">
                    <label for="info-carga">Volumes da Carga</label>
                </div>
                <div class="input-field col s6">
                    <input id="peso-carga" type="text" class="validate" name="peso[total]" value="{{$frete->atributos->peso['total']}}">
                    <label for="peso-carga">Peso Total da Carga</label>
                </div>

                <div class="input-field col s3">
                    <p style="margin-bottom: 14px; font-weight:600;">Precisa de Lona?</p>
                    <p>
                        <label>
                            <input class="with-gap" name="lona" type="radio" value="1" {{$frete->atributos->lona == 1 ? 'checked' : ''}} />
                            <span>Sim</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input class="with-gap" name="lona" type="radio" value="0" {{$frete->atributos->lona == 0 ? 'checked' : ''}} />
                            <span>Não</span>
                        </label>
                    </p>
                </div>

                <div class="input-field col s3">
                    <p style="margin-bottom: 14px; font-weight:600;">Rastreador necessário?</p>
                    <p>
                        <label>
                            <input class="with-gap" name="rastreador" type="radio" value="1" {{$frete->atributos->rastreador == 1 ? 'checked' : ''}} />
                            <span>Sim</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input class="with-gap" name="rastreador" type="radio" value="0" {{$frete->atributos->rastreador == 0 ? 'checked' : ''}} />
                            <span>Não</span>
                        </label>
                    </p>
                </div>

                <div class="input-field col s3">
                    <p style="margin-bottom: 14px; font-weight:600;">Agenciamento?</p>
                    <p>
                        <label>
                            <input class="with-gap" name="agenciamento" type="radio" value="1" {{$frete->atributos->agenciamento == 1 ? 'checked' : ''}} />
                            <span>Sim</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input class="with-gap" name="agenciamento" type="radio" value="0" {{$frete->atributos->agenciamento == 0 ? 'checked' : ''}} />
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
                            <option value="Carreta" {{$frete->atributos->veiculos_pesados != NULL && isset($frete->atributos->veiculos_pesados[0]) ? 'selected' : ''}}>Carreta</option>
                            <option value="Carreta LS" {{$frete->atributos->veiculos_pesados != NULL && isset($frete->atributos->veiculos_pesados[1]) ? 'selected' : ''}}>Carreta LS</option>
                            <option value="Vanderléia" {{$frete->atributos->veiculos_pesados != NULL && isset($frete->atributos->veiculos_pesados[2]) ? 'selected' : ''}}>Vanderléia</option>
                            <option value="Bitrem" {{$frete->atributos->veiculos_pesados != NULL && isset($frete->atributos->veiculos_pesados[3]) ? 'selected' : ''}}>Bitrem</option>
                            <option value="Rodotrem" {{$frete->atributos->veiculos_pesados != NULL && isset($frete->atributos->veiculos_pesados[4]) ? 'selected' : ''}}>Rodotrem</option>
                    </select>
                    <label>Veículos Pesados</label>
                </div>
                <div class="input-field col s12">
                    <select multiple name="veiculos_medios[]">
                        <option value="" disabled>Escolha os Veículos Médios</option>
                        <option value="Truck" {{$frete->atributos->veiculos_medios != NULL && isset($frete->atributos->veiculos_medios[0]) ? 'selected' : ''}}>Truck</option>
                        <option value="Bitruck" {{$frete->atributos->veiculos_medios != NULL && isset($frete->atributos->veiculos_medios[1]) ? 'selected' : ''}}>Bitruck</option>
                    </select>
                    <label>Veículos Médios</label>
                </div>
                <div class="input-field col s12">
                    <select multiple name="veiculos_leves[]">
                        <option value="" disabled>Escolha os Veículos Leves</option>
                        <option value="Fiorino" {{$frete->atributos->veiculos_leves != NULL && isset($frete->atributos->veiculos_leves[0]) ? 'selected' : ''}}>Fiorino</option>
                        <option value="VLC" {{$frete->atributos->veiculos_leves != NULL && isset($frete->atributos->veiculos_leves[1]) ? 'selected' : ''}}>VLC</option>
                        <option value="3/4" {{$frete->atributos->veiculos_leves != NULL && isset($frete->atributos->veiculos_leves[2]) ? 'selected' : ''}}>3/4</option>
                        <option value="Toco" {{$frete->atributos->veiculos_leves != NULL && isset($frete->atributos->veiculos_leves[3]) ? 'selected' : ''}}>Toco</option>
                    </select>
                    <label>Veículos Leves</label>
                </div>
            </div>

            <div class="row">
                <p style="margin-top:32px; margin-bottom:14px; font-weight:600;">Carroceria permitida para o frete</p>
                <div class="input-field col s12">
                    <select multiple name="carroceria[]">
                        <option value="" disabled>Escolha a Carroceria</option>
                        <option value="Graneleiro" {{$frete->atributos->carroceria != NULL && isset($frete->atributos->carroceria[0]) ? 'selected' : ''}}>Graneleiro</option>
                        <option value="Grade Baixa" {{$frete->atributos->carroceria != NULL && isset($frete->atributos->carroceria[1]) ? 'selected' : ''}}>Grade Baixa</option>
                        <option value="Sider" {{$frete->atributos->carroceria != NULL && isset($frete->atributos->carroceria[2]) ? 'selected' : ''}}>Sider</option>
                        <option value="Baú" {{$frete->atributos->carroceria != NULL && isset($frete->atributos->carroceria[3]) ? 'selected' : ''}}>Baú</option>
                        <option value="Tanque" {{$frete->atributos->carroceria != NULL && isset($frete->atributos->carroceria[4]) ? 'selected' : ''}}>Tanque</option>
                    </select>
                    <label>Carroceria</label>
                </div>
            </div>

            <div class="row">
                <p style="margin-bottom: 14px; font-weight:600;">Formas de Pagamento</p>
                <div class="input-field col s12">
                    <select multiple name="pagamento[]">
                        <option value="" disabled>Escolha o tipo de pagamento</option>
                        <option value="PIX" {{$frete->atributos->pagamento != NULL && isset($frete->atributos->pagamento[0]) ? 'selected' : ''}}>PIX</option>
                        <option value="Depósito em conta" {{$frete->atributos->pagamento != NULL && isset($frete->atributos->pagamento[1]) ? 'selected' : ''}}>Depósito em conta</option>
                    </select>
                    <label>Pagamento</label>
                </div>

                <p style="margin-bottom: 14px; font-weight:600;">Pedágio?</p>
                <p>
                    <label>
                        <input class="with-gap" name="pedagio" type="radio" value="1" {{$frete->atributos->pedagio == 1 ? 'checked' : ''}} />
                        <span>Sim</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="with-gap" name="pedagio" type="radio" value="0" {{$frete->atributos->pedagio == 0 ? 'checked' : ''}} />
                        <span>Não</span>
                    </label>
                </p>
            </div>



            <div class="row">
                <div class="input-field col s12">
                  <textarea placeholder="Insira observações adicionais..." name="observacoes" id="textarea2" class="materialize-textarea" data-length="120" maxlength="250" style="height:250px;width:400px;margin-top:24px;padding:14px">{{$frete->atributos->observacoes != null ? $frete->atributos->observacoes : ''}}</textarea>
                  <label for="textarea2">Observações (opcional)</label>
                </div>
            </div>

            <div class="input-field row" style="margin: 40px 0;">
                <select name="status">
                    <option value="0" {{$frete->status == 0 ? 'selected' : ''}}>Não</option>
                    <option value="1" {{$frete->status == 1 ? 'selected' : ''}}>Sim</option>
                </select>
                <label>Frete aprovado?</label>
            </div>

            <button type="submit" class="btn btn-large">Atualizar Frete</button>
        </form>
    </div>
</div>

@endsection
