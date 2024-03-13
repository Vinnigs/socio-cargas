@extends('site.layout')

@section('titulo', 'Fretes | Sócio Cargas')

@section('conteudo')

<main style="background-color: #efefef">

    @livewire('fretes.lista')

</main>

@endsection

@push('styles')
    <link rel="stylesheet" href="/assets/css/header-fretes.css">
    <link rel="stylesheet" href="/assets/css/pesquisa-fretes.css">
@endpush

@push('scripts')
    <script defer src="/assets/js/filter-active.js"></script>
    <script defer src="/assets/js/mobile-navbar.js"></script>
@endpush


