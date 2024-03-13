@extends('site.layout')

@section('titulo', 'Minha Conta')

@section('conteudo')

<section class="profile-info-rating">
    <div id="container">
        <div class="profile-info-rating-text">
            <h4>Usuário</h4>
            <p>{{auth()->user()->firstName.' '.auth()->user()->lastName}}</p>
        </div>
    </div>
</section>

<section class="breadcrumb">
    <div id="container">
        <div class="breadcrumb-left">
            <a href="{{route('home')}}">Início</a>
            <p>Minha Conta</p>
        </div>
        <img id="breadcrumb-menu-opener" src="/assets/img/menu-fretes-mob.svg" alt="">
    </div>
</section>

<main>
    <div id="container">
        <div class="aside-wrapper">
            <aside class="menu">
                <a href="{{route('site.minhaconta')}}" class="menu-item-active menu-item">
                    <p>Início</p>
                </a>
                <a href="{{route('user.cadastroCaminhoneiro')}}" class="menu-item">
                    <p>Cadastrar-se como caminhoneiro</p>
                </a>
                <a href="{{route('login.logout')}}" class="menu-item">
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.70137 16.5C1.22595 16.5 0.823532 16.3353 0.494119 16.0059C0.164706 15.6765 0 15.2741 0 14.7986V2.20137C0 1.72595 0.164706 1.32353 0.494119 0.994119C0.823532 0.664706 1.22595 0.5 1.70137 0.5H8.00906V1.91175H1.70137C1.62896 1.91175 1.56258 1.94191 1.50224 2.00224C1.44191 2.06259 1.41175 2.12896 1.41175 2.20137V14.7986C1.41175 14.871 1.44191 14.9374 1.50224 14.9978C1.56258 15.0581 1.62896 15.0883 1.70137 15.0883H8.00906V16.5H1.70137ZM11.9819 12.5181L11.0046 11.4973L13.296 9.20586H5.26696V7.79414H13.296L11.0046 5.50272L11.9819 4.48194L16 8.5L11.9819 12.5181Z"
                            fill="white" />
                    </svg>
                    <p>Sair</p>
                </a>
            </aside>
        </div>

        <section class="my-fretes">
            <div class="my-fretes-top" style="height: 78px">
                <h3>Olá, Seja Bem-Vindo</h3>
            </div>
            <ul class="fretes-list">
                <p>Para se candidatar aos fretes da plataforma, realize seu cadastro de caminhoneiro.</p>
            </ul>
        </section>
    </div>
</main>

@endsection

@push('styles')
    <link rel="stylesheet" href="/assets/css/perfil-caminhoneiro.css">
    <link rel="stylesheet" href="/assets/css/header-fretes.css">
@endpush

@push('scripts')
    <script defer src="/assets/js/headcrumb-menu-opener.js"></script>
    <script defer src="/assets/js/mobile-navbar.js"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script defer src="/assets/js/select-input.js"></script>
    <script defer src="/assets/js/user-rate.js"></script>
@endpush
