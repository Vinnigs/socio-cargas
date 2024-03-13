@extends('site.layout')

@section('titulo', 'Cadastrar frete')

@section('conteudo')

<div class="row container" style="margin-top: 56px; margin-bottom: 80px;">

    <div class="row">
        <h3>Cadastrar Frete</h3>
        <form action="{{route('empresa.frete.store')}}" method="POST" class="col s12">
            @csrf
            @method('POST')

            <div class="row">

                <div class="input-field col s6">
                    <input id="origem" type="text" class="validate" name="origem" required>
                    <label for="origem">Origem</label>
                </div>
                <div class="input-field col s6">
                    <input id="destino" type="text" class="validate" name="destino" required>
                    <label for="destino">Destino</label>
                </div>
                <div class="input-field col s6">
                    <input id="produto" type="text" class="validate" name="produto" required>
                    <label for="produto">Produto Transportado</label>
                </div>
                <div class="input-field col s6">
                    <input id="preco" type="text" class="validate" name="preco" required>
                    <label for="preco">Preço</label>
                </div>

            </div>

            <div class="row">
                <p style="margin-top:32px; margin-bottom:14px;">Veículos permitidos para o frete</p>
                <div class="input-field col s12">
                    <select multiple name="veiculos_pesados[]" required>
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
                    <select multiple name="veiculos_medios[]" required>
                        <option value="" disabled>Escolha os Veículos Médios</option>
                        <option value="Truck">Truck</option>
                        <option value="Bitruck">Bitruck</option>
                    </select>
                    <label>Veículos Médios</label>
                </div>
                <div class="input-field col s12">
                    <select multiple name="veiculos_leves[]" required>
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
                <p style="margin-top:32px; margin-bottom:14px;">Carroceria permitida para o frete</p>
                <div class="input-field col s12">
                    <select multiple name="carroceria[]" required>
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
                <p style="margin-bottom: 14px">Informações sobre a Carga</p>
                <div class="input-field col s6">
                    <input id="info-carga" type="text" class="validate" name="volumes[]" required>
                    <label for="info-carga">Volumes da Carga</label>
                </div>
                <div class="input-field col s6">
                    <input id="peso-carga" type="text" class="validate" name="volumes[]" required>
                    <label for="peso-carga">Peso Total da Carga</label>
                </div>
            </div>

            </select>
            <div class="row">
                <p style="margin-bottom: 14px">Formas de Pagamento</p>
                <div class="input-field col s12">
                    <select multiple name="pagamento[]" required>
                        <option value="" disabled selected>Escolha o tipo de pagamento</option>
                        <option value="PIX">PIX</option>
                        <option value="Depósito em conta">Depósito em conta</option>
                    </select>
                    <label>Pagamento</label>
                </div>

                <p style="margin-bottom: 14px">Pedágio?</p>
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
                <p style="margin-bottom: 14px">Necessário Rastreador?</p>
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

            <input type="hidden" name="empresa_id" value="{{$empresa->id}}">

            <button type="submit" class="btn btn-large">Enviar Frete para Avaliação</button>
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
