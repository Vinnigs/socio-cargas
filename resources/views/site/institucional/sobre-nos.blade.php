<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/institucional/css/about-us.css">
    <link rel="stylesheet" href="/assets/institucional/css/animation.css">
    <link rel="icon" href="/assets/institucional/img/Design sem nome (8).png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <title>Sobre a Sócio</title>

    <script defer src="/assets/institucional/js/animations.js"></script>
    <script defer src="/assets/institucional/js/counting-numbers.js"></script>
    <script defer src="/assets/institucional/js/mobile-navbar.js"></script>
    <script defer src="/assets/institucional/js/header-observer-about.js"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>

<body>
    <main>
        <header id="header" class="header">
            <nav id="container">
                <a class="header-profile-link" href="login.html"><img src="/assets/institucional/img/profile-picture-svg.svg" alt=""></a>
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

        <div class="header-trigger">
            olá
        </div>

        <div class="main-text" id="container">
            <h1>Facilitando a <span>parceria</span> entre as empresas e transportadores, com segurança, qualidade e
                economia</h1>
            <p>Saiba mais sobre a Sócio Caminhoneiro</p>
        </div>
    </main>

    <section class="our-mission">
        <div class="our-mission-text">
            <div class="our-mission-item">
                <div class="our-mission-item-title">
                    <h3>Visão</h3>
                    <img loading="lazy" src="/assets/institucional/img/binoculars-1.svg" alt="">
                </div>
                <p>Criar uma nova economia de mercado, negócios rentáveis, lucrativos, escaláveis e sem exploração.
                </p>
            </div>

            <div class="our-mission-item">
                <div class="our-mission-item-title">
                    <h3>Missão</h3>
                    <img loading="lazy" src="/assets/institucional/img/rocket-svg.svg" alt="">
                </div>
                <p>Melhorar a vida de cada caminhoneiro autônomo, colocando-os em evidência nas operações logísticas
                    e,
                    maximizar os resultados de toda a cadeia com ganhos de escala e redução dos custos de operação.
                </p>
            </div>

            <div class="our-mission-item">
                <div class="our-mission-item-title">
                    <h3>Valores</h3>
                    <img loading="lazy" src="/assets/institucional/img/diamond 1.svg" alt="">
                </div>
                <p>Equilíbrio, respeito e exemplo.</p>
            </div>
        </div>
        <div class="our-mission-img">
            <img loading="lazy" src="/assets/institucional/img/about-us-img1.png" alt="">
        </div>
    </section>

    <section class="dedication">
        <div id="container">
            <h2>Nossa dedicação a satisfação do cliente é o que nos impulsiona.</h2>
            <div class="dedication-wrapper hidden-bottom">
                <img loading="lazy" class="dedication-img" src="/assets/institucional/img/happy-man-with-cap-back.png" alt="">
                <div class="dedication-comment">
                    <h3>Temos as soluções perfeitas para os transportadores de todo o Brasil</h2>
                        <p>“A sócio caminhoneiro disponibiliza exatamente o que eu preciso para maximizar os meus
                            serviços”.</p>
                        <p><span>Matheus Nunes,</span> Caminhoneiro há 20 anos</p>
                        <div class="quotes-wrapper">
                            <img loading="lazy" src="/assets/institucional/img/quote-right.svg" alt="">
                        </div>
                </div>
            </div>
        </div>
        <img loading="lazy" class="background-points" src="/assets/institucional/img/background points.svg" alt="">
    </section>

    <section class="quality-politics">
        <div class="quality-politics-left">
            <h4 class="rectangle-title">Politica de qualidade</h4>
            <h2>Nosso propósito, melhoria contínua e comprometimento ao atendimento </h2>
            <p>Nossa política de qualidade representa o nosso compromisso em fornecer um serviço de alta qualidade aos
                nossos clientes e promovendo a constante evolução do nosso sistema.</p>
            <a href="#">Saiba mais <img src="/assets/institucional/img/arrow-right-white.svg" alt=""></a>
        </div>
        <div class="quality-politics-right">
            <div class="quality-politics-right-item hidden">
                <p class="quality-politics-number">01</p>
                <div class="quality-politics-right-text">
                    <h4>Excelência Logística</h4>
                    <p>Promover a satisfação dos clientes através de serviços logísticos de excelência e garantir
                        disponibilidade dos veículos aos clientes.</p>
                </div>
            </div>
            <div class="quality-politics-right-item hidden">
                <p class="quality-politics-number">02</p>
                <div class="quality-politics-right-text">
                    <h4>Sustentabilidade</h4>
                    <p>Comprometemo-nos com práticas sustentáveis, reduzindo nosso impacto ambiental por meio de métodos
                        ecologicamente responsáveis.</p>
                </div>
            </div>
            <div class="quality-politics-right-item hidden">
                <p class="quality-politics-number">03</p>
                <div class="quality-politics-right-text">
                    <h4>Relações de Confiança</h4>
                    <p>Proporcionar a confiança e a ética junto aos parceiros de negócios, a fim de garantir a
                        transparência durante a prestação do serviço.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="our-objetives">
        <img loading="lazy" class="objectives-top-decoration" src="/assets/institucional/img/objectives-top-decoration.svg" alt="">
        <img loading="lazy" class="objectives-top-decoration2" src="/assets/institucional/img/objetives-top-decoration2.svg" alt="">
        <div id="container">
            <h4 class="rectangle-title">Nossos objetivos</h4>
            <h2>Estabelecemos objetivos visando a eficiência e a inovação em nossos processos</h2>
            <div class="objectives-carac">
                <div class="objectives-carac-item hidden">
                    <div class="objectives-carac-item-top"></div>
                    <div class="objectives-carac-item-bottom">
                        <div class="objectives-carac-item-img">
                            <img src="/assets/institucional/img/objetive-star.svg" alt="">
                        </div>
                        <p>Excelência na prestação de serviço</p>
                    </div>
                </div>
                <div class="objectives-carac-item hidden">
                    <div class="objectives-carac-item-top"></div>
                    <div class="objectives-carac-item-bottom">
                        <div class="objectives-carac-item-img">
                            <img src="/assets/institucional/img/thumbs-up-objetives.svg" alt="">
                        </div>
                        <p>Satisfação de nossos clientes</p>
                    </div>
                </div>
                <div class="objectives-carac-item hidden">
                    <div class="objectives-carac-item-top"></div>
                    <div class="objectives-carac-item-bottom">
                        <div class="objectives-carac-item-img">
                            <img src="/assets/institucional/img/arrow-up-objective.svg" alt="">
                        </div>
                        <p>Equipe qualificada e valorizada</p>
                    </div>
                </div>
                <div class="objectives-carac-item hidden">
                    <div class="objectives-carac-item-top"></div>
                    <div class="objectives-carac-item-bottom">
                        <div class="objectives-carac-item-img">
                            <img src="/assets/institucional/img/law-paper.svg" alt="">
                        </div>
                        <p>Atender às legislações vigentes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-numbers lazy-background">
        <div id="container">
            <h2 class="our-numbers-title general-title">Nossos números</h2>
            <div class="our-numbers-info">
                <div class="our-numbers-info-container">
                    <img loading="lazy" src="/assets/institucional/img/our-numbers1.svg" alt="">
                    <span class="num-our-numbers num" data-val="2854">123</span>
                    <span class="text-our-numbers">Entregas bem sucedidas</span>
                </div>
                <div class="our-numbers-info-container">
                    <img loading="lazy" src="/assets/institucional/img/our-numbers3.svg" alt="">
                    <span class="num-our-numbers num" data-val="14523">1 200</span>
                    <span class="text-our-numbers">Horas trabalhadas</span>
                </div>
                <div class="our-numbers-info-container">
                    <img loading="lazy" src="/assets/institucional/img/our-numbers2.svg" alt="">
                    <span class="num-our-numbers num" data-val="2394">23 000</span>
                    <span class="text-our-numbers">Clientes Satisfeitos</span>
                </div>
                <div class="our-numbers-info-container">
                    <img loading="lazy" src="/assets/institucional/img/our-numbers4.svg" alt="">
                    <span class="num-our-numbers num" data-val="12904">12 000</span>
                    <span class="text-our-numbers">Soluções criadas</span>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="contact-left">
            <h4 class="rectangle-title">Contato</h4>
            <div class="contact-left-info">

                <div class="contact-left-info-item">
                    <img src="/assets/institucional/img/icon-map-pin 1.svg" alt="">
                    <div class="contact-left-info-text">
                        <h3>Endereço</h3>
                        <div class="contact-left-info-socials">
                            <p>Av. Monte Alto, 285 - Jardim Buscardi, Matão - SP, 15990-452</p>
                        </div>
                    </div>
                </div>

                <div class="contact-left-info-item">
                    <img src="/assets/institucional/img/icon-messages 1.svg" alt="">
                    <div class="contact-left-info-text">
                        <h3>Fale Conosco</h3>
                        <div class="contact-left-info-socials">
                            <p>Telefone: (16) 3504-1955 </p>
                            <p>E-mail: sociocaminhoneiro@jkasdkklas</p>
                        </div>
                    </div>
                </div>

                <div class="contact-left-info-item">
                    <img src="/assets/institucional/img/Icon-cursos-clicked 1.svg" alt="">
                    <div class="contact-left-info-text">
                        <h3>Nossas redes</h3>
                        <div class="contact-left-info-socials">
                            <img src="/assets/institucional/img/icon-facebook 1.svg" alt="">
                            <img src="/assets/institucional/img/icon-instagram 1.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-right">
            <iframe class="contact-map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3709.405597930873!2d-48.358240124599696!3d-21.609113192786253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b8e1457dc0ca85%3A0x75e6ebea9df96568!2sS%C3%B3cio%20Caminhoneiro!5e0!3m2!1spt-BR!2sbr!4v1698432254030!5m2!1spt-BR!2sbr"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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