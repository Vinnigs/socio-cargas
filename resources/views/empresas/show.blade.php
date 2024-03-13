@extends('site.layout')

@section('titulo', $empresa->nome)

@section('conteudo')

<section class="profile-info-rating">
    <div id="container">
        <img id="pagina-frete-loja-img" src="/assets/img/empresas/{{$empresa->imagem}}" alt="" style="object-fit: cover; margin-bottom:24px;">
        <h2>{{$empresa->nome}}</h2>
    </div>
</section>

<main id="pagina-empresa-main">
    <div id="container">
        @if(count($fretesAtivos) > 0)
            <h3 class="pagina-empresa-title">Fretes disponíveis <span>({{count($fretesAtivos) == 1 ? count($fretesAtivos) . ' resultado' : count($fretesAtivos) . ' resultados'}})</span></h3>
            <ul class="fretes-list-container-page">

                @foreach ($fretesAtivos as $frete)
                    <li class="frete-container">
                        <a href="{{route('fretes.show', $frete->id)}}" class="frete-container-link">
                            <div class="frete-container-top">
                                <div class="frete-container-top-info">
                                    <div class="frete-loja-container">
                                        <img class="frete-container-loja-img" src="/assets/img/empresas/{{$frete->empresa->imagem}}" alt="">
                                    </div>
                                    <div class="frete-container-top-info-details">
                                        <img src="/assets/img/rectangle-frete.svg" alt="">
                                        <img class="rectangle-frete-img" src="/assets/img/rectangle-fretes-black.svg" alt="">
                                        <img src="/assets/img/circle-frete.svg" alt="">
                                    </div>
                                    <div class="frete-container-cities">
                                        <p>{{$frete->atributos->endereco_origem['cidade'].'/'.$frete->atributos->endereco_origem['estado']}}</p>
                                        <p>{{$frete->atributos->endereco_destino['cidade'].'/'.$frete->atributos->endereco_destino['estado']}}</p>
                                    </div>
                                </div>
                                <p>
                                    @php
                                    $diferencaDias = now()->diffInDays($frete->created_at);
                                    @endphp
                                    {{ $diferencaDias == 0 ? 'Hoje' : ($diferencaDias == 1 ? 'Ontem' : 'Há ' . $diferencaDias . ' dias') }}
                                </p>
                            </div>
                            <div class="frete-container-bottom">
                                <div class="frete-container-bottom-type-product">
                                    <img src="/assets/img/material-block-black.svg" alt="">
                                    <p class="type-of-product-text">{{$frete->atributos->produto}}</p>
                                </div>
                                <div class="frete-container-bottom-info">
                                    <div class="frete-bottom-stats">
                                        @if($frete->tipo == 2)
                                            <div>
                                                <img src="/assets/img/speed-clock-frete.svg" alt="">
                                                <p>Urgente</p>
                                            </div>
                                        @endif

                                        {{-- Tipos de Veículos do Frete --}}
                                        @if($frete->atributos->veiculos_pesados != null)

                                        <p class="type-of-frete-vehicle">
                                            @isset($frete->atributos->veiculos_pesados[0])
                                                {{$frete->atributos->veiculos_pesados[0]}}
                                            @endisset

                                            @isset($frete->atributos->veiculos_pesados)
                                                @php
                                                $contagemVeiculos = count(array_slice($frete->atributos->veiculos_pesados, 1)) + ($frete->atributos->veiculos_leves == null ? 0 : count($frete->atributos->veiculos_leves)) + ($frete->atributos->veiculos_medios == null ? 0 : count($frete->atributos->veiculos_medios))
                                                @endphp
                                                @if($contagemVeiculos > 0)
                                                    <span>+{{$contagemVeiculos}}</span>
                                                @endif
                                            @endisset
                                        </p>

                                        @elseif($frete->atributos->veiculos_medios != null)

                                            <p class="type-of-frete-vehicle">
                                                @isset($frete->atributos->veiculos_medios[0])
                                                    {{$frete->atributos->veiculos_medios[0]}}
                                                @endisset

                                                @isset($frete->atributos->veiculos_medios)
                                                    @php
                                                        $contagemVeiculos = count(array_slice($frete->atributos->veiculos_medios, 1)) + ($frete->atributos->veiculos_leves == null ? 0 : count($frete->atributos->veiculos_leves)) + ($frete->atributos->veiculos_pesados == null ? 0 : count($frete->atributos->veiculos_pesados))
                                                    @endphp
                                                    @if($contagemVeiculos > 0)
                                                        <span>+{{$contagemVeiculos}}</span>
                                                    @endif
                                                @endisset
                                            </p>

                                        @elseif($frete->atributos->veiculos_leves != null)

                                            <p class="type-of-frete-vehicle">
                                                @isset($frete->atributos->veiculos_leves[0])
                                                    {{$frete->atributos->veiculos_leves[0]}}
                                                @endisset

                                                @isset($frete->atributos->veiculos_leves)
                                                    @php
                                                        $contagemVeiculos = count(array_slice($frete->atributos->veiculos_leves, 1)) + ($frete->atributos->veiculos_medios == null ? 0 : count($frete->atributos->veiculos_medios)) + ($frete->atributos->veiculos_pesados == null ? 0 : count($frete->atributos->veiculos_pesados))
                                                    @endphp
                                                    @if($contagemVeiculos > 0)
                                                        <span>+{{$contagemVeiculos}}</span>
                                                    @endif
                                                @endisset
                                            </p>
                                        @endif
                                        {{-- ~~~~ --}}
                                    </div>
                                    <p class="frete-value">
                                        @if($frete->atributos->valor != 0)
                                            <span> R$ {{$frete->atributos->valor}} </span>
                                        @else
                                            <span> A COMBINAR </span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach

            </ul>
        @else
            <p>Esta empresa ainda não possui fretes disponíveis.</p>
        @endif

    </div>
</main>

@endsection


@push('styles')
    <link rel="stylesheet" href="/assets/css/perfil-caminhoneiro.css">
    <link rel="stylesheet" href="/assets/css/header-fretes.css">
    <link rel="stylesheet" href="/assets/css/frete-pagina-empresa.css">
@endpush

@push('scripts')
    <script defer src="/assets/js/mobile-navbar.js"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
@endpush




