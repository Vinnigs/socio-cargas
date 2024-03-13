@extends('admin.layout')

@section('titulo', 'Painel de Controle')

@section('conteudo')

<section class="dashboard-info-wrapper">
    <div class="cms-dashboard-wrapper">
        <div class="dashboard-info">
            <h4>Fretes em andamento:</h4>
            <div class="dashboard-info-numbers">
                <p class="dashboard-info-number">{{ $contFretesProgresso }}</p>
                <p>Fretes</p>
            </div>
        </div>
        <div class="dashboard-info">
            <h4>Fretes aprovados:</h4>
            <div class="dashboard-info-numbers">
                <p class="dashboard-info-number">{{ $contFretesAtivos }}</p>
                <p>Fretes</p>
            </div>
        </div>
        <div class="dashboard-info">
            <h4>Aguardando aprovação:</h4>
            <div class="dashboard-info-numbers">
                <p class="dashboard-info-number">{{ $contFretesPendentes }}</p>
                <p>Fretes</p>
            </div>
        </div>
    </div>

    <div class="cms-dashboard-wrapper">
        <div class="dashboard-info">
            <h4>Caminhoneiros ativos:</h4>
            <div class="dashboard-info-numbers">
                <p class="dashboard-info-number">{{ $contCaminhoneiro }}</p>
                <p>Caminhoneiros</p>
            </div>
        </div>
        <div class="dashboard-info">
            <h4>Caminhoneiros em rota:</h4>
            <div class="dashboard-info-numbers">
                <p class="dashboard-info-number">{{ $contCaminhoneiroRota }}</p>
                <p>Caminhoneiros</p>
            </div>
        </div>
        <div class="dashboard-info">
            <h4>Aguardando aprovação:</h4>
            <div class="dashboard-info-numbers">
                <p class="dashboard-info-number">{{ $contCaminhoneiroPendente }}</p>
                <p>Usuários</p>
            </div>
        </div>
    </div>

    <div class="cms-dashboard-wrapper">
        <div class="dashboard-info">
            <h4>Empresas ativas:</h4>
            <div class="dashboard-info-numbers">
                <p class="dashboard-info-number">{{ $contEmpresa }}</p>
                <p>Empresas</p>
            </div>
        </div>
    </div>

    <div class="my-fretes">
        <div class="my-fretes-top">
            <div class="my-fretes-top-info-menu">
                <h3>fretes em andamento</h3>
                <svg class="menu-cms-toggle" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                    viewBox="0 0 18 18" fill="none">
                    <path
                        d="M1.90906 18C1.38407 18 0.934645 17.8131 0.560775 17.4392C0.186925 17.0654 0 16.6159 0 16.0909C0 15.566 0.186925 15.1165 0.560775 14.7427C0.934645 14.3688 1.38407 14.1819 1.90906 14.1819C2.43404 14.1819 2.88347 14.3688 3.25734 14.7427C3.63119 15.1165 3.81812 15.566 3.81812 16.0909C3.81812 16.6159 3.63119 17.0654 3.25734 17.4392C2.88347 17.8131 2.43404 18 1.90906 18ZM9 18C8.47501 18 8.02559 17.8131 7.65172 17.4392C7.27787 17.0654 7.09094 16.6159 7.09094 16.0909C7.09094 15.566 7.27787 15.1165 7.65172 14.7427C8.02559 14.3688 8.47501 14.1819 9 14.1819C9.52499 14.1819 9.97441 14.3688 10.3483 14.7427C10.7221 15.1165 10.9091 15.566 10.9091 16.0909C10.9091 16.6159 10.7221 17.0654 10.3483 17.4392C9.97441 17.8131 9.52499 18 9 18ZM16.0909 18C15.566 18 15.1165 17.8131 14.7427 17.4392C14.3688 17.0654 14.1819 16.6159 14.1819 16.0909C14.1819 15.566 14.3688 15.1165 14.7427 14.7427C15.1165 14.3688 15.566 14.1819 16.0909 14.1819C16.6159 14.1819 17.0654 14.3688 17.4392 14.7427C17.8131 15.1165 18 15.566 18 16.0909C18 16.6159 17.8131 17.0654 17.4392 17.4392C17.0654 17.8131 16.6159 18 16.0909 18ZM1.90906 10.9091C1.38407 10.9091 0.934645 10.7221 0.560775 10.3483C0.186925 9.97441 0 9.52499 0 9C0 8.47501 0.186925 8.02559 0.560775 7.65172C0.934645 7.27787 1.38407 7.09094 1.90906 7.09094C2.43404 7.09094 2.88347 7.27787 3.25734 7.65172C3.63119 8.02559 3.81812 8.47501 3.81812 9C3.81812 9.52499 3.63119 9.97441 3.25734 10.3483C2.88347 10.7221 2.43404 10.9091 1.90906 10.9091ZM9 10.9091C8.47501 10.9091 8.02559 10.7221 7.65172 10.3483C7.27787 9.97441 7.09094 9.52499 7.09094 9C7.09094 8.47501 7.27787 8.02559 7.65172 7.65172C8.02559 7.27787 8.47501 7.09094 9 7.09094C9.52499 7.09094 9.97441 7.27787 10.3483 7.65172C10.7221 8.02559 10.9091 8.47501 10.9091 9C10.9091 9.52499 10.7221 9.97441 10.3483 10.3483C9.97441 10.7221 9.52499 10.9091 9 10.9091ZM16.0909 10.9091C15.566 10.9091 15.1165 10.7221 14.7427 10.3483C14.3688 9.97441 14.1819 9.52499 14.1819 9C14.1819 8.47501 14.3688 8.02559 14.7427 7.65172C15.1165 7.27787 15.566 7.09094 16.0909 7.09094C16.6159 7.09094 17.0654 7.27787 17.4392 7.65172C17.8131 8.02559 18 8.47501 18 9C18 9.52499 17.8131 9.97441 17.4392 10.3483C17.0654 10.7221 16.6159 10.9091 16.0909 10.9091ZM1.90906 3.81812C1.38407 3.81812 0.934645 3.63119 0.560775 3.25734C0.186925 2.88347 0 2.43404 0 1.90906C0 1.38407 0.186925 0.934646 0.560775 0.560776C0.934645 0.186926 1.38407 0 1.90906 0C2.43404 0 2.88347 0.186926 3.25734 0.560776C3.63119 0.934646 3.81812 1.38407 3.81812 1.90906C3.81812 2.43404 3.63119 2.88347 3.25734 3.25734C2.88347 3.63119 2.43404 3.81812 1.90906 3.81812ZM9 3.81812C8.47501 3.81812 8.02559 3.63119 7.65172 3.25734C7.27787 2.88347 7.09094 2.43404 7.09094 1.90906C7.09094 1.38407 7.27787 0.934646 7.65172 0.560776C8.02559 0.186926 8.47501 0 9 0C9.52499 0 9.97441 0.186926 10.3483 0.560776C10.7221 0.934646 10.9091 1.38407 10.9091 1.90906C10.9091 2.43404 10.7221 2.88347 10.3483 3.25734C9.97441 3.63119 9.52499 3.81812 9 3.81812ZM16.0909 3.81812C15.566 3.81812 15.1165 3.63119 14.7427 3.25734C14.3688 2.88347 14.1819 2.43404 14.1819 1.90906C14.1819 1.38407 14.3688 0.934646 14.7427 0.560776C15.1165 0.186926 15.566 0 16.0909 0C16.6159 0 17.0654 0.186926 17.4392 0.560776C17.8131 0.934646 18 1.38407 18 1.90906C18 2.43404 17.8131 2.88347 17.4392 3.25734C17.0654 3.63119 16.6159 3.81812 16.0909 3.81812Z"
                        fill="#FE9D00" />
                </svg>
            </div>
        </div>
        <ul class="fretes-list">
            @if($fretesAndamento->count() > 0)
                @foreach($fretesAndamento as $frete)
                <li class="fretes-list-item">
                    <div class="frete-wrapper">
                        <div class="frete-container-top">
                            <div class="frete-container-top-info">
                                <div class="frete-loja-container">
                                    <img class="frete-container-loja-img" src="/assets/img/empresas/{{$frete->empresa->imagem}}"
                                        alt="">
                                </div>
                                <div class="frete-container-top-info-details">
                                    <img src="/assets/img/rectangle-frete.svg" alt="">
                                    <img class="rectangle-frete-img" src="/assets/img/rectangle-fretes-black.svg"
                                        alt="">
                                    <img src="/assets/img/circle-frete.svg" alt="">
                                </div>
                                <div class="frete-container-cities">
                                    <p>{{$frete->atributos->endereco_origem['cidade'].'/'.$frete->atributos->endereco_origem['estado']}}</p>
                                    <p>{{$frete->atributos->endereco_destino['cidade'].'/'.$frete->atributos->endereco_destino['estado']}}</p>
                                </div>
                            </div>
                            <p>
                                @php
                                    $diferencaDias = now()->diffInDays($frete->created_at);
                                @endphp
                                #{{$frete->id}} - {{ $diferencaDias == 0 ? 'Hoje' : ($diferencaDias == 1 ? 'Ontem' : 'Há ' . $diferencaDias . ' dias') }} <br>
                                <span class="{{$frete->status == 0 ? 'text-zinc-300' : ($frete->status == 1 ? 'text-orange-500' : ($frete->status == 2 ? 'text-sky-500' : ($frete->status == 3 ? 'text-green-500' : ($frete->status == 99 ? 'text-red-500' : ''))))}}">{{$frete->status == 0 ? 'Pendente' : ($frete->status == 1 ? 'Ativo' : ($frete->status == 2 ? 'Em Progresso' : ($frete->status == 3 ? 'Concluído' : ($frete->status == 99 ? 'Cancelado' : ''))))}} </span>
                                {{ $frete->status == 1 ? ' (' . $frete->caminhoneiros->count() . ' Candidatos)' : '' }}
                            </p>
                        </div>
                        <div class="frete-container-bottom">
                            <div class="frete-container-bottom-type-product">
                                <img src="/assets/img/material-block-black.svg" alt="">
                                <p>{{$frete->atributos->produto}}</p>
                            </div>
                            <div class="frete-container-bottom-info">
                                <div class="frete-bottom-stats">
                                    <p class="type-of-frete-vehicle distance-vehicle">{{$frete->atributos->km}}km</p>
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

                                    <p class="type-of-frete-vehicle">
                                        @isset($frete->atributos->carroceria[0])
                                            {{$frete->atributos->carroceria[0]}}
                                        @endisset

                                        @isset($frete->atributos->carroceria)
                                            @php
                                                $contagemCarroceria = count(array_slice($frete->atributos->carroceria, 1));
                                            @endphp

                                            @if($contagemCarroceria > 0)
                                                <span>+{{$contagemCarroceria}}</span>
                                            @endif
                                        @endisset
                                    </p>
                                </div>
                                <div class="fretes-link-price-mob">
                                    <p class="frete-value-mobile">
                                        @if($frete->atributos->valor != 0)
                                            <span> R$ {{$frete->atributos->valor}} </span>
                                        @else
                                            <span> A COMBINAR </span>
                                        @endif
                                    </p>
                                    <div>
                                        @if($frete->status == 1)
                                            <a href="{{ route('fretes.show', $frete->id) }}" target="_blank">Ver frete</a>
                                        @endif
                                        <a href="{{ route('admin.fretes.detalhes', $frete->id) }}">Detalhes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fretes-link-price">
                            <p class="frete-value">
                                @if($frete->atributos->valor != 0)
                                    <span> R$ {{$frete->atributos->valor}} </span>
                                @else
                                    <span> A COMBINAR </span>
                                @endif
                            </p>
                            <div>
                                @if($frete->status == 1)
                                    <a href="{{ route('fretes.show', $frete->id) }}" target="_blank">Ver frete</a>
                                @endif
                                <a href="{{ route('admin.fretes.detalhes', $frete->id) }}">Detalhes</a>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
                <a class="fretes-link-all" href="{{ route('admin.fretes.index') }}?status=andamento">Ver todos <svg width="7" height="12" viewBox="0 0 7 12"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 11L6 6L1 1" stroke="#f39d00" stroke-width="0.984" />
                    </svg>
                </a>
            @else
                <p class="text-zinc-400">Não há fretes em andamento no momento...</p>
            @endif
        </ul>
    </div>
    <div class="my-fretes">
        <div class="my-fretes-top">
            <div class="my-fretes-top-info-menu">
                <h3>fretes pendentes</h3>
            </div>
        </div>
        <ul class="fretes-list">
            @if($fretesPendentes->count() > 0)
                @foreach($fretesPendentes as $frete)
                <li class="fretes-list-item">
                    <div class="frete-wrapper">
                        <div class="frete-container-top">
                            <div class="frete-container-top-info">
                                <div class="frete-loja-container">
                                    <img class="frete-container-loja-img" src="/assets/img/empresas/{{$frete->empresa->imagem}}"
                                        alt="">
                                </div>
                                <div class="frete-container-top-info-details">
                                    <img src="/assets/img/rectangle-frete.svg" alt="">
                                    <img class="rectangle-frete-img" src="/assets/img/rectangle-fretes-black.svg"
                                        alt="">
                                    <img src="/assets/img/circle-frete.svg" alt="">
                                </div>
                                <div class="frete-container-cities">
                                    <p>{{$frete->atributos->endereco_origem['cidade'].'/'.$frete->atributos->endereco_origem['estado']}}</p>
                                    <p>{{$frete->atributos->endereco_destino['cidade'].'/'.$frete->atributos->endereco_destino['estado']}}</p>
                                </div>
                            </div>
                            <p>
                                @php
                                    $diferencaDias = now()->diffInDays($frete->created_at);
                                @endphp
                                #{{$frete->id}} - {{ $diferencaDias == 0 ? 'Hoje' : ($diferencaDias == 1 ? 'Ontem' : 'Há ' . $diferencaDias . ' dias') }} <br>
                                <span class="{{$frete->status == 0 ? 'text-zinc-300' : ($frete->status == 1 ? 'text-orange-500' : ($frete->status == 2 ? 'text-sky-500' : ($frete->status == 3 ? 'text-green-500' : ($frete->status == 99 ? 'text-red-500' : ''))))}}">{{$frete->status == 0 ? 'Pendente' : ($frete->status == 1 ? 'Ativo' : ($frete->status == 2 ? 'Em Progresso' : ($frete->status == 3 ? 'Concluído' : ($frete->status == 99 ? 'Cancelado' : ''))))}} </span>
                                {{ $frete->status == 1 ? ' (' . $frete->caminhoneiros->count() . ' Candidatos)' : '' }}
                            </p>
                        </div>
                        <div class="frete-container-bottom">
                            <div class="frete-container-bottom-type-product">
                                <img src="/assets/img/material-block-black.svg" alt="">
                                <p>{{$frete->atributos->produto}}</p>
                            </div>
                            <div class="frete-container-bottom-info">
                                <div class="frete-bottom-stats">
                                    <p class="type-of-frete-vehicle distance-vehicle">{{$frete->atributos->km}}km</p>
                                    {{-- Tipos de Veículos do Frete --}}
                                    @if($frete->atributos->veiculos_pesados != null)

                                        <p class="type-of-frete-vehicle">
                                            @isset($frete->atributos->veiculos_pesados[0])
                                                {{$frete->atributos->veiculos_pesados[0]}}
                                            @endisset

                                            @isset($frete->atributos->veiculos_pesados)
                                                @php
                                                $contagemVeiculos = count(array_slice($frete->atributos->veiculos_pesados, 1)) + ($frete->atributos->veiculos_leves == null ? 0 : count($frete->atributos->veiculos_leves)) + ($frete->atributos->veiculos_medios == null ? 0 : count($frete->atributos->veiculos_medios))
                                                @endphp
                                                @if($contagemVeiculos > 0)
                                                    <span>+{{$contagemVeiculos}}</span>
                                                @endif
                                            @endisset
                                        </p>

                                    @elseif($frete->atributos->veiculos_medios != null)

                                        <p class="type-of-frete-vehicle">
                                            @isset($frete->atributos->veiculos_medios[0])
                                                {{$frete->atributos->veiculos_medios[0]}}
                                            @endisset

                                            @isset($frete->atributos->veiculos_medios)
                                                @php
                                                    $contagemVeiculos = count(array_slice($frete->atributos->veiculos_medios, 1)) + ($frete->atributos->veiculos_leves == null ? 0 : count($frete->atributos->veiculos_leves)) + ($frete->atributos->veiculos_pesados == null ? 0 : count($frete->atributos->veiculos_pesados))
                                                @endphp
                                                @if($contagemVeiculos > 0)
                                                    <span>+{{$contagemVeiculos}}</span>
                                                @endif
                                            @endisset
                                        </p>

                                    @elseif($frete->atributos->veiculos_leves != null)

                                        <p class="type-of-frete-vehicle">
                                            @isset($frete->atributos->veiculos_leves[0])
                                                {{$frete->atributos->veiculos_leves[0]}}
                                            @endisset

                                            @isset($frete->atributos->veiculos_leves)
                                                @php
                                                    $contagemVeiculos = count(array_slice($frete->atributos->veiculos_leves, 1)) + ($frete->atributos->veiculos_medios == null ? 0 : count($frete->atributos->veiculos_medios)) + ($frete->atributos->veiculos_pesados == null ? 0 : count($frete->atributos->veiculos_pesados))
                                                @endphp
                                                @if($contagemVeiculos > 0)
                                                    <span>+{{$contagemVeiculos}}</span>
                                                @endif
                                            @endisset
                                        </p>

                                    @endif

                                    <p class="type-of-frete-vehicle">
                                        @isset($frete->atributos->carroceria[0])
                                            {{$frete->atributos->carroceria[0]}}
                                        @endisset

                                        @isset($frete->atributos->carroceria)
                                            @php
                                                $contagemCarroceria = count(array_slice($frete->atributos->carroceria, 1));
                                            @endphp

                                            @if($contagemCarroceria > 0)
                                                <span>+{{$contagemCarroceria}}</span>
                                            @endif
                                        @endisset
                                    </p>
                                </div>
                                <div class="fretes-link-price-mob">
                                    <p class="frete-value-mobile">
                                        @if($frete->atributos->valor != 0)
                                            <span> R$ {{$frete->atributos->valor}} </span>
                                        @else
                                            <span> A COMBINAR </span>
                                        @endif
                                    </p>
                                    <div>
                                        @if($frete->status == 1)
                                            <a href="{{ route('fretes.show', $frete->id) }}" target="_blank">Ver frete</a>
                                        @endif
                                        <a href="{{ route('admin.fretes.detalhes', $frete->id) }}">Detalhes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fretes-link-price">
                            <p class="frete-value">
                                @if($frete->atributos->valor != 0)
                                    <span> R$ {{$frete->atributos->valor}} </span>
                                @else
                                    <span> A COMBINAR </span>
                                @endif
                            </p>
                            <div>
                                @if($frete->status == 1)
                                    <a href="{{ route('fretes.show', $frete->id) }}" target="_blank">Ver frete</a>
                                @endif
                                <a href="{{ route('admin.fretes.detalhes', $frete->id) }}">Detalhes</a>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
                <a class="fretes-link-all" href="{{ route('admin.fretes.index') }}?status=pendentes">Ver todos <svg width="7" height="12" viewBox="0 0 7 12"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 11L6 6L1 1" stroke="#f39d00" stroke-width="0.984" />
                    </svg>
                </a>
            @else
                <p class="text-zinc-400">Não há fretes pendentes no momento...</p>
            @endif
        </ul>
    </div>
    <div class="my-fretes">
        <div class="my-fretes-top">
            <div class="my-fretes-top-info-menu">
                <h3>fretes aprovados</h3>
            </div>
        </div>
        <ul class="fretes-list">
            @if($fretesAtivos->count() > 0)
                @foreach($fretesAtivos as $frete)
                <li class="fretes-list-item">
                    <div class="frete-wrapper">
                        <div class="frete-container-top">
                            <div class="frete-container-top-info">
                                <div class="frete-loja-container">
                                    <img class="frete-container-loja-img" src="/assets/img/empresas/{{$frete->empresa->imagem}}"
                                        alt="">
                                </div>
                                <div class="frete-container-top-info-details">
                                    <img src="/assets/img/rectangle-frete.svg" alt="">
                                    <img class="rectangle-frete-img" src="/assets/img/rectangle-fretes-black.svg"
                                        alt="">
                                    <img src="/assets/img/circle-frete.svg" alt="">
                                </div>
                                <div class="frete-container-cities">
                                    <p>{{$frete->atributos->endereco_origem['cidade'].'/'.$frete->atributos->endereco_origem['estado']}}</p>
                                    <p>{{$frete->atributos->endereco_destino['cidade'].'/'.$frete->atributos->endereco_destino['estado']}}</p>
                                </div>
                            </div>
                            <p>
                                @php
                                    $diferencaDias = now()->diffInDays($frete->created_at);
                                @endphp
                                #{{$frete->id}} - {{ $diferencaDias == 0 ? 'Hoje' : ($diferencaDias == 1 ? 'Ontem' : 'Há ' . $diferencaDias . ' dias') }} <br>
                                <span class="{{$frete->status == 0 ? 'text-zinc-300' : ($frete->status == 1 ? 'text-orange-500' : ($frete->status == 2 ? 'text-sky-500' : ($frete->status == 3 ? 'text-green-500' : ($frete->status == 99 ? 'text-red-500' : ''))))}}">{{$frete->status == 0 ? 'Pendente' : ($frete->status == 1 ? 'Ativo' : ($frete->status == 2 ? 'Em Progresso' : ($frete->status == 3 ? 'Concluído' : ($frete->status == 99 ? 'Cancelado' : ''))))}} </span>
                                {{ $frete->status == 1 ? ' (' . $frete->caminhoneiros->count() . ' Candidatos)' : '' }}
                            </p>
                        </div>
                        <div class="frete-container-bottom">
                            <div class="frete-container-bottom-type-product">
                                <img src="/assets/img/material-block-black.svg" alt="">
                                <p>{{$frete->atributos->produto}}</p>
                            </div>
                            <div class="frete-container-bottom-info">
                                <div class="frete-bottom-stats">
                                    <p class="type-of-frete-vehicle distance-vehicle">{{$frete->atributos->km}}km</p>
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

                                    <p class="type-of-frete-vehicle">
                                        @isset($frete->atributos->carroceria[0])
                                            {{$frete->atributos->carroceria[0]}}
                                        @endisset

                                        @isset($frete->atributos->carroceria)
                                            @php
                                                $contagemCarroceria = count(array_slice($frete->atributos->carroceria, 1));
                                            @endphp

                                            @if($contagemCarroceria > 0)
                                                <span>+{{$contagemCarroceria}}</span>
                                            @endif
                                        @endisset
                                    </p>
                                </div>
                                <div class="fretes-link-price-mob">
                                    <p class="frete-value-mobile">
                                        @if($frete->atributos->valor != 0)
                                            <span> R$ {{$frete->atributos->valor}} </span>
                                        @else
                                            <span> A COMBINAR </span>
                                        @endif
                                    </p>
                                    <div>
                                        @if($frete->status == 1)
                                            <a href="{{ route('fretes.show', $frete->id) }}" target="_blank">Ver frete</a>
                                        @endif
                                        <a href="{{ route('admin.fretes.detalhes', $frete->id) }}">Detalhes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fretes-link-price">
                            <p class="frete-value">
                                @if($frete->atributos->valor != 0)
                                    <span> R$ {{$frete->atributos->valor}} </span>
                                @else
                                    <span> A COMBINAR </span>
                                @endif
                            </p>
                            <div>
                                @if($frete->status == 1)
                                    <a href="{{ route('fretes.show', $frete->id) }}" target="_blank">Ver frete</a>
                                @endif
                                <a href="{{ route('admin.fretes.detalhes', $frete->id) }}">Detalhes</a>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
                <a class="fretes-link-all" href="{{ route('admin.fretes.index') }}">Ver todos <svg width="7" height="12" viewBox="0 0 7 12"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 11L6 6L1 1" stroke="#f39d00" stroke-width="0.984" />
                    </svg>
                </a>
            @else
                <p class="text-zinc-400">Não há fretes aprovados no momento...</p>
            @endif
        </ul>
    </div>
</section>
@endsection
