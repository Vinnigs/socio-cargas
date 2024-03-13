<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!--Metas -=-=-=-=-=-=-=-=-=-=-=-=-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Links -=-=-=-=-=-=-=-=-=-=-=-=-->
    <link rel="icon" href="/assets/institucional/img/Design sem nome (8).png">
    <link rel="stylesheet" href="/assets/institucional/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="/assets/institucional/css/animation.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <!-- Glide JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.4.1/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.4.1/dist/css/glide.theme.min.css">

    <!--Scripts-=-=-=-=-=-=-=-=-=-=-=-=-=--->
    <script defer src="/assets/institucional/js/mobile-navbar.js"></script>
    <script defer src="/assets/institucional/js/animations.js"></script>
    <script defer src="/assets/institucional/js/counting-numbers.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script defer src="/assets/institucional/js/carrousel.js"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <title>Sócio Caminhoneiro</title>
</head>

<body>
    <div class="header-top">
        <div id="container">
            <div class="header-top-left">
                <div class="header-left">
                    <img src="/assets/institucional/img/telephone-receiver-material.svg" alt="">
                    <p>(16) 3504-1955</p>
                </div>
                <div class="header-left">
                    <img src="/assets/institucional/img/email-1572.svg" alt="">
                    <p>contato@sociocaminhoneiro.com</p>
                </div>
            </div>
            <div class="header-top-right">
                <a href="#"><img src="/assets/institucional/img/insta-logo.svg" alt="Link para o instagram"></a>
                <a href="#"><img src="/assets/institucional/img/linkedin-logo.svg" alt="Link para o LinkedIn"></a>
                <a href="#"><img src="/assets/institucional/img/youtube-logo.svg" alt="Link para o youtube"></a>
            </div>
        </div>
    </div>

    <header id="header" class="header">
        <nav id="container">
            <a class="header-profile-link" href="{{route('login.entrar')}}"><img src="/assets/institucional/img/profile-picture-svg.svg" alt=""></a>
            <img src="/assets/institucional/img/socio-caminhoneiro-top-logo1.png" alt="">
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list header-links">
                <li><a href="{{route('login.entrar')}}"><i class="ph ph-user"></i>Meu perfil</a></li>
                <li><a href="{{route('institucional.sobre')}}"><i class="ph ph-book"></i>Sobre nós</a></li>
                <li><a href="/"><i class="ph ph-truck"></i>Sócio Cargas</a></li>
                <li><a href="{{route('institucional.sobre')}}"><i class="ph ph-circles-four"></i>Serviços</a></li>
                <li><a href="{{route('institucional.sobre')}}"><i class="ph ph-phone"></i>Contato</a></li>
                <li><a href="{{route('institucional.sobre')}}"><i class="ph ph-info"></i>Ajuda</a></li>
            </ul>

        </nav>
    </header>

    <main class="home-main">
        <div id="container">
            <div class="header-tip">
                <a href="/">Conheça nossa plataforma de fretes</a>
                <img src="/assets/institucional/img/open-right.svg" alt="">
            </div>

            <div class="header-text">
                <h1>SÓCIO CAMINHONEIRO</h1>
                <p>
                    A maior plataforma logística de embarque do Brasil. A revolução no seguimento logístico, uma solução
                    completa, inovadora e cheia de benefícios.
                </p>
                <a href="#">Seja um sócio</a>
            </div>
        </div>
    </main>

    <section class="talk-to-us">
        <div id="container">
            <div class="info-spaces">
                <div class="info-space">
                    <img src="/assets/institucional/img/info-locker.svg" alt="">
                    <p>Suas informações estão totalmente seguras</p>
                </div>
                <div class="info-space">
                    <img src="/assets/institucional/img/info-truck.svg" alt="">
                    <p>Suas informações estão totalmente seguras</p>
                </div>
                <div class="info-space">
                    <img src="/assets/institucional/img/info-thunder.svg" alt="">
                    <p>Suas informações estão totalmente seguras</p>
                </div>
            </div>

            <div class="talk-to-us-text">
                <p>Uma empresa criada por experiências que se completam através de 20 anos de jornada.</p>
                <div class="talk-to-us-buttons">
                    <a class="talk-to-us-text-button1" href="#">Fale conosco</a>
                    <a class="talk-to-us-text-button2" href="#">Saiba mais</a>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <img class="about-back" src="/assets/institucional/img/about-background.png" alt="">
        <div id="container">
            <img class="about-img-top" src="/assets/institucional/img/about-pic.png" alt="">
            <div class="about-text">
                <h6>SAIBA MAIS SOBRE A SÓCIO</h6>
                <h3>Quem nós somos</h3>
                <p>Estamos na vanguarda da indústria de entregas de fretes, oferecendo soluções de transporte
                    <span>confiáveis e eficientes</span> que atendem às demandas em constante evolução de nossos
                    clientes.
                </p>
                <p>Nossa dedicação à qualidade, à <span>inovação e à satisfação</span> do cliente é o que nos
                    impulsiona para o futuro.</p>
            </div>
        </div>
    </section>

    <section class="orcamento">
        <div id="container">
            <p>Torne a logística da sua empresa mais eficiente.</p>
            <a href="#">Faça seu orçamento</a>
        </div>
    </section>

    <section class="plataforms">
        <img class="plataforms-back1" src="/assets/institucional/img/x-octagon-plataforms.svg" alt="">
        <img class="plataforms-back2" src="/assets/institucional/img/x-octagon2-plataforms.svg" alt="">
        <div id="container">
            <div class="plataforms-title">
                <p>CONFIRA NOSSAS PLATAFORMAS</p>
                <h2>Veja as diversas formas que a Sócio pode te ajudar</h2>
            </div>

            <div class="plataforms-categorie plataforms-categorie-shop hidden" style="display: none;">
                <img src="/assets/institucional/img/plataforms-img1.png" alt="">
                <div class="plataforms-categorie-text">
                    <h3>Sócio Shop</h3>
                    <p>Imagine ter a estrutura de um banco na sua mão com total eficiência e controle. Isso mesmo, nosso
                        produto de gestão de despesas irá te mostrar de forma muito simples de onde e para onde seu
                        recurso está indo e te dará total liberdade de movimentar ele entre contas Rodoclube sem pagar
                        nada.</p>
                    <a href="#">Ir para o MarketPlace</a>
                </div>
            </div>

            <div class="plataforms-categorie plataforms-frete hidden-right">
                <img src="/assets/institucional/img/plataforms-img2.png" alt="">
                <div class="plataforms-categorie-text">
                    <h3>Sócio Cargas</h3>
                    <p>Nosso objetivo é tornar mais simples e eficiente a busca por cargas e empresas em todo o Brasil,
                        atendendo tanto aos frotistas quanto aos caminhoneiros autônomos. Facilitamos a conexão entre
                        aqueles que precisam de transporte de carga e os profissionais que oferecem esse serviço.</p>
                    <a href="/">Ir para o Sócio Cargas</a>
                </div>
            </div>

            <div class="plataforms-categorie hidden">
                <img src="/assets/institucional/img/socio-educacao-img.png" alt="">
                <div class="plataforms-categorie-text">
                    <h3>Sócio Educativa</h3>
                    <p>Nossa plataforma de estudos está empenhada em atender a todas as necessidades de nossos clientes
                        e colaboradores, primando sempre pelo profissionalismo e transparência, enquanto valorizamos e
                        respeitamos todas as formas de diversidade.</p>
                    <a href="#">Em breve</a>
                </div>
            </div>
        </div>
    </section>

    <section class="numbers">
        <img class="numbers-back" draggable="false" src="./assets/img/pointsback-numbers.png" alt="">
        <div id="container">
            <h3 class="numbers-title">Nossos números</h3>
            <div class="numbers-wrapper">
                <img src="/assets/institucional/img/arrow-numbers.png" alt="">
                <div class="numbers-info-container">
                    <div class="numbers-info">
                        <img src="/assets/institucional/img/delivery-numbers.svg" alt="">
                        <span class="num" data-val="2822">000</span>
                        <span class="text">Entregas Realizadas</span>
                    </div>
                    <div class="numbers-info">
                        <img src="/assets/institucional/img/truck numbers.svg" alt="">
                        <span class="num" data-val="327">000</span>
                        <span class="text">Cidades com cargas</span>
                    </div>
                    <div class="numbers-info">
                        <img src="/assets/institucional/img/hand-shake-numbers.svg" alt="">
                        <span class="num" data-val="124">000</span>
                        <span class="text">Parceiros ativos</span>
                    </div>
                    <div class="numbers-info">
                        <img src="/assets/institucional/img/smile-circle-numbers.svg" alt="">
                        <span class="num" data-val="1192">000</span>
                        <span class="text">Clientes satisfeitos</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="glide-container">
        <div id="container">
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">

                        <li class="glide__slide">
                            <div class="caracteristicas-wrapper">
                                <img class="caracteristicas-img-blue" src="/assets/institucional/img/comments-svg.svg" alt="">
                                <h4>Suporte em português</h4>
                                <p>A disponibilidade do seu site é a nossa principal prioridade. É por isso que contamos
                                    com uma garantia de 99,9% de uptime para você ficar sempre online.</p>
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="caracteristicas-wrapper">
                                <img class="caracteristicas-img-orange" src="/assets/institucional/img/locker-svg.svg" alt="">
                                <h4>Segurança com seus dados</h4>
                                <p>A disponibilidade do seu site é a nossa principal prioridade. É por isso que contamos
                                    com uma garantia de 99,9% de uptime para você ficar sempre online.</p>
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="caracteristicas-wrapper">
                                <img class="caracteristicas-img-blue" src="/assets/institucional/img/star-svg.svg" alt="">
                                <h4>Produtos e serviços com excelência</h4>
                                <p>A disponibilidade do seu site é a nossa principal prioridade. É por isso que contamos
                                    com uma garantia de 99,9% de uptime para você ficar sempre online.</p>
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="caracteristicas-wrapper">
                                <img class="caracteristicas-img-orange" src="/assets/institucional/img/medal-svg.svg" alt="">
                                <h4>Garantia de Qualidade</h4>
                                <p>A disponibilidade do seu site é a nossa principal prioridade. É por isso que contamos
                                    com uma garantia de 99,9% de uptime para você ficar sempre online.</p>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><img
                            src="/assets/institucional/img/arrow-left-carousel.svg" alt=""></button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><img
                            src="/assets/institucional/img/arrow-right-carousel.svg" alt=""></button>
                </div>
            </div>
        </div>
    </section>

    <section class="transports">
        <div id="container">
            <h2>Transportamos</h2>

            <div class="transports-types">
                <div class="transports-types-info transports-types-info1 hidden">
                    <div>
                        <h4>Máquinas</h4>
                        <a href="#">Saiba mais</a>
                    </div>
                </div>

                <div class="transports-types-info transports-types-info2 hidden">
                    <div>
                        <h4>Commodities</h4>
                        <a href="#">Saiba mais</a>
                    </div>
                </div>

                <div class="transports-types-info transports-types-info3 hidden">
                    <div>
                        <h4>Alimentos</h4>
                        <a href="#">Saiba mais</a>
                    </div>
                </div>

                <div class="transports-types-info transports-types-info4 hidden">
                    <div>
                        <h4>Ver outras cargas</h4>
                        <a href="#">Saiba mais</a>
                    </div>
                </div>
            </div>

            <div class="banner-1 hidden-right">
                <div class="banner-1-info">
                    <h4>TEMOS TODAS AS SOLUÇÕES PARA VOCÊ EM UM SÓ LUGAR</h4>
                    <p>Conheça também nossa <span>plataforma de fretes</span>, a Sócio Cargas</p>
                    <a href="#">Aproveitar</a>
                </div>
                <img src="/assets/institucional/img/socio-caminhoneiro-top-logo1.png" alt="">
            </div>
        </div>
    </section>

    <section class="clients">
        <div id="container">
            <div class="clients-top">
                <div class="clients-top-text">
                    <h2 class="clients-title numbers-title">Clientes</h2>
                    <p>Alguns clientes que atendemos</p>
                </div>
                <div class="clients-top-imgs">

                    <img src="/assets/institucional/img/logopinheiro1.jpg" alt="">
                    <img src="/assets/institucional/img/PNG OFICIAL.jpg" alt="">
                    <img src="/assets/institucional/img/LOGO AZUL.jpg" alt="">
                    <img src="/assets/institucional/img/logo-agro-form.jpg" alt="">
                </div>
            </div>
            <div class="glide1">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">

                        <li class="glide__slide">
                            <div class="rate-container">
                                <div class="rate-info">
                                    <div class="profile-info-rate">
                                        <img src="/assets/institucional/img/profile-pic-rate.png" alt="">
                                        <div class="rate-info-profile">
                                            <h4>José Francisco Ferreira</h4>
                                            <p>Empreendedor</p>
                                        </div>
                                    </div>
                                    <div class="rate-stars">
                                        <img src="/assets/institucional/img/star-logo.svg" alt="">
                                        <img src="/assets/institucional/img/star-logo.svg" alt="">
                                        <img src="/assets/institucional/img/star-logo.svg" alt="">
                                        <img src="/assets/institucional/img/star-logo.svg" alt="">
                                        <img src="/assets/institucional/img/star-logo.svg" alt="">
                                    </div>
                                </div>
                                <p>“Oferecemos diversas opções de garantia locatícia que protegem locador e locatário,
                                    diversas opções de
                                    garantia locatícia que protegem locador e locatário.”</p>
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="rate-container">
                                <div class="rate-info">
                                    <div class="profile-info-rate">
                                        <img src="/assets/institucional/img/profile-pic-rate.png" alt="">
                                        <div class="rate-info-profile">
                                            <h4>José Francisco Ferreira</h4>
                                            <p>Empreendedor</p>
                                        </div>
                                    </div>
                                    <div class="rate-stars">
                                        <img src="/assets/institucional/img/star-logo.svg" alt="">
                                        <img src="/assets/institucional/img/star-logo.svg" alt="">
                                        <img src="/assets/institucional/img/star-logo.svg" alt="">
                                        <img src="/assets/institucional/img/star-logo.svg" alt="">
                                        <img src="/assets/institucional/img/star-logo.svg" alt="">
                                    </div>
                                </div>
                                <p>“Oferecemos diversas opções de garantia locatícia que protegem locador e locatário,
                                    diversas opções de
                                    garantia locatícia que protegem locador e locatário.”</p>
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="rate-container">
                                <div class="rate-info">
                                    <div class="profile-info-rate">
                                        <img src="/assets/institucional/img/profile-pic-rate.png" alt="">
                                        <div class="rate-info-profile">
                                            <h4>José Francisco Ferreira</h4>
                                            <p>Empreendedor</p>
                                        </div>
                                    </div>
                                    <div class="rate-stars">
                                        <img src="/assets/institucional/img/star-logo.svg" alt="">
                                        <img src="/assets/institucional/img/star-logo.svg" alt="">
                                        <img src="/assets/institucional/img/star-logo.svg" alt="">
                                        <img src="/assets/institucional/img/star-logo.svg" alt="">
                                        <img src="/assets/institucional/img/star-logo.svg" alt="">
                                    </div>
                                </div>
                                <p>“Oferecemos diversas opções de garantia locatícia que protegem locador e locatário,
                                    diversas opções de
                                    garantia locatícia que protegem locador e locatário.”</p>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="glide__arrows glide__arrow__clients" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left glide__arrow--left-rate" data-glide-dir="<"><img
                            src="/assets/institucional/img/arrow-left-carousel.svg" alt=""></button>
                    <button class="glide__arrow glide__arrow--right glide__arrow glide__arrow--right-rate"
                        data-glide-dir=">"><img src="/assets/institucional/img/arrow-right-carousel.svg" alt=""></button>
                </div>
            </div>
        </div>
    </section>

    <section class="informative">
        <div id="container">
            <h2 class="numbers-title informative-title">Informativos</h2>
            <div class="glide2">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <div class="informative-container">
                                <a href="#"><img src="/assets/institucional/img/informative-truck.png" alt=""></a>
                                <div class="informative-container-info">
                                    <h4>Capacidade de Carga: Entenda o limite de carga para cada caminhão</h4>
                                    <p>Compreensão da Capacidade de Carga: Decifrando os limites para cada veículo,
                                        capacidade de carga e
                                        seu significado...</p>
                                    <a href="#">Leia o artigo</a>
                                </div>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="informative-container">
                                <a href="#"><img src="/assets/institucional/img/informative-truck.png" alt=""></a>
                                <div class="informative-container-info">
                                    <h4>Capacidade de Carga: Entenda o limite de carga para cada caminhão</h4>
                                    <p>Compreensão da Capacidade de Carga: Decifrando os limites para cada veículo,
                                        capacidade de carga e
                                        seu significado...</p>
                                    <a href="#">Leia o artigo</a>
                                </div>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="informative-container">
                                <a href="#"><img src="/assets/institucional/img/informative-truck.png" alt=""></a>
                                <div class="informative-container-info">
                                    <h4>Capacidade de Carga: Entenda o limite de carga para cada caminhão</h4>
                                    <p>Compreensão da Capacidade de Carga: Decifrando os limites para cada veículo,
                                        capacidade de carga e
                                        seu significado...</p>
                                    <a href="#">Leia o artigo</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left glide__arrow--left-informative"
                        data-glide-dir="<"><img src="/assets/institucional/img/arrow-left-carousel.svg" alt=""></button>
                    <button class="glide__arrow glide__arrow--right glide__arrow--right-informative"
                        data-glide-dir=">"><img src="/assets/institucional/img/arrow-right-carousel.svg" alt=""></button>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-top">
        <div id="container">
            <div class="footer-top-info-container footer-top-info-container-left">
                <img src="/assets/institucional/img/footer-clock.svg" alt="">
                <div class="footer-top-info">
                    <h5>Horário de atendimento</h5>
                    <p>Segunda a Sexta: 07:00 às 18:00</p>
                    <p>Sábado e Domingo: Somente via WhatsApp</p>
                </div>
            </div>

            <div class="footer-top-info-wrapper">
                <div class="footer-top-info-container footer-top-info-container-right">
                    <img src="/assets/institucional/img/footer-call-center.svg" alt="">
                    <div class="footer-top-info">
                        <h5>Fale conosco</h5>
                        <p>Suporte 24/7</p>
                        <p>+55 (16) 3504-1955</p>
                    </div>
                </div>
                <div class="footer-top-info-container footer-top-info-container-right">
                    <img src="/assets/institucional/img/footer-map.svg" alt="">
                    <div class="footer-top-info">
                        <h5>Nossa localização</h5>
                        <p>Av. Monte Alto, 285 </p>
                        <p>Matão - SP, 15990-452</p>
                    </div>
                </div>
            </div>

            <div class="footer-top-imgs">
                <img src="/assets/institucional/img/footer-clock.svg" alt="">
                <img src="/assets/institucional/img/footer-call-center.svg" alt="">
                <img src="/assets/institucional/img/footer-map.svg" alt="">
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

    <footer class="footer">
        <div id="container">
            <div class="footer-above">

                <div class="footer-about">
                    <div class="footer-about-top-container">
                        <div class="footer-about-img">
                            <img src="/assets/institucional/img/socio-caminhoneiro-top-logo2.svg" alt="">
                            <div class="footer-about-img-text">
                                <p>sobre nós</p>
                                <h5>SÓCIO CAMINHONEIRO</h5>
                            </div>
                        </div>

                        <div class="footer-about-info">
                            <p>Juntos, entregamos mais qualidade de vida e segurança, além de contribuir com um frete
                                mais fácil e competitivo para as empresas que dependem de nós.</p>
                            <div class="footer-about-info-socio">
                                <img src="/assets/institucional/img/sócios-img.svg" alt="">
                                <p>+5.000 sócios caminhoneiros</p>
                            </div>
                        </div>
                    </div>

                    <div class="footer-about-social">
                        <a href="#"><img src="/assets/institucional/img/instagram-seeklogo.svg" alt=""></a>
                        <a href="#"><img src="/assets/institucional/img/facebook-seeklogo.svg" alt=""></a>
                        <a href="#"><img src="/assets/institucional/img/linkedin-icon2.svg" alt=""></a>
                    </div>
                </div>

                <div class="footer-links">
                    <div class="footer-links-left">
                        <h4 class="footer-title">navegue</h4>
                        <a href="#">Entrar/Cadastrar-se</a>
                        <a href="#">Sobre nós</a>
                        <a href="#">Plataforma</a>
                        <a href="#">Serviços</a>
                        <a href="#">Contato</a>
                    </div>
                    <div class="footer-links-right">
                        <h4 class="footer-title">institucional</h4>
                        <a href="#">Política de Privacidade</a>
                        <a href="#">Termos de Uso</a>
                        <a href="#">Trocas e Devoluções</a>
                        <a href="#">Prazos de Entrega</a>
                        <a href="#">Dúvidas frequentes</a>
                    </div>
                </div>

                <div class="footer-form">
                    <div class="footer-form-container">
                        <h4 class="footer-title">Seja um Sócio Caminhoneiro</h4>
                        <div class="footer-form-inputs">
                            <div class="footer-form-send">
                                <input type="text" placeholder="Insira seu e-mail">
                                <button><img src="/assets/institucional/img/footer-arrow.svg" alt=""></button>
                            </div>
                            <p>Preencha com seu e-mail que entraremos em contato com você!</p>
                        </div>
                    </div>
                    <div class="footer-form-contact-container">
                        <div class="footer-form-contact">
                            <img src="/assets/institucional/img/footer-email.svg" alt="">
                            <p>contato@sociocaminhoneiro.com.br </p>
                        </div>
                        <div class="footer-form-contact">
                            <img src="/assets/institucional/img/footer-tel.svg" alt="">
                            <p>(16) 3504-1955</p>
                        </div>
                        <div class="footer-form-contact">
                            <img src="/assets/institucional/img/footer-clock2.svg" alt="">
                            <p>Segunda à sexta das 09h00 às 17h30</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-bottom-left">
                    <p>Sócio Caminhoneiro, 2023 © Todos os direitos reservados.</p>
                    <p>CNPJ: 00.000.000/0000-00 | Av. Monte Alto, 285 - Jardim Buscardi, Matão - SP, 15990-452</p>
                </div>
                <div class="footer-bottom-right">
                    <p>Voltar ao topo</p>
                    <img src="/assets/institucional/img/expand-arrow.svg" alt="">
                </div>
            </div>
        </div>
    </footer>

</body>

</html>