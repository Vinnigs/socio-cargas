@extends('site.layout')

@section('titulo', 'Editar frete #'.$frete->id)

@section('conteudo')

<div class="row container" style="margin-top: 56px; margin-bottom: 80px;">

    <div class="row">
        <h3>Editando Frete - #{{$frete->id}}</h3>
        <p><strong>Empresa: </strong><a href="{{route('empresas.show', $frete->empresa->slug)}}">{{$frete->empresa->nome}}</a></p>
        <div class="divider" style="margin: 24px 0"></div>

        <form action="{{route('empresa.frete.update', $frete->id)}}" method="POST" class="col s12">
            @csrf
            @method('POST')

            <div class="row">
                <div class="input-field col s6">
                    <input id="origem" type="text" class="validate" name="origem" value="{{$frete->atributos->origem}}">
                    <label for="origem">Origem</label>
                </div>
                <div class="input-field col s6">
                    <input id="destino" type="text" class="validate" name="destino" value="{{$frete->atributos->destino}}">
                    <label for="destino">Destino</label>
                </div>
                <div class="input-field col s6">
                    <input id="produto" type="text" class="validate" name="produto" value="{{$frete->atributos->produto}}">
                    <label for="produto">Produto Transportado</label>
                </div>
                <div class="input-field col s6">
                    <input id="preco" type="text" class="validate" name="preco" value="{{$frete->atributos->preco}}">
                    <label for="preco">Preço</label>
                </div>

            </div>

            <div class="row">
                <p style="margin-top:32px; margin-bottom:14px;">Veículos permitidos para o frete</p>
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
                <p style="margin-top:32px; margin-bottom:14px;">Carroceria permitida para o frete</p>
                <div class="input-field col s12">
                    <select multiple name="carroceria[]">
                        <option value="" disabled>Escolha a Carroceria</option>
                        <option value="Graneleiro" {{ $frete->atributos->carroceria != NULL && isset($frete->atributos->carroceria[0]) ? 'selected' : '' }}>Graneleiro</option>
                        <option value="Grade Baixa" {{ $frete->atributos->carroceria != NULL && isset($frete->atributos->carroceria[1]) ? 'selected' : '' }}>Grade Baixa</option>
                        <option value="Sider" {{ $frete->atributos->carroceria != NULL && isset($frete->atributos->carroceria[2]) ? 'selected' : '' }}>Sider</option>
                        <option value="Baú" {{ $frete->atributos->carroceria != NULL && isset($frete->atributos->carroceria[3]) ? 'selected' : '' }}>Baú</option>
                        <option value="Tanque" {{ $frete->atributos->carroceria != NULL && isset($frete->atributos->carroceria[4]) ? 'selected' : '' }}>Tanque</option>
                    </select>
                    <label>Carroceria</label>
                </div>
            </div>



            <div class="row">
                <p style="margin-bottom: 14px">Informações sobre a Carga</p>
                <div class="input-field col s6">
                    <input id="info-carga" type="text" class="validate" name="volumes[]" value="{{ $frete->atributos->volumes != NULL && isset($frete->atributos->volumes[0]) ? $frete->atributos->volumes[0] : '' }}">
                    <label for="info-carga">Volumes da Carga</label>
                </div>
                <div class="input-field col s6">
                    <input id="peso-carga" type="text" class="validate" name="volumes[]" value="{{ $frete->atributos->volumes != NULL && isset($frete->atributos->volumes[1]) ? $frete->atributos->volumes[1] : '' }}">
                    <label for="peso-carga">Peso Total da Carga</label>
                </div>
            </div>

            </select>
            <div class="row">
                <p style="margin-bottom: 14px">Formas de Pagamento</p>
                <div class="input-field col s12">
                    <select multiple name="pagamento[]">
                        <option value="" disabled>Escolha o tipo de pagamento</option>
                        <option value="PIX" {{ $frete->atributos->pagamento != NULL && isset($frete->atributos->pagamento[0]) ? 'selected' : '' }}>PIX</option>
                        <option value="Depósito em conta" {{ $frete->atributos->pagamento != NULL && isset($frete->atributos->pagamento[1]) ? 'selected' : '' }}>Depósito em conta</option>
                    </select>
                    <label>Pagamento</label>
                </div>

                <p style="margin-bottom: 14px">Pedágio?</p>
                <p>
                    <label>
                        <input class="with-gap" name="pedagio" type="radio" value="1" {{$frete->atributos->pedagio == 1 ? 'checked' : '' }} />
                        <span>Sim</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="with-gap" name="pedagio" type="radio" value="0" {{$frete->atributos->pedagio == 0 ? 'checked' : '' }} />
                        <span>Não</span>
                    </label>
                </p>
            </div>

            <div class="row">
                <p style="margin-bottom: 14px">Necessário Rastreador?</p>
                <p>
                    <label>
                        <input class="with-gap" name="rastreador" type="radio" value="1" {{$frete->atributos->rastreador == 1 ? 'checked' : '' }} />
                        <span>Sim</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="with-gap" name="rastreador" type="radio" value="0" {{$frete->atributos->rastreador == 0 ? 'checked' : '' }} />
                        <span>Não</span>
                    </label>
                </p>
            </div>

            <button type="submit" class="btn btn-large">Atualizar Frete</button>
        </form>
        <form action="{{route('empresa.frete.destroy', $frete->id)}}" method="GET">
            <button type="submit" class="btn btn-large red">Excluir frete</button>
        </form>
    </div>
</div>

@endsection

@push('styles')
    <link rel="stylesheet" href="/assets/css/perfil-caminhoneiro.css">
    <link rel="stylesheet" href="/assets/css/header-fretes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
@endpush

@push('scripts')
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script defer src="/assets/js/headcrumb-menu-opener.js"></script>
    <script defer src="/assets/js/mobile-navbar.js"></script>
    <script defer src="https://unpkg.com/@phosphor-icons/web"></script>
    <script defer src="/assets/js/select-input.js"></script>
    <script defer src="/assets/js/user-rate.js"></script>
@endpush

@push('scripts-body')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        M.AutoInit();
    </script>
@endpush
