@extends('site.layout')

@section('titulo', 'Cadastrar-se')

@section('conteudo')

    {{-- @if(session('msgErro'))
        <p>{{session('msgErro')}}</p>
    @endif

    <h1>Criar uma conta</h1>
    <form action="/auth/create" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s6">
                <input type="text" name="firstName" id="firstName">
                <label for="firstName">Nome</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="lastName" id="lastName">
                <label for="lastName">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email">E-mail</label>
            </div>
            <div class="input-field col s12">
                <input type="password" name="password" id="password">
                <label for="password">Senha</label>
            </div>
            <button type="submit" class="btn btn-large">Cadastrar-se</button>
            <p style="margin-top:14px;">Já possui uma conta? <a href="{{route('login.entrar')}}">Clique aqui para entrar.</a></p>
        </div>
    </form> --}}
    <main>
        <div class="login-container">
            <div class="form">

                <div class="form-title">
                    <h1>Faça seu cadastro</h1>
                    <p>Primeira vez conosco? Faça seu cadastro para continuar</p>
                </div>

                <form action="{{route('login.create')}}" method="POST" class="form-info">
                    @csrf
                    <div class="name-form email-form">
                        <label id="label-name" for="input-firstname">Nome: <strong>*</strong></label>
                        <input name="firstName" type="text" id="input-firstname" placeholder="Insira seu nome completo" class="form-input">
                    </div>
                    <div class="name-form email-form">
                        <label id="label-name" for="input-lastname">Sobrenome: <strong>*</strong></label>
                        <input name="lastName" type="text" id="input-lastname" placeholder="Insira seu nome completo" class="form-input">
                    </div>

                    <div class="email-form">
                        <label id="label-email" for="input-email">E-mail: <strong>*</strong></label>
                        <input name="email" type="email" id="input-email" placeholder="Insira seu e-mail" class="form-input">
                    </div>

                    <div class="password-form">
                        <label id="label-password" for="input-password">Senha: <strong>*</strong></label>
                        <input name="password" type="password" id="input-password" placeholder="Insira sua senha" class="form-input">
                        <img id="see-password" src="./assets/img/password-eye.svg" alt="Ícone para deixar a senha visível">
                    </div>

                    <div class="repeat-password-form password-form">
                        <label id="label-repeat-password" for="input-password">Repita sua senha: <strong>*</strong></label>
                        <input type="password" id="input-repeat-password" placeholder="Repita a sua senha" class="form-input">
                        <img id="see-password-repeat" src="./assets/img/password-eye.svg" alt="Ícone para deixar a senha visível">
                    </div>

                    <p>Ao criar uma conta, você concorda com a Política de Privacidade e com os Termos de uso do Sócio Caminhoneiro.</p>

                    <div class="input-info">
                        <button id="form-submit" type="submit">Cadastrar</button>
                    </div>
                </form>

                <div class="form-others">
                    {{-- <div class="form-others-top">
                        <img src="./assets/img/rectangle-form.svg" alt="">
                        <p>ou</p>
                        <img src="./assets/img/rectangle-form.svg" alt="">
                    </div>

                    <div class="form-socials">
                        <div class="google-login">
                            <a href="#">
                                <img src="/assets/img/google-icon.svg" alt="">
                                <p>Continue com Google</p>
                            </a>
                        </div>

                        <div class="facebook-login">
                            <a href="#">
                                <img src="/assets/img/facebook-logo.svg" alt="">
                                <p>Continue com Facebook</p>
                            </a>
                        </div>
                    </div> --}}

                    <div class="form-new-password">
                        <p>Já possui uma conta? <a href="{{route('login.entrar')}}">Entre aqui</a></p>
                    </div>
                </div>

            </div>
            <div class="form-img"></div>
        </div>
    </main>
@endsection

@push('styles')
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/css/header-fretes.css">
    <link rel="stylesheet" href="/assets/css/login.css">
    <link rel="stylesheet" href="/assets/css/cadastrar.css">
@endpush

@push('scripts')
    <script defer type="module" src="/assets/js/cpf-validation.js"></script>
    <script defer type="module" src="/assets/js/form-validation.js"></script>
@endpush
