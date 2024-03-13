@extends('site.layout')

@section('titulo', 'Empresas')

@section('conteudo')

<div id="container" style="margin-top: 80px">

    @if(session('msgErro'))
        <p style="background-color: red;padding:10px;color:white">{{session('msgErro')}}</p>
    @endif

    @foreach ($caminhoneiros as $caminhoneiro)
    <div class="row">
        <div class="col s12 m12">
            <div class="card horizontal">
                <div class="card-stacked">
                    <div class="card-content row valign-wrapper">
                        <img src="/assets/img/user.jpg" class="col circle responsive-img" style="width: 80px">
                        <p class="header col" style="display: flex;align-items:center;font-size:18px;font-weight:700;">{{$caminhoneiro->users->firstName.' '.$caminhoneiro->users->lastName}}</p>
                    </div>
                    <div class="card-action">
                        <a href="{{route('caminhoneiros.show', $caminhoneiro->slug)}}">Ver Caminhoneiro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>

@endsection

@push('styles')
    <link rel="stylesheet" href="/assets/css/header-fretes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

@endpush

@push('scripts')

@endpush

@push('scripts-body')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        M.AutoInit();
    </script>
@endpush
