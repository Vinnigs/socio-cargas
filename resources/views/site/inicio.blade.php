@extends('site.layout')

@section('titulo', 'Cargas Sócio Caminhoneiro')

@section('conteudo')

    <main>
        <div id="container">
            <div class="site-selector">
                {{-- <div class="site-selector-option">
                    <img src="/assets/img/shop-site-selector.svg" alt="">
                    <p>Shop</p>
                </div> --}}
                <div class="site-selector-option selected">
                    <img src="/assets/img/cargas-site-selector-selected.svg" alt="">
                    <img class="selected-elipse" src="/assets/img/Ellipse 52.svg" alt="">
                    <p>Cargas</p>
                </div>
                {{-- <div class="site-selector-option">
                    <img src="/assets/img/educativo-site-selector.svg" alt="">
                    <p>Educativo</p>
                </div> --}}
            </div>

            <div class="search-frete">
                <div class="search-frete-top">
                    <div class="search-frete-top-left">
                        <button>Buscar frete</button>
                        <a href="#">Anunciar frete</a>
                    </div>
                    <div class="search-frete-top-right">
                        <a href="{{route('fretes.index')}}">Ver fretes</a>
                        <img src="/assets/img/seta-frete.svg" alt="">
                    </div>
                </div>
                <form class="search-frete-bottom" action="{{route('fretes.index')}}" method="GET">
                    <div class="search-frete-bottom-filter">
                        <div class="search-frete-adress">
                            <div class="search-frete-adress-left">
                                <img src="/assets/img/rectangle-frete.svg" alt="">
                                <div>
                                    <p>ORIGEM</p>
                                    <input type="text" placeholder="SP" name="origem" wire:model="filterOrigem" wire:submit="filterFretes">
                                </div>
                            </div>
                            <div class="search-frete-adress-right">
                                <img src="/assets/img/circle-frete.svg" alt="">
                                <div>
                                    <p>DESTINO <span>(opcional)</span></p>
                                    <input type="text" placeholder="RJ">
                                </div>
                            </div>
                        </div>
                        <div class="search-frete-distance">
                            <img src="/assets/img/seta-up-frete.svg" alt="">
                            <div>
                                <p>Distância <span>(opcional)</span></p>
                                <input type="text" placeholder="Selecione...">
                            </div>
                        </div>
                        <div class="search-frete-vehicle">
                            <div class="search-frete-vehicle-left">
                                <img src="/assets/img/truck-frete.svg" alt="">
                                <div>
                                    <p>VEÍCULO</p>
                                    <input type="text" name="" id="" placeholder="Todos">
                                </div>
                            </div>
                            <div class="search-frete-vehicle-right">
                                <img src="/assets/img/carroceria-frete.svg" alt="">
                                <div>
                                    <p>Carroceria</p>
                                    <input type="text" name="" id="" placeholder="Todos">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="search-frete-btn">
                        <button type="submit" style="background-color:transparent;border:none;cursor:pointer;"><img class="search-desktop-button" src="/assets/img/lupta-search-frete.svg" alt=""></button>
                        <button class="hidden-mobile-search-button">
                            <img src="/assets/img/lupta-search-frete.svg" alt="">
                            <p>Pesquisar</p>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>


    <section class="priority">
    @if($fretesAtivos->count() > 0)
        <div id="container">
            <h3>Fretes com prioridade</h3>
            <div class="glide-cargas">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">

                        @foreach($fretesAtivos as $frete)
                            <li class="glide__slide">
                                <a href="{{route('fretes.show', $frete->id)}}" class="frete-container">
                                    <div class="frete-container-top">
                                        <div class="frete-container-top-info">
                                            <div class="frete-loja-container">
                                                <img class="frete-container-loja-img" src="/assets/img/empresas/{{$frete->empresa->imagem}}" style="max-height:64px;">
                                            </div>
                                            <div class="frete-container-top-info-details">
                                                <img src="/assets/img/rectangle-frete.svg" alt="">
                                                <img class="rectangle-frete-img" src="/assets/img/dotted-frete.svg" alt="">
                                                <img src="/assets/img/circle-frete.svg" alt="">
                                            </div>
                                            <div class="frete-container-cities">
                                                <p>
                                                    {{$frete->atributos->endereco_origem['cidade'].'/'.$frete->atributos->endereco_origem['estado']}}
                                                </p>
                                                <p>
                                                    {{$frete->atributos->endereco_destino['cidade'].'/'.$frete->atributos->endereco_destino['estado']}}
                                                </p>
                                            </div>
                                        </div>
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
                                                    {{$frete->atributos->veiculos_pesados[0]}}
                                                    @php
                                                    $contagemVeiculos = count(array_slice($frete->atributos->veiculos_pesados, 1)) + ($frete->atributos->veiculos_leves == null ? 0 : count($frete->atributos->veiculos_leves)) + ($frete->atributos->veiculos_medios == null ? 0 : count($frete->atributos->veiculos_medios))
                                                    @endphp
                                                    @if($contagemVeiculos > 0)
                                                        <span>+{{$contagemVeiculos}}</span>
                                                    @endif
                                                </p>

                                            @elseif($frete->atributos->veiculos_medios != null)

                                                <p class="type-of-frete-vehicle">
                                                    {{$frete->atributos->veiculos_medios[0]}}
                                                    @php
                                                        $contagemVeiculos = count(array_slice($frete->atributos->veiculos_medios, 1)) + ($frete->atributos->veiculos_leves == null ? 0 : count($frete->atributos->veiculos_leves)) + ($frete->atributos->veiculos_pesados == null ? 0 : count($frete->atributos->veiculos_pesados))
                                                    @endphp
                                                    @if($contagemVeiculos > 0)
                                                        <span>+{{$contagemVeiculos}}</span>
                                                    @endif
                                                </p>

                                            @elseif($frete->atributos->veiculos_leves != null)

                                                <p class="type-of-frete-vehicle">
                                                    {{$frete->atributos->veiculos_leves[0]}}
                                                    @php
                                                        $contagemVeiculos = count(array_slice($frete->atributos->veiculos_leves, 1)) + ($frete->atributos->veiculos_medios == null ? 0 : count($frete->atributos->veiculos_medios)) + ($frete->atributos->veiculos_pesados == null ? 0 : count($frete->atributos->veiculos_pesados))
                                                    @endphp
                                                    @if($contagemVeiculos > 0)
                                                        <span>+{{$contagemVeiculos}}</span>
                                                    @endif
                                                </p>
                                            @endif
                                            {{-- ~~~~ --}}
                                            </div>
                                            <p class="frete-value">
                                                @if($frete->atributos->valor > 0)
                                                    R$ {{$frete->atributos->valor}}
                                                @else
                                                    A COMBINAR
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
                    <div class="glide__bullets" data-glide-el="controls[nav]">
                        <button class="glide__bullet" data-glide-dir="=0"></button>
                        <button class="glide__bullet" data-glide-dir="=1"></button>
                        <button class="glide__bullet" data-glide-dir="=2"></button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    </section>

    <section class="transition">
        <div id="container">
            <a href="#">
                <img src="/assets/img/package-delivery-box.svg" alt="">
                <p>Anunciantes</p>
            </a>
            <a href="#">
                <img src="/assets/img/delivery-truck-cargo-truck.svg" alt="">
                <p>Caminhoneiros</p>
            </a>
            <a href="#">
                <img src="/assets/img/phone 2.svg" alt="">
                <p>Entrar em contato</p>
            </a>
        </div>
    </section>

    <section class="about-us">
        <div id="container">
            <img src="/assets/img/fretes-warehouse.png" alt="">
            <div class="about-us-text">
                <h2 class="general-title">Quem somos</h2>
                <div class="about-us-text-info">
                    <p>Estamos na vanguarda da indústria de entregas de fretes, oferecendo soluções de transporte
                        <span>confiáveis e eficientes</span> que atendem às demandas em constante evolução de nossos
                        clientes.
                    </p>
                    <p>Nossa dedicação à qualidade, à <span>inovação e à satisfação</span> do cliente é o que nos
                        impulsiona.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="socio-info">
        <div id="container">
            <div class="socio-info-unity hidden">
                <h4>O que fazemos</h4>
                <p>Realizamos entregas de fretes eficientes em todo o país, garantindo a segurança e pontualidade.</p>
            </div>
            <div class="socio-info-unity hidden">
                <h4>Por que fazemos melhor</h4>
                <p>Destacamo-nos pela pontualidade e qualidade no atendimento, graças à nossa equipe experiente</p>
            </div>
            <div class="socio-info-unity hidden">
                <h4>Nossos clientes</h4>
                <p>Nossos clientes depositam total credibilidade em nossos serviços e expressam satisfação contínua.</p>
            </div>
        </div>
    </section>

    <section class="truck-enterprises">
        <div id="container">
            <div class="truck-enterprises-option truck-enterprises-option-truck">
                <h3>Para caminhoneiros</h3>
                <p>Encontre o frete perfeito para seu veículo</p>
                <a class="truck-enterprises-hidden-button" href="#">Saiba mais</a>
            </div>
            <div class="truck-enterprises-option truck-enterprises-option-enterprises">
                <h3>Para empresas</h3>
                <p>Publique seu frete e encontre caminhoneiros disponíveis</p>
                <a class="truck-enterprises-hidden-button" href="#">Saiba mais</a>
            </div>
        </div>
    </section>

    <section class="capacities">
        <div id="container">
            <h2 class="capacities-title general-title">Capacidades principais</h2>
            <div class="capacities-container">
                <div class="capacities-left">
                    <div class="capacities-point">
                        <img src="/assets/img/capacities-img1.svg" alt="">
                        <div>
                            <h5>Logística Eficiente</h5>
                            <p>Planejamento e execução eficaz de operações logísticas</p>
                        </div>
                    </div>
                    <div class="capacities-point">
                        <img src="/assets/img/capacities-img2.svg" alt="">
                        <div>
                            <h5>Infraestrutura</h5>
                            <p>Instalações e veículos apropriados para às necessidades dos clientes</p>
                        </div>
                    </div>
                    <div class="capacities-point">
                        <img src="/assets/img/capacities-img3.svg" alt="">
                        <div>
                            <h5>Gestão de Riscos</h5>
                            <p>Identificação e gerenciamento de riscos no transporte</p>
                        </div>
                    </div>
                </div>
                <img class="capacities-back" src="/assets/img/capacities-back.png" alt="">
                <div class="capacities-right">
                    <div class="capacities-point capacities-point-right">
                        <img src="/assets/img/capacities-img4.svg" alt="">
                        <div>
                            <h5>Rastreamento</h5>
                            <p>Tecnologia de rastreamento para monitorar entregas</p>
                        </div>
                    </div>
                    <div class="capacities-point capacities-point-right">
                        <img src="/assets/img/capacities-img5.svg" alt="">
                        <div>
                            <h5>Compliance</h5>
                            <p>Conformidade com regulamentações de transporte</p>
                        </div>
                    </div>
                    <div class="capacities-point capacities-point-right">
                        <img src="/assets/img/capacities-img6.svg" alt="">
                        <div>
                            <h5>Atendimento ao Cliente</h5>
                            <p>Fornecemos excelente atendimento ao cliente </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-numbers">
        <div id="container">
            <h2 class="our-numbers-title general-title">Nossos números</h2>
            <div class="our-numbers-info">
                <div class="our-numbers-info-container">
                    <img src="/assets/img/our-numbers1.svg" alt="">
                    <span class="num-our-numbers" data-val="124+">62000+</span>
                    <span class="text-our-numbers">Entregas bem sucedidas</span>
                </div>
                <div class="our-numbers-info-container">
                    <img src="/assets/img/our-numbers2.svg" alt="">
                    <span class="num-our-numbers" data-val="124+">23 000</span>
                    <span class="text-our-numbers">Clientes Satisfeitos</span>
                </div>
                <div class="our-numbers-info-container">
                    <img src="/assets/img/our-numbers3.svg" alt="">
                    <span class="num-our-numbers" data-val="124+">1 200</span>
                    <span class="text-our-numbers">Horas trabalhadas</span>
                </div>
                <div class="our-numbers-info-container">
                    <img src="/assets/img/our-numbers4.svg" alt="">
                    <span class="num-our-numbers" data-val="124+">12 000</span>
                    <span class="text-our-numbers">Soluções criadas</span>
                </div>
            </div>
        </div>
    </section>

    <section class="partners-metodology">
        <div id="container">
            <div class="partners">
                <div class="partners-top">
                    <h2>Nossos parceiros</h2>
                    <p>Empresas que sabem do que somos capazes e confiam em nós</p>
                </div>
                <div class="partners-bottom">
                    <img src="/assets/img/jadlog-logo.png" alt="">
                    <img src="/assets/img/jadlog-logo.png" alt="">
                    <img src="/assets/img/jadlog-logo.png" alt="">
                    <img src="/assets/img/jadlog-logo.png" alt="">
                </div>
            </div>
            <div class="metodology">
                <img class="metodology-img" src="/assets/img/hand-shaking.png" alt="">
                <div class="metodology-info">
                    <h3 class="metodology-title">Nossa metodologia</h3>

                    <div class="metodology-info-cont-box">
                        <img src="/assets/img/box-product-shipping.svg" alt="">
                        <p>Alta velocidade</p>
                    </div>
                    <div class="metodology-info-cont-box">
                        <img src="/assets/img/quality-certificate-award.svg" alt="">
                        <p>EXCELÊNCIA EM QUALIDADE</p>
                    </div>
                    <div class="metodology-info-cont-box">
                        <img src="/assets/img/profit-increase-chart.svg" alt="">
                        <p>ECONOMIA PARA TODOS</p>
                    </div>
                    <div class="metodology-info-cont-box metodology-info-cont-box-last">
                        <img src="/assets/img/touch-screen-ecommerce-commerce-and-shopping.svg" alt="">
                        <p>EFICIÊNCIA</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="nature">
        <div id="container">
            <div class="nature-text">
                <h3 class="metodology-title nature-title">NOSSA AJUDA COM O MEIO AMBIENTE</h3>
                <h2>Somos comprometidos com um futuro sustentável para todos</h2>
                <p>Uma das principais motivações que impulsionaram a criação da Sócio Caminhoneiro Fretes foi a busca
                    pela <span>redução significativa da poluição</span> pelos caminhões que percorrem todo o país.</p>
                <p>Cada entrega que realizamos é uma etapa em direção a um <span>planeta mais saudável</span>, e estamos
                    orgulhosos de fazer a nossa parte para alcançar esse objetivo.</p>
            </div>
            <img src="/assets/img/nature-img.png" alt="">
        </div>
    </section>

    <section class="clients">
        <div id="container">
            <h2 class="general-title clients-title">Alguns de nossos clientes</h2>
            <div class="clients-img">
                <div class="clients-img-container"><img src="/assets/img/logo-primata-horizontal.png" alt=""></div>
                <div class="clients-img-container"><img src="/assets/img/logo-primata-horizontal.png" alt=""></div>
                <div class="clients-img-container"><img src="/assets/img/logo-primata-horizontal.png" alt=""></div>
                <div class="clients-img-container"><img src="/assets/img/logo-primata-horizontal.png" alt=""></div>
            </div>
        </div>
    </section>

    <section class="clients-carousel">
        <div id="container">
            <div class="glide-clients">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <div class="clients-container">
                                <img src="/assets/img/clients-client.png" alt="">
                                <p>“ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam “</p>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="clients-container">
                                <img src="/assets/img/clients-client.png" alt="">
                                <p>“ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam “</p>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="clients-container">
                                <img src="/assets/img/clients-client.png" alt="">
                                <p>“ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam “</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left glide__arrow--left-clients" data-glide-dir="<"><img
                            src="/assets/img/open-left-clients.svg" alt=""></button>
                    <button class="glide__arrow glide__arrow--right glide__arrow--right-clients" data-glide-dir=">"><img
                            src="/assets/img/open-right-clients.svg" alt=""></button>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div id="container">
            <div class="nature-text about-text">
                <h3 class="metodology-title nature-title">SOBRE NÓS</h3>
                <h2>Nosso compromisso é otimizar o transporte rodoviário de cargas, tornando-o mais eficiente, econômico
                    e ecológico para todos</h2>
                <p>Empregamos tecnologia para unir transportadoras e caminhoneiros, <span>combatendo a elevada
                        ociosidade dos veículos</span>, desburocratizando operações e <span>otimizando o setor</span>.
                </p>
            </div>

            <div class="about-imgs">
                <div class="about-imgs-top">
                    <img class="about-img-little" src="/assets/img/about-imgss1.png" alt="">
                    <img class="about-img-big" src="/assets/img/about-imgss2.png" alt="">
                </div>
                <div class="about-imgs-bottom">
                    <img class="about-img-big" src="/assets/img/about-imgss4.png" alt="">
                    <img class="about-img-little" src="/assets/img/about-imgss3.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="security">
        <div id="container">
            <div class="security-wrapper">
                <h3 class="metodology-title">Segurança</h3>
            <p>Nossa empresa tem um compromisso sólido com a <span>segurança das entregas que realizamos</span>.
                Utilizamos métodos
                avançados de análise de dados para identificar os fatores de risco associados ao transporte de cargas.
                Proporcionando <span>maior tranquilidade aos nossos clientes</span> e garantindo a integridade de suas
                mercadorias
                durante o transporte</p>
            </div>
        </div>
    </section>

    <section class="footer-top">
        <div id="container">
            <div class="footer-top-info-container footer-top-info-container-left">
                <img src="/assets/img/footer-clock.svg" alt="">
                <div class="footer-top-info">
                    <h5>Horário de atendimento</h5>
                    <p>Segunda a Sexta: 07:30 às 17:30</p>
                    <p>Sábado e Domingo: Fechado</p>
                </div>
            </div>

            <div class="footer-top-info-wrapper">
                <div class="footer-top-info-container footer-top-info-container-right">
                    <img src="/assets/img/footer-call-center.svg" alt="">
                    <div class="footer-top-info">
                        <h5>Fale conosco</h5>
                        <p>Suporte 24/7</p>
                        <p>+55 (16) 3504-1955</p>
                    </div>
                </div>
                <div class="footer-top-info-container footer-top-info-container-right">
                    <img src="/assets/img/footer-map.svg" alt="">
                    <div class="footer-top-info">
                        <h5>Nossa localização</h5>
                        <p>Av. Monte Alto, 285 </p>
                        <p>Matão - SP, 15990-452</p>
                    </div>
                </div>
            </div>

            <div class="footer-top-imgs">
                <img src="/assets/img/footer-clock.svg" alt="">
                <img src="/assets/img/footer-call-center.svg" alt="">
                <img src="/assets/img/footer-map.svg" alt="">
            </div>

            <div class="footer-top-text">
                <div class="footer-top-info">
                    <h5>Horário de atendimento</h5>
                    <p>Segunda a Sexta: 07:30 às 17:30</p>
                    <p>Sábado e Domingo: Fechado</p>
                </div>
                <div class="footer-top-info">
                    <h5>Fale conosco</h5>
                    <p>Suporte 24/7</p>
                    <p>+55 (16) 3504-1955</p>
                </div>
                <div class="footer-top-info">
                    <h5>Nossa localização</h5>
                    <p>Av. Monte Alto, 285 </p>
                    <p>Matão - SP, 15990-452</p>
                </div>
            </div>
        </div>
    </section>

@endsection


@push('styles')
    <link rel="stylesheet" href="/assets/css/header-fretes.css">
    <link rel="stylesheet" href="/assets/css/main-cargas.css">
@endpush

@push('scripts')
    <script defer src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script defer src="/assets/js/cargas-carrossel.js"></script>
    <script defer src="/assets/js/header-observer.js"></script>
    <script defer src="/assets/js/mobile-navbar.js"></script>
    <script defer src="/assets/js/animations.js"></script>
@endpush
