@extends('site.layout')

@section('titulo', 'Entrar | Sócio Cargas')

@section('conteudo')

{{-- <div id="container" style="max-width: 600px; margin-top:130px;">

    @if(session('msgErro'))
        <p>{{session('msgErro')}}</p>
    @endif
    <h1>Entrar</h1>
    <form action="/auth" method="POST">
        @csrf
        <div class="input-field">
            <i class="material-icons prefix">person</i>
            <input type="text" name="email" id="email">
            <label for="email">E-mail</label>
        </div>

        <div class="input-field">
            <i class="material-icons prefix">lock</i>
            <input type="password" name="password" id="password">
            <label for="password">Senha</label>
        </div>

        <button type="submit" class="btn btn-large">Entrar</button>
        <p style="margin-top: 14px">Ainda não possui uma conta? <a href="{{route('login.cadastro')}}">Cadastrar-se</a></p>
    </form>

</div> --}}

<main>
    <div class="login-container">
        <div class="form">

            <div class="form-title">
                <h1>Faça seu login</h1>
                <p>Bem vindo de volta, faça seu login para continuar</p>
            </div>

            @if(session('msgErro'))
                <p>{{session('msgErro')}}</p>
            @endif

            <form action="{{route('login.auth')}}" method="POST">
                @csrf
                <div class="form-info">
                    <div class="email-form">
                        <label for="input-email">E-mail <strong>*</strong></label>
                        <input type="email" name="email" id="input-email" placeholder="Insira seu e-mail" class="form-input">
                    </div>

                    <div class="password-form">
                        <label for="input-password">Senha <strong>*</strong></label>
                        <input type="password" name="password" id="input-password" placeholder="Insira sua senha" class="form-input">
                        <img src="/assets/img/password-eye.svg" alt="Ícone para deixar a senha visível">
                    </div>

                    <a class="forgot-password" href="#">Esqueceu a senha?</a>

                    <div class="input-info">
                        <button type="submit">Entrar</button>
                    </div>
                </div>

                <div class="form-others">
                    {{-- <div class="form-others-top">
                        <img src="/assets/img/rectangle-form.svg" alt="">
                        <p>ou</p>
                        <img src="/assets/img/rectangle-form.svg" alt="">
                    </div>

                    <div class="form-socials">
                        <div class="google-login">
                            <a href="perfil-caminhoneiro.html">
                                <img src="./assets/img/google-icon.svg" alt="">
                                <p>Continue com Google</p>
                            </a>
                        </div>

                        <div class="facebook-login">
                            <a href="#">
                                <img src="./assets/img/facebook-logo.svg" alt="">
                                <p>Continue com Facebook</p>
                            </a>
                        </div>
                    </div> --}}

                    <div class="form-new-password">
                        <p>Não possui uma conta? <a href="{{route('login.cadastro')}}"> Clique aqui para cadastrar-se.</a></p>
                    </div>
                </div>
            </form>

        </div>
        <div class="form-img"></div>
    </div>
</main>

@endsection

@push('styles')
    <link rel="stylesheet" href="/assets/css/header-fretes.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/css/login.css">
@endpush

@push('scripts')
@endpush

