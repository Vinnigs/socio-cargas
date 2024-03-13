@extends('site.layout')

@section('titulo', 'Frete #'.$frete->id)

@section('conteudo')

    <section class="breadcrumb">
        <div id="container">
            <a href="{{route('fretes.index')}}">Fretes</a>
            <p>Detalhes do frete</p>
        </div>
    </section>

    <main>
        <div id="container">
            <div class="frete-details">
                <div class="frete-details-top">
                    <h4>Detalhes do frete</h4>
                    <p>#{{$frete->id}}</p>
                    <p>{{$frete->tipo == 0 ? 'Comum' : ($frete->tipo == 1 ? 'Exclusivo' : ($frete->tipo == 2 ? 'Urgente' : ''))}}</p>
                </div>
                <div class="frete-details-resume">
                    <div class="frete-details-resume-item">
                        <img src="/assets/img/rectangle-frete.svg" alt="">
                        <p>Origem:
                            <span> {{$frete->atributos->endereco_origem['cidade'] . '/' . $frete->atributos->endereco_origem['estado']}} </span>
                        </p>
                    </div>
                    <div>
                        <img src="/assets/img/expand-left-arrow.svg" alt="">
                        <img src="/assets/img/expand-left-arrow.svg" alt="">
                        <img src="/assets/img/expand-left-arrow.svg" alt="">
                    </div>
                    <div class="frete-details-resume-item">
                        <img src="/assets/img/circle-frete.svg" alt="">
                        <p>Destino:
                            <span>{{$frete->atributos->endereco_destino['cidade'] . '/' . $frete->atributos->endereco_destino['estado']}} </span>
                        </p>
                    </div>
                </div>
                <div class="frete-details-bottom">
                    <div>
                        <p>Produto: <span>{{$frete->atributos->produto}}</span></p>
                        <p>Preço:
                            @if($frete->atributos->valor != 0)
                                <span> R$ {{$frete->atributos->valor}} </span>
                            @else
                                <span> A COMBINAR </span>
                            @endif
                        </p>
                    </div>
                    <p>Criado em: <span>{{date('d/m/Y', strtotime($frete->updated_at))}}</span></p>
                </div>
                <div class="frete-main-info">
                    <div class="frete-main-truck-info frete-main-general-info">
                        <img src="/assets/img/truck-icon-frete.svg" alt="">
                        <div class="frete-main-truck-info-text frete-main-general-info-text">
                            <p>Veículos:
                                <span>
                                    @isset($frete->atributos->veiculos_pesados)
                                        @foreach($frete->atributos->veiculos_pesados as $veiculos_pesados)
                                            {{$veiculos_pesados . ', '}}
                                        @endforeach
                                    @endisset
                                    @isset($frete->atributos->veiculos_medios)
                                        @foreach($frete->atributos->veiculos_medios as $veiculos_medios)
                                            {{$veiculos_medios . ', '}}
                                        @endforeach
                                    @endisset
                                    @isset($frete->atributos->veiculos_leves)et
                                        @foreach($frete->atributos->veiculos_leves as $veiculos_leves)
                                            {{$veiculos_leves . ', '}}
                                        @endforeach
                                    @endisset
                                </span>
                            </p>
                            <p>Carroceria:
                                <span>
                                    @isset($frete->atributos->carroceria)
                                        @foreach($frete->atributos->carroceria as $carroceria)
                                            {{$carroceria . ', '}}
                                        @endforeach
                                    @endisset
                                </span>
                            </p>

                            @if($frete->atributos->km != 0)
                                <p>KM: <span>{{$frete->atributos->km}}</span></p>
                            @endif

                            <p>ESPÉCIE: <span>{{$frete->atributos->especie}}</span></p>
                            <p>TIPO DE CARGA: <span>{{$frete->atributos->tipo_carga}}</span></p>
                            <p>AGENCIAMENTO: <span>{{$frete->atributos->agenciamento == 1 ? 'Sim' : 'Não'}}</span></p>
                            <p>PRECISA DE LONA: <span>{{$frete->atributos->lona == 1 ? 'Sim' : 'Não'}}</span></p>
                        </div>
                    </div>

                    @isset($frete->atributos->volumes)
                        <div class="frete-main-peso-info frete-main-general-info">
                            <img src="/assets/img/pallet-icon-frete.svg" alt="">
                            <div class="frete-main-truck-info-text frete-main-general-info-text">
                                @isset($frete->atributos->volumes[0])
                                    <p>Volumes da carga: <span>{{$frete->atributos->volumes[0]}}</span></p>
                                @endisset
                                @isset($frete->atributos->volumes[1])
                                    <p>Peso total da carga: <span>{{$frete->atributos->volumes[1]}} quilos</span></p>
                                @endisset
                            </div>
                        </div>
                    @endisset


                    <div class="frete-main-money-info frete-main-general-info">
                        <img src="/assets/img/money-icon-frete.svg" alt="">
                        <div class="frete-main-truck-info-text frete-main-general-info-text">
                            <p>FORMAS DE PAGAMENTO:
                                <span>
                                    @isset($frete->atributos->pagamento)
                                        @foreach($frete->atributos->pagamento as $pagamento)
                                            {{$pagamento}}
                                            {{$loop->last ? '' : ', '}}
                                        @endforeach
                                    @endisset
                                </span>
                            </p>
                            {{-- <p>adiantamento: <span> 70%</span></p> --}}
                            <p>pedágio:
                                <span>{{$frete->atributos->pedagio == 1 ? 'Sim' : 'Não'}}</span>
                            </p>
                            <p>rastreador:
                                <span>{{$frete->atributos->rastreador == 1 ? 'Sim' : 'Não'}}</span>
                            </p>
                        </div>
                    </div>

                    @isset($frete->atributos->observacoes)
                        <div class="frete-main-obs-info frete-main-general-info-text">
                            <p style="width: 100%; overflow:hidden">obs: <span>{{$frete->atributos->observacoes}}</span>
                            </p>
                        </div>
                    @endisset
                </div>

                @can('caminhoneiro')
                    @can('caminhoneiroFreteProgresso', auth()->user()->caminhoneiros)
                        <a class="candidatar-link-disabled"> Você já possui um frete em andamento.</a>

                    @elsecan('freteCandidatado', $frete)
                        <a class="candidatar-link-disabled"><img src="/assets/img/formulario-svg.svg" alt=""> Você já se candidatou a esse frete.</a>

                    @elsecan('checaCandidaturas', auth()->user()->caminhoneiros)
                        <a class="candidatar-link-disabled"><img src="/assets/img/formulario-svg.svg" alt=""> Você não possui candidaturas.</a>

                    @elsecannot('candAssinaturaFrete', $frete)
                        @if((auth()->user()->caminhoneiros->assinatura == 'bronze' || auth()->user()->caminhoneiros->assinatura == 'prata') && $frete->tipo >= 1)
                            <a class="candidatar-link-disabled"><img src="/assets/img/formulario-svg.svg" alt=""> Frete Exclusivo</a>
                            <p style="margin-top: 14px; font-size:12px; opacity: 0.9;">Apenas assinantes Ouro+ podem se candidatar a este frete.</p>

                        @elseif(auth()->user()->caminhoneiros->assinatura == 'ouro' && $frete->tipo >= 1)
                            <a class="candidatar-link-disabled"><img src="/assets/img/formulario-svg.svg" alt=""> <span id="hora" dataCriado="{{$frete->updated_at}}" dataFinal="{{auth()->user()->caminhoneiros->assinatura == 'bronze' ? '24' : (auth()->user()->caminhoneiros->assinatura == 'ouro' ? '12' : '')}}"></span></a>

                        @else
                            <a class="candidatar-link-disabled"><img src="/assets/img/formulario-svg.svg" alt=""> <span id="hora" dataCriado="{{$frete->updated_at}}" dataFinal="{{auth()->user()->caminhoneiros->assinatura == 'bronze' ? '24' : (auth()->user()->caminhoneiros->assinatura == 'prata' ? '12' : '')}}"></span></a>

                        @endif

                    @else
                        <a class="candidatar-link" href="{{route('fretes.candidatar', $frete->id)}}"><img src="/assets/img/formulario-svg.svg" alt=""> Candidatar-se ao frete</a>
                    @endcan
                @endcan

            </div>



            <div class="company-details">
                <div class="company-details-top">
                    <img src="/assets/img/building-frete.svg" alt="">
                    <h6>Sócio Caminhoneiro</h6>
                </div>
                <img class="company-details-img" src="/assets/img/empresas/{{$frete->empresa->imagem}}" alt="">
                <div class="company-details-contact">
                    <a href="{{route('empresas.show', $frete->empresa->slug)}}" class="company-details-contact-link">
                        <img src="/assets/img/building-icon.svg" alt="">
                        <p>Ver empresa</p>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=5511991314323" target="_blank" class="company-details-contact-tel">
                        <img src="/assets/img/frete-contact.svg" alt="">
                        <p>Contato</p>
                    </a>
                </div>
                <div class="company-details-text-bot">
                    <p>Cidade: <span>São Paulo</span></p>
                    <p>Fretes ativos: <span>{{$empresaFretesAtivos}}</span></p>
                </div>
            </div>
        </div>
    </main>

    <section class="priority pagina-frete-carousel">
        <div id="container">
            @if($fretesRelacionados->count() > 0)
                <h3>Fretes relacionados</h3>
                <div class="glide-pesquisar-fretes">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">

                            @foreach($fretesRelacionados as $frete)
                                <li class="glide__slide">
                                    <a href="{{route('fretes.show', $frete->id)}}" class="frete-container" style="min-height:262px;">
                                        <div class="frete-container-top">
                                            <div class="frete-container-top-info">
                                                <div class="frete-loja-container">
                                                    <img class="frete-container-loja-img"
                                                        src="/assets/img/empresas/{{$frete->empresa->imagem}}" alt="">
                                                </div>
                                                <div class="frete-container-top-info-details">
                                                    <img src="/assets/img/rectangle-frete.svg" alt="">
                                                    <img class="rectangle-frete-img" src="/assets/img/dotted-frete.svg" alt="">
                                                    <img src="/assets/img/circle-frete.svg" alt="">
                                                </div>
                                                <div class="frete-container-cities">
                                                    <p>{{$frete->atributos->endereco_origem['cidade'].'/'.$frete->atributos->endereco_origem['estado']}}</p>
                                                    <p>{{$frete->atributos->endereco_destino['cidade'].'/'.$frete->atributos->endereco_destino['estado']}}</p>
                                                </div>
                                            </div>
                                            <p>{{$frete->tipo == 1 ? 'Exclusivo' : ''}}</p>
                                        </div>
                                        <div class="frete-container-bottom">
                                            <div class="frete-container-bottom-type-product">
                                                <img src="/assets/img/tye-of-prod-frete.svg" alt="">
                                                <p>{{$frete->atributos->produto}}</p>
                                            </div>
                                            <div class="frete-container-bottom-info">
                                                <div class="frete-bottom-stats">

                                                    {{-- Frete Urgente --}}
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
                    </div>
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left glide__arrow--left-fretes" data-glide-dir="<"><img
                                src="/assets/img/arrow-left-carousel.svg" alt=""></button>
                        <button class="glide__arrow glide__arrow--right glide__arrow--right-fretes" data-glide-dir=">"><img
                                src="/assets/img/arrow-right-carousel.svg" alt=""></button>

                    </div>
                </div>
            @endif

        </div>
    </section>

@endsection


@push('styles')
    <link rel="stylesheet" href="/assets/css/header-fretes.css">
    <link rel="stylesheet" href="/assets/css/pagina-frete.css">
@endpush

@push('scripts')
    <script defer src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script defer src="/assets/js/mobile-navbar.js"></script>
    <script defer src="/assets/js/pesquisar-fretes-carousel.js"></script>
    <script defer src="/assets/js/contador.js"></script>
@endpush




