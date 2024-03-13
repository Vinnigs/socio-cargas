@extends('site.layout')

@section('titulo', 'Empresas')

@section('conteudo')

<div id="container" style="margin-top: 80px">

    @if(session('msgErro'))
        <p style="background-color: red;padding:10px;color:white">{{session('msgErro')}}</p>
    @endif

    @foreach ($empresas as $empresa)
    <div class="row">
        <div class="col s12 m12">
            <div class="card horizontal">
                <div class="card-stacked">
                    <div class="card-content">
                        <img src="/assets/img/office.jpg" class="col circle responsive-img" style="width: 80px;height:56px">
                        <p class="header" style="display: flex;align-items:center;font-size:18px;font-weight:700;">{{$empresa->nome}}</p>
                        <p>Fretes ativos:

                            @php
                                $index = 0
                            @endphp
                            @foreach ($empresa->fretes as $frete)
                                @if($frete->status == 1)
                                    @php
                                        $index++;
                                    @endphp
                                @endif
                            @endforeach
                            @php
                                echo $index;
                            @endphp
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="{{route('empresas.show', $empresa->slug)}}">Ver empresa</a>
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
