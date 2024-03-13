@extends('site.layout')

@section('titulo', 'Caminhoneiro - '.$caminhoneiro->users->firstName.' '.$caminhoneiro->users->lastName.' | Sócio Caminhoneiro')

@section('conteudo')

<div id="container" style="margin-top: 100px">

    <div class="row valign-wrapper">
        <div class="col s6">
            <p>Caminhoneiro</p>
            <h3 style="margin:0">{{$caminhoneiro->users->firstName.' '.$caminhoneiro->users->lastName}}</h3>
        </div>
        <div class="col s6">
            <img src="/assets/img/user.jpg">
        </div>
    </div>

    <div class="row">
        <button class="btn btn-large"><i class="material-icons left">call</i> Informações de Contato</button>

        <p style="margin-top: 56px;font-size:24px;font-weight:600;">Descrição: </p><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed sollicitudin sapien. Sed tincidunt ultrices mi eu laoreet. Vivamus mollis rhoncus feugiat. Fusce facilisis euismod justo, sit amet ornare leo lobortis sed. Nam ultrices mattis quam, eget efficitur lectus vehicula et. Cras ut mauris odio. Nunc leo felis, sollicitudin non sollicitudin non, tristique sit amet tellus. Mauris id ornare elit.</p>
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

