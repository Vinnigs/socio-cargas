@extends('admin.layout')

@section('titulo', 'Detalhes Frete')

@section('conteudo')

<main>
    <div class="frete-details-wrapper">
        {{-- Breadcrumbs --}}
        <nav class="flex mb-12" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="{{route('admin.dashboard')}}" class="inline-flex items-center text-2xl font-medium text-gray-400 hover:text-black">
                    <svg class="w-5 h-5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                    </svg>
                    Painel de Controle
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    @if($frete->status == 0)
                        <a href="{{route('admin.fretes.index')}}?status=pendentes" class="ms-1 text-2xl font-medium text-gray-400 md:ms-2 hover:text-black">Fretes pendentes</a>
                    @elseif($frete->status == 1)
                        <a href="{{route('admin.fretes.index')}}" class="ms-1 text-2xl font-medium text-gray-400 md:ms-2 hover:text-black">Fretes ativos</a>
                    @elseif($frete->status == 2)
                        <a href="{{route('admin.fretes.index')}}?status=andamento" class="ms-1 text-2xl font-medium text-gray-400 md:ms-2 hover:text-black">Fretes em andamento</a>
                    @else
                        <a href="{{route('admin.fretes.index')}}?status=historico" class="ms-1 text-2xl font-medium text-gray-400 md:ms-2 hover:text-black">Fretes em andamento</a>
                    @endif
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="ms-1 text-2xl font-medium text-gray-400 md:ms-2">Detalhes</span>
                    </div>
                </li>
            </ol>
        </nav>
        {{----}}
        <div class="my-fretes-top-info-menu">
            <svg class="menu-cms-toggle" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                viewBox="0 0 18 18" fill="none">
                <path
                    d="M1.90906 18C1.38407 18 0.934645 17.8131 0.560775 17.4392C0.186925 17.0654 0 16.6159 0 16.0909C0 15.566 0.186925 15.1165 0.560775 14.7427C0.934645 14.3688 1.38407 14.1819 1.90906 14.1819C2.43404 14.1819 2.88347 14.3688 3.25734 14.7427C3.63119 15.1165 3.81812 15.566 3.81812 16.0909C3.81812 16.6159 3.63119 17.0654 3.25734 17.4392C2.88347 17.8131 2.43404 18 1.90906 18ZM9 18C8.47501 18 8.02559 17.8131 7.65172 17.4392C7.27787 17.0654 7.09094 16.6159 7.09094 16.0909C7.09094 15.566 7.27787 15.1165 7.65172 14.7427C8.02559 14.3688 8.47501 14.1819 9 14.1819C9.52499 14.1819 9.97441 14.3688 10.3483 14.7427C10.7221 15.1165 10.9091 15.566 10.9091 16.0909C10.9091 16.6159 10.7221 17.0654 10.3483 17.4392C9.97441 17.8131 9.52499 18 9 18ZM16.0909 18C15.566 18 15.1165 17.8131 14.7427 17.4392C14.3688 17.0654 14.1819 16.6159 14.1819 16.0909C14.1819 15.566 14.3688 15.1165 14.7427 14.7427C15.1165 14.3688 15.566 14.1819 16.0909 14.1819C16.6159 14.1819 17.0654 14.3688 17.4392 14.7427C17.8131 15.1165 18 15.566 18 16.0909C18 16.6159 17.8131 17.0654 17.4392 17.4392C17.0654 17.8131 16.6159 18 16.0909 18ZM1.90906 10.9091C1.38407 10.9091 0.934645 10.7221 0.560775 10.3483C0.186925 9.97441 0 9.52499 0 9C0 8.47501 0.186925 8.02559 0.560775 7.65172C0.934645 7.27787 1.38407 7.09094 1.90906 7.09094C2.43404 7.09094 2.88347 7.27787 3.25734 7.65172C3.63119 8.02559 3.81812 8.47501 3.81812 9C3.81812 9.52499 3.63119 9.97441 3.25734 10.3483C2.88347 10.7221 2.43404 10.9091 1.90906 10.9091ZM9 10.9091C8.47501 10.9091 8.02559 10.7221 7.65172 10.3483C7.27787 9.97441 7.09094 9.52499 7.09094 9C7.09094 8.47501 7.27787 8.02559 7.65172 7.65172C8.02559 7.27787 8.47501 7.09094 9 7.09094C9.52499 7.09094 9.97441 7.27787 10.3483 7.65172C10.7221 8.02559 10.9091 8.47501 10.9091 9C10.9091 9.52499 10.7221 9.97441 10.3483 10.3483C9.97441 10.7221 9.52499 10.9091 9 10.9091ZM16.0909 10.9091C15.566 10.9091 15.1165 10.7221 14.7427 10.3483C14.3688 9.97441 14.1819 9.52499 14.1819 9C14.1819 8.47501 14.3688 8.02559 14.7427 7.65172C15.1165 7.27787 15.566 7.09094 16.0909 7.09094C16.6159 7.09094 17.0654 7.27787 17.4392 7.65172C17.8131 8.02559 18 8.47501 18 9C18 9.52499 17.8131 9.97441 17.4392 10.3483C17.0654 10.7221 16.6159 10.9091 16.0909 10.9091ZM1.90906 3.81812C1.38407 3.81812 0.934645 3.63119 0.560775 3.25734C0.186925 2.88347 0 2.43404 0 1.90906C0 1.38407 0.186925 0.934646 0.560775 0.560776C0.934645 0.186926 1.38407 0 1.90906 0C2.43404 0 2.88347 0.186926 3.25734 0.560776C3.63119 0.934646 3.81812 1.38407 3.81812 1.90906C3.81812 2.43404 3.63119 2.88347 3.25734 3.25734C2.88347 3.63119 2.43404 3.81812 1.90906 3.81812ZM9 3.81812C8.47501 3.81812 8.02559 3.63119 7.65172 3.25734C7.27787 2.88347 7.09094 2.43404 7.09094 1.90906C7.09094 1.38407 7.27787 0.934646 7.65172 0.560776C8.02559 0.186926 8.47501 0 9 0C9.52499 0 9.97441 0.186926 10.3483 0.560776C10.7221 0.934646 10.9091 1.38407 10.9091 1.90906C10.9091 2.43404 10.7221 2.88347 10.3483 3.25734C9.97441 3.63119 9.52499 3.81812 9 3.81812ZM16.0909 3.81812C15.566 3.81812 15.1165 3.63119 14.7427 3.25734C14.3688 2.88347 14.1819 2.43404 14.1819 1.90906C14.1819 1.38407 14.3688 0.934646 14.7427 0.560776C15.1165 0.186926 15.566 0 16.0909 0C16.6159 0 17.0654 0.186926 17.4392 0.560776C17.8131 0.934646 18 1.38407 18 1.90906C18 2.43404 17.8131 2.88347 17.4392 3.25734C17.0654 3.63119 16.6159 3.81812 16.0909 3.81812Z"
                    fill="#FE9D00" />
            </svg>
        </div>
        <div class="frete-details-geral">
            <div class="frete-details-geral-info">
                <p>Frete - {{ $frete->tipo == 0 ? 'Comum' : ($frete->tipo == 1 ? 'Exclusivo' : ($frete->tipo == 2 ? 'Urgente' : '')) }}</p>
                <h3>#{{$frete->id}}</h3>
            </div>
            <div class="frete-details-geral-info">
                <p>Status</p>
                <h3 class="{{$frete->status == 0 ? 'text-zinc-300' : ($frete->status == 1 ? 'text-yellow-400' : ($frete->status == 2 ? 'text-sky-500' : ($frete->status == 3 ? 'text-green-500' : ($frete->status == 99 ? 'text-red-500' : ''))))}}">{{$frete->status == 0 ? 'Pendente' : ($frete->status == 1 ? 'Ativo' : ($frete->status == 2 ? 'Em Progresso' : ($frete->status == 3 ? 'Concluído' : ($frete->status == 99 ? 'Cancelado' : ''))))}}</h3>
            </div>
            <div class="frete-details-geral-info">
                <p>Empresa</p>
                <h3>{{$frete->empresa->nome}}</h3>
            </div>
        </div>

        <div class="frete-details-panel">
            <div class="frete-details-panel-content">
                <h3 class="frete-details-panel-title">Ações</h3>
                <ul class="frete-details-panel-content-actions">
                    @if($frete->status == 0) {{-- Ações Frete pendente --}}
                        <li class="frete-details-panel-content-actions-item bg-zinc-700">
                            <a href="{{route('admin.fretes.edit', $frete->id)}}">
                                <div class="frete-details-panel-content-actions-item-info">
                                    <img src="/assets/img/check-1.svg" alt="">
                                    <p>Editar Frete</p>
                                </div>
                                <img class="frete-details-add-action" src="/assets/img/arrow-right-list.svg" alt="">
                            </a>
                        </li>
                        <li class="frete-details-panel-content-actions-item bg-green-500">
                            <form method="POST" action="{{route('admin.fretes.detalhes.aprovar', $frete->id)}}">
                                @csrf
                                <div class="frete-details-panel-content-actions-item-info">
                                    <img src="/assets/img/check-1.svg" alt="">
                                    <button type="submit">Aprovar Frete</button>
                                </div>
                                <img class="frete-details-add-action" src="/assets/img/arrow-right-list.svg" alt="">
                            </form>
                        </li>
                        <li class="frete-details-panel-content-actions-item relative bg-red-500"
                            x-data="{
                                open: false
                            }">
                            <div x-on:click="open = !open" class="frete-details-panel-content-actions-item-info absolute w-full h-full top-0 left-0">
                                <img src="/assets/img/check-1.svg" alt="">
                                <p>Cancelar Frete</p>
                            </div>
                            <img class="frete-details-add-action" src="/assets/img/arrow-right-list.svg" alt="">

                            {{-- Modal Cancelar Frete --}}
                            <div x-show="open" x-on:click="open = !open" id="overlay" class="fixed top-0 left-0 w-full h-full bg-zinc-900 opacity-40 cursor-default" style="display:none"></div>
                            <div x-show="open" id="modal-btn" class="fixed p-14 bg-zinc-800 bottom-1/2 right-1/2 translate-y-1/2 translate-x-1/2 rounded-lg cursor-default" style="display:none">
                                <form method="POST" action="{{route('admin.fretes.detalhes.cancelar', $frete->id)}}" class="flex flex-col gap-8">
                                    @csrf
                                    <h3 class="text-2xl mb-[-8px]">Você tem certeza?</h3>
                                    <p>Escreva o motivo do cancelamento abaixo.</p>
                                    <input type="text" name="msg_cancelamento" class="py-2 px-4 text-zinc-900 w-full border-0 outline-0 focus:ring-1 ring-orange-600" required>
                                    <div class="flex gap-14">
                                        <button type="submit" class="py-4 px-8 bg-red-600 rounded-lg">Cancelar Frete</button>
                                        <button x-on:click="open = !open">Voltar</button>
                                    </div>
                                </form>
                            </div>
                        </li>

                    @elseif($frete->status == 1) {{-- Ações Frete ativo --}}

                        <li class="frete-details-panel-content-actions-item bg-zinc-700">
                            <a target="_blank" href="{{route('fretes.show', $frete->id)}}">
                                <div class="frete-details-panel-content-actions-item-info">
                                    <img src="/assets/img/check-1.svg" alt="">
                                    <p>Ver frete</p>
                                </div>
                                <img class="frete-details-add-action" src="/assets/img/arrow-right-list.svg" alt="">
                            </a>
                        </li>
                        <li class="frete-details-panel-content-actions-item bg-zinc-700">
                            <a href="{{route('admin.fretes.edit', $frete->id)}}">
                                <div class="frete-details-panel-content-actions-item-info">
                                    <img src="/assets/img/check-1.svg" alt="">
                                    <p>Editar Frete...</p>
                                </div>
                                <img class="frete-details-add-action" src="/assets/img/arrow-right-list.svg" alt="">
                            </a>
                        </li>
                        <li class="frete-details-panel-content-actions-item bg-yellow-500">
                            <form method="POST" action="{{route('admin.fretes.detalhes.pendente', $frete->id)}}">
                                @csrf
                                <div class="frete-details-panel-content-actions-item-info">
                                    <img src="/assets/img/check-1.svg" alt="">
                                    <button type="submit">Definir como Pendente</button>
                                </div>
                                <img class="frete-details-add-action" src="/assets/img/arrow-right-list.svg" alt="">
                            </form>
                        </li>
                        <li class="frete-details-panel-content-actions-item relative bg-red-500"
                            x-data="{
                                open: false
                            }">
                            <div x-on:click="open = !open" class="frete-details-panel-content-actions-item-info absolute w-full h-full top-0 left-0">
                                <img src="/assets/img/check-1.svg" alt="">
                                <p>Cancelar Frete</p>
                            </div>
                            <img class="frete-details-add-action" src="/assets/img/arrow-right-list.svg" alt="">

                            {{-- Modal Cancelar Frete --}}
                            <div x-show="open" x-on:click="open = !open" id="overlay" class="fixed top-0 left-0 w-full h-full bg-zinc-900 opacity-40 cursor-default" style="display:none"></div>
                            <div x-show="open" id="modal-btn" class="fixed p-14 bg-zinc-800 bottom-1/2 right-1/2 translate-y-1/2 translate-x-1/2 rounded-lg cursor-default" style="display:none">
                                <form method="POST" action="{{route('admin.fretes.detalhes.cancelar', $frete->id)}}" class="flex flex-col gap-8">
                                    @csrf
                                    <h3 class="text-2xl mb-[-8px]">Você tem certeza?</h3>
                                    <p>Escreva o motivo do cancelamento abaixo.</p>
                                    <input type="text" name="msg_cancelamento" class="py-2 px-4 text-zinc-900 w-full border-0 outline-0 focus:ring-1 ring-orange-600" required>
                                    <div class="flex gap-14">
                                        <button type="submit" class="py-4 px-8 bg-red-600 rounded-lg">Cancelar Frete</button>
                                        <button x-on:click="open = !open">Voltar</button>
                                    </div>
                                </form>
                            </div>
                        </li>

                    @elseif($frete->status == 2) {{-- Ações Frete Em Progresso --}}

                        <li class="frete-details-panel-content-actions-item bg-green-600">
                            <form method="POST" action="{{route('admin.fretes.detalhes.concluir', $frete->id)}}">
                                @csrf
                                <div class="frete-details-panel-content-actions-item-info">
                                    <img src="/assets/img/check-1.svg" alt="">
                                    <button type="submit">Concluir Frete</button>
                                </div>
                                <img class="frete-details-add-action" src="/assets/img/arrow-right-list.svg" alt="">
                            </form>
                        </li>
                        <li class="frete-details-panel-content-actions-item relative bg-red-500"
                            x-data="{
                                open: false
                            }">
                            <div x-on:click="open = !open" class="frete-details-panel-content-actions-item-info absolute w-full h-full top-0 left-0">
                                <img src="/assets/img/check-1.svg" alt="">
                                <p>Cancelar Frete</p>
                            </div>
                            <img class="frete-details-add-action" src="/assets/img/arrow-right-list.svg" alt="">

                            {{-- Modal Cancelar Frete --}}
                            <div x-show="open" x-on:click="open = !open" id="overlay" class="fixed top-0 left-0 w-full h-full bg-zinc-900 opacity-40 cursor-default" style="display:none"></div>
                            <div x-show="open" id="modal-btn" class="fixed p-14 bg-zinc-800 bottom-1/2 right-1/2 translate-y-1/2 translate-x-1/2 rounded-lg cursor-default" style="display:none">
                                <form method="POST" action="{{route('admin.fretes.detalhes.cancelar', $frete->id)}}" class="flex flex-col gap-8">
                                    @csrf
                                    <h3 class="text-2xl mb-[-8px]">Você tem certeza?</h3>
                                    <p>Escreva o motivo do cancelamento abaixo.</p>
                                    <input type="text" name="msg_cancelamento" class="py-2 px-4 text-zinc-900 w-full border-0 outline-0 focus:ring-1 ring-orange-600" required>
                                    <div class="flex gap-14">
                                        <button type="submit" class="py-4 px-8 bg-red-600 rounded-lg">Cancelar Frete</button>
                                        <button x-on:click="open = !open">Voltar</button>
                                    </div>
                                </form>
                            </div>
                        </li>

                    @elseif($frete->status == 3 || $frete->status == 99) {{-- Ações Frete Cancelado e Concluído --}}

                        <li class="frete-details-panel-content-actions-item bg-zinc-600">
                            <form action="{{ route('admin.fretes.detalhes.relatorio', $frete->id) }}" method="POST">
                                @csrf
                                <div class="frete-details-panel-content-actions-item-info">
                                    <img src="/assets/img/check-1.svg" alt="">
                                    <button type="submit">Gerar relatório</button>
                                </div>
                                <img class="frete-details-add-action" src="/assets/img/arrow-right-list.svg" alt="">
                            </form>
                        </li>

                    @endif
                </ul>
            </div>
            <div class="frete-details-panel-content">
                <h3 class="frete-details-panel-title">Histórico</h3>
                <ul class="frete-details-panel-content-actions">
                    <li class="frete-details-panel-content-actions-item bg-zinc-800">
                        <div class="frete-details-panel-content-actions-item-info frete-details-panel-content-actions-item-info-column">
                            <img src="/assets/img/clock-back1.svg" alt="">
                            <div class="frete-details-panel-content-actions-item-top">
                                <p>Frete criado</p>
                                <p>{{date('m/d/Y - H:i', strtotime($frete->created_at))}}</p>
                            </div>
                        </div>
                        <img class="frete-details-add-action" src="/assets/img/arrow-right-list.svg" alt="">
                    </li>
                    @if($frete->created_at != $frete->updated_at)
                    <li class="frete-details-panel-content-actions-item bg-zinc-800">
                        <div class="frete-details-panel-content-actions-item-info frete-details-panel-content-actions-item-info-column">
                            <img src="/assets/img/clock-back1.svg" alt="">
                            <div class="frete-details-panel-content-actions-item-top">
                                <p>Frete atualizado</p>
                                <p>{{date('m/d/Y - H:i', strtotime($frete->updated_at))}}</p>
                            </div>
                        </div>
                        <img class="frete-details-add-action" src="/assets/img/arrow-right-list.svg" alt="">
                    </li>
                    @endif
                    @if(isset($frete->data_ativo) && $frete->status > 0) {{-- Exbindo histórico de ativo --}}
                    <li class="frete-details-panel-content-actions-item bg-zinc-800">
                        <div class="frete-details-panel-content-actions-item-info frete-details-panel-content-actions-item-info-column">
                            <img src="/assets/img/clock-back1.svg" alt="">
                            <div class="frete-details-panel-content-actions-item-top">
                                <p>Frete ativo</p>
                                <p>{{date('m/d/Y - H:i', strtotime($frete->data_ativo))}}</p>
                            </div>
                        </div>
                        <img class="frete-details-add-action" src="/assets/img/arrow-right-list.svg" alt="">
                    </li>
                    @endif
                    @if(isset($frete->data_progresso) && $frete->status > 1) {{-- Exbindo histórico de em progresso --}}
                    <li class="frete-details-panel-content-actions-item bg-zinc-800">
                        <div class="frete-details-panel-content-actions-item-info frete-details-panel-content-actions-item-info-column">
                            <img src="/assets/img/clock-back1.svg" alt="">
                            <div class="frete-details-panel-content-actions-item-top">
                                <p>Frete em progresso</p>
                                <p>{{date('m/d/Y - H:i', strtotime($frete->data_progresso))}}</p>
                            </div>
                        </div>
                        <img class="frete-details-add-action" src="/assets/img/arrow-right-list.svg" alt="">
                    </li>
                    @endif
                    @if(isset($frete->data_concluido) && $frete->status > 2) {{-- Exbindo histórico de concluído --}}
                    <li class="frete-details-panel-content-actions-item bg-zinc-800">
                        <div class="frete-details-panel-content-actions-item-info frete-details-panel-content-actions-item-info-column">
                            <img src="/assets/img/clock-back1.svg" alt="">
                            <div class="frete-details-panel-content-actions-item-top">
                                <p>Frete concluído</p>
                                <p>{{date('m/d/Y - H:i', strtotime($frete->data_concluido))}}</p>
                            </div>
                        </div>
                        <img class="frete-details-add-action" src="/assets/img/arrow-right-list.svg" alt="">
                    </li>
                    @endif
                    @if(isset($frete->data_cancelado) && $frete->status == 99) {{-- Exbindo histórico de cancelado --}}
                    <li class="frete-details-panel-content-actions-item bg-zinc-800">
                        <div class="frete-details-panel-content-actions-item-info frete-details-panel-content-actions-item-info-column">
                            <img src="/assets/img/clock-back1.svg" alt="">
                            <div class="frete-details-panel-content-actions-item-top">
                                <p>Frete cancelado</p>
                                <p>{{date('m/d/Y - H:i', strtotime($frete->data_cancelado))}}</p>
                            </div>
                        </div>
                        <img class="frete-details-add-action" src="/assets/img/arrow-right-list.svg" alt="">
                    </li>
                    @endif
                </ul>
            </div>
            <div class="frete-details-panel-content">
                @if($frete->status == 0 || $frete->status == 1) {{-- Frete Pendente ou Ativo --}}
                    <div class="frete-details-panel-top">
                        <h3 class="frete-details-panel-title">Candidatos</h3>
                        <p class="frete-details-panel-candidatos-number">{{$frete->caminhoneiros->count()}}</p>
                    </div>
                    <ul class="frete-details-panel-content-actions frete-details-panel-content-actions-caminhoneiros">
                        @foreach($frete->caminhoneiros as $caminhoneiro)
                        <li
                        x-data="{
                            open: false,
                            toggle(){
                                this.open = !this.open
                            }
                        }"
                        class="frete-details-panel-content-actions-item bg-zinc-800"
                        >
                            <div x-on:click="toggle()" class="frete-details-panel-content-actions-item-content">
                                <img class="frete-details-panel-content-actions-item-content-img-caminhoneiro"
                                    src="/assets/img/trucker-profile-pic.png" alt="">
                                <div class="frete-details-panel-content-actions-item-content-aside">
                                    <h3>{{$caminhoneiro->users->firstName.' '.$caminhoneiro->users->lastName}}</h3>
                                    <p>São Paulo - SP</p>
                                    <div class="frete-details-rate-caminhoneiro">
                                        <img src="/assets/img/full-star.svg" alt="">
                                        <img src="/assets/img/full-star.svg" alt="">
                                        <img src="/assets/img/full-star.svg" alt="">
                                        <img src="/assets/img/full-star.svg" alt="">
                                        <img src="/assets/img/half-star.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <a class="ver-caminhoneiro">Ver ></a>

                            {{-- Modal Caminhoneiro --}}
                            <div id="bg-modal" x-on:click="toggle()" x-show="open" class="fixed bg-zinc-600 w-full h-full top-0 left-0 opacity-50 cursor-default" style="display:none;"></div>
                            <div x-show="open" class="modal-caminhoneiro-wrapper fixed bottom-1/2 right-1/2 translate-y-1/2 translate-x-1/2 cursor-default" style="display:none;">
                                <div class="modal-caminhoneiro">
                                    <div class="modal-caminhoneiro-top">
                                        <h3 class="frete-details-panel-title">Candidato</h3>
                                        <img x-on:click="toggle()" id="modal-frete-details-close-btn" src="/assets/img/close-1.svg">
                                    </div>
                                    <div class="modal-caminhoneiro-info">
                                        <img src="/assets/img/back-frete-details.png" alt="">
                                        <h2>{{$caminhoneiro->users->firstName.' '.$caminhoneiro->users->lastName}}</h2>
                                        <form class="modal-caminhoneiro-info-btns" method="POST" action="{{route('admin.fretes.detalhes.atribuir', [$frete->id, $caminhoneiro->id])}}">
                                            @csrf
                                            <button type="submit">Escolher caminhoneiro</button>
                                        </form>
                                    </div>
                                    <div class="modal-caminhoneiro-bottom">
                                        <p>CPF: <span>{{$caminhoneiro->dados->cpf}}</span></p>
                                        <p>Avaliação: <span>0</span></p>
                                        <p>Viagens: <span>{{count($caminhoneiro->fretesAtribuidos)}}</span></p>
                                        <p class="caminhoneiro-signature {{$caminhoneiro->assinatura == 'bronze' ? 'bronze' : ($caminhoneiro->assinatura == 'prata' ? 'prata' : ($caminhoneiro->assinatura == 'ouro' ? 'ouro' : ($caminhoneiro->assinatura == 'diamante' ? 'diamante' : '')))}} capitalize">Caminhoneiro {{$caminhoneiro->assinatura}}</p>
                                    </div>
                                </div>
                            </div>
                            {{----}}
                        </li>
                        @endforeach
                    </ul>

                @elseif($frete->status >= 2 && isset($frete->caminhoneiro_id))
                    <div class="frete-details-panel-top">
                        <h3 class="frete-details-panel-title">Caminhoneiro Atribuído</h3>
                        {{-- <p class="frete-details-panel-candidatos-number">{{$frete->caminhoneiros->count()}}</p> --}}
                    </div>
                    <ul class="frete-details-panel-content-actions frete-details-panel-content-actions-caminhoneiros">
                        <li
                        x-data="{
                            open: false,
                            toggle(){
                                this.open = !this.open
                            }
                        }"
                        class="frete-details-panel-content-actions-item bg-zinc-800"
                        >
                            <div x-on:click="toggle()" class="frete-details-panel-content-actions-item-content">
                                <img class="frete-details-panel-content-actions-item-content-img-caminhoneiro"
                                    src="/assets/img/trucker-profile-pic.png" alt="">
                                <div class="frete-details-panel-content-actions-item-content-aside">
                                    <h3>{{$frete->caminhoneiroAtribuido->users->firstName.' '.$frete->caminhoneiroAtribuido->users->lastName}}</h3>
                                    <p>São Paulo - SP</p>
                                    <div class="frete-details-rate-caminhoneiro">
                                        <img src="/assets/img/full-star.svg" alt="">
                                        <img src="/assets/img/full-star.svg" alt="">
                                        <img src="/assets/img/full-star.svg" alt="">
                                        <img src="/assets/img/full-star.svg" alt="">
                                        <img src="/assets/img/half-star.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <a class="ver-caminhoneiro">Ver ></a>

                            {{-- Modal Caminhoneiro --}}
                            <div id="bg-modal" x-on:click="toggle()" x-show="open" class="fixed bg-zinc-600 w-full h-full top-0 left-0 opacity-50 cursor-default" style="display:none;"></div>
                            <div x-show="open" class="modal-caminhoneiro-wrapper fixed bottom-1/2 right-1/2 translate-y-1/2 translate-x-1/2 cursor-default" style="display:none;">
                                <div class="modal-caminhoneiro">
                                    <div class="modal-caminhoneiro-top">
                                        <h3 class="frete-details-panel-title">Caminhoneiro em Rota</h3>
                                        <img x-on:click="toggle()" id="modal-frete-details-close-btn" src="/assets/img/close-1.svg">
                                    </div>
                                    <div class="modal-caminhoneiro-info">
                                        <img src="/assets/img/back-frete-details.png" alt="">
                                        <h2>{{$frete->caminhoneiroAtribuido->users->firstName.' '.$frete->caminhoneiroAtribuido->users->lastName}}</h2>
                                    </div>
                                    <div class="modal-caminhoneiro-bottom">
                                        <p>CPF: <span>{{$frete->caminhoneiroAtribuido->dados->cpf}}</span></p>
                                        <p>Avaliação: <span>0</span></p>
                                        <p>Viagens: <span>{{count($frete->caminhoneiroAtribuido->fretesAtribuidos)}}</span></p>
                                        <p class="caminhoneiro-signature {{$frete->caminhoneiroAtribuido->assinatura == 'bronze' ? 'bronze' : ($frete->caminhoneiroAtribuido->assinatura == 'prata' ? 'prata' : ($frete->caminhoneiroAtribuido->assinatura == 'ouro' ? 'ouro' : ($frete->caminhoneiroAtribuido->assinatura == 'diamante' ? 'diamante' : '')))}} capitalize">Caminhoneiro {{$frete->caminhoneiroAtribuido->assinatura}}</p>
                                    </div>
                                </div>
                            </div>
                            {{----}}
                        </li>
                    </ul>

                @elseif($frete->status >= 2 && !isset($frete->caminhoneiro_id))

                    <div class="frete-details-panel-top">
                        <h3 class="frete-details-panel-title">Candidatos</h3>
                        <p class="frete-details-panel-candidatos-number">{{$frete->caminhoneiros->count()}}</p>
                    </div>
                    <ul class="frete-details-panel-content-actions frete-details-panel-content-actions-caminhoneiros">
                        @foreach($frete->caminhoneiros as $caminhoneiro)
                        <li
                        x-data="{
                            open: false,
                            toggle(){
                                this.open = !this.open
                            }
                        }"
                        class="frete-details-panel-content-actions-item bg-zinc-800"
                        >
                            <div x-on:click="toggle()" class="frete-details-panel-content-actions-item-content">
                                <img class="frete-details-panel-content-actions-item-content-img-caminhoneiro"
                                    src="/assets/img/trucker-profile-pic.png" alt="">
                                <div class="frete-details-panel-content-actions-item-content-aside">
                                    <h3>{{$caminhoneiro->users->firstName.' '.$caminhoneiro->users->lastName}}</h3>
                                    <p>São Paulo - SP</p>
                                    <div class="frete-details-rate-caminhoneiro">
                                        <img src="/assets/img/full-star.svg" alt="">
                                        <img src="/assets/img/full-star.svg" alt="">
                                        <img src="/assets/img/full-star.svg" alt="">
                                        <img src="/assets/img/full-star.svg" alt="">
                                        <img src="/assets/img/half-star.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <a class="ver-caminhoneiro">Ver ></a>

                            {{-- Modal Caminhoneiro --}}
                            <div id="bg-modal" x-on:click="toggle()" x-show="open" class="fixed bg-zinc-600 w-full h-full top-0 left-0 opacity-50 cursor-default" style="display:none;"></div>
                            <div x-show="open" class="modal-caminhoneiro-wrapper fixed bottom-1/2 right-1/2 translate-y-1/2 translate-x-1/2 cursor-default" style="display:none;">
                                <div class="modal-caminhoneiro">
                                    <div class="modal-caminhoneiro-top">
                                        <h3 class="frete-details-panel-title">Candidato</h3>
                                        <img x-on:click="toggle()" id="modal-frete-details-close-btn" src="/assets/img/close-1.svg">
                                    </div>
                                    <div class="modal-caminhoneiro-info">
                                        <img src="/assets/img/back-frete-details.png" alt="">
                                        <h2>{{$caminhoneiro->users->firstName.' '.$caminhoneiro->users->lastName}}</h2>
                                        <form class="modal-caminhoneiro-info-btns" method="POST" action="{{route('admin.fretes.detalhes.atribuir', [$frete->id, $caminhoneiro->id])}}">
                                            @csrf
                                            <button type="submit">Escolher caminhoneiro</button>
                                        </form>
                                    </div>
                                    <div class="modal-caminhoneiro-bottom">
                                        <p>CPF: <span>{{$caminhoneiro->dados->cpf}}</span></p>
                                        <p>Avaliação: <span>0</span></p>
                                        <p>Viagens: <span>{{count($caminhoneiro->fretesAtribuidos)}}</span></p>
                                        <p class="caminhoneiro-signature {{$caminhoneiro->assinatura == 'bronze' ? 'bronze' : ($caminhoneiro->assinatura == 'prata' ? 'prata' : ($caminhoneiro->assinatura == 'ouro' ? 'ouro' : ($caminhoneiro->assinatura == 'diamante' ? 'diamante' : '')))}} capitalize">Caminhoneiro {{$caminhoneiro->assinatura}}</p>
                                    </div>
                                </div>
                            </div>
                            {{----}}
                        </li>
                        @endforeach
                    </ul>
                @endif

                <div class="frete-details-panel-bottom">
                    {{-- <a class="open-modal-list" href="#">Ver todos > </a> --}}
                </div>
            </div>
        </div>

        <div class="my-24">

            @if($frete->status == 99)
                <p class="bg-red-400 p-4 mb-14 rounded-lg"><span class="font-bold">Motivo do cancelamento:</span> {{$frete->msg_cancelado}}</p>
            @endif

            <p class="text-4xl font-bold border-b pb-4">Informações do Frete:</p>

            <div class="flex flex-col gap-9 my-12 md:flex-row">
                <div class="w-1/2">
                    <p class="font-bold">Endereço de Origem</p>
                    <p>Estado: {{$frete->atributos->endereco_origem['estado']}}</p>
                    <p>Cidade: {{$frete->atributos->endereco_origem['cidade']}}</p>
                    <p>CEP: {{$frete->atributos->endereco_origem['cep']}}</p>
                    <p>Rua: {{$frete->atributos->endereco_origem['rua']}}</p>
                    <p>Bairro: {{$frete->atributos->endereco_origem['bairro']}}</p>
                    <p>Numero: {{$frete->atributos->endereco_origem['numero']}}</p>
                    <p>Complemento: {{$frete->atributos->endereco_origem['complemento'] == null ? '' : $frete->atributos->endereco_origem['complemento']}}</p>

                    <p class="mt-6">Previsão da Carga: {{date('d/m/Y', strtotime($frete->atributos->endereco_origem['previsao_carga']))}}</p>
                    <p>Hora da Carga: {{$frete->atributos->endereco_origem['hora_carga']}}</p>
                </div>
                <div class="w-1/2">
                    <p class="font-bold">Endereço de Destino</p>
                    <p>Estado: {{$frete->atributos->endereco_destino['estado']}}</p>
                    <p>Cidade: {{$frete->atributos->endereco_destino['cidade']}}</p>
                    <p>CEP: {{$frete->atributos->endereco_destino['cep']}}</p>
                    <p>Rua: {{$frete->atributos->endereco_destino['rua']}}</p>
                    <p>Bairro: {{$frete->atributos->endereco_destino['bairro']}}</p>
                    <p>Numero: {{$frete->atributos->endereco_destino['numero']}}</p>
                    <p>Complemento: {{$frete->atributos->endereco_destino['complemento'] == null ? '' : $frete->atributos->endereco_destino['complemento']}}</p>

                    <p class="mt-6">Previsão da Descarga: {{date('d/m/Y', strtotime($frete->atributos->endereco_destino['previsao_descarga']))}}</p>
                    <p>Hora da Descarga: {{$frete->atributos->endereco_destino['hora_descarga']}}</p>
                </div>
            </div>
            <div>
                <p><span class="font-bold">KM:</span> {{$frete->atributos->km}}</p>
                <p><span class="font-bold">Valor:</span> {{$frete->atributos->valor}}</p>
                <p><span class="font-bold">Produto:</span> {{$frete->atributos->produto}}</p>
                <p><span class="font-bold">Tipo de Carga:</span> {{$frete->atributos->tipo_carga}}</p>
                <p><span class="font-bold">Espécie:</span> {{$frete->atributos->especie}}</p>

                @if($frete->atributos->veiculos_pesados)
                    <p><span class="font-bold">Veículos Pesados:</span>
                    @foreach($frete->atributos->veiculos_pesados as $veiculo)
                        <span>{{$veiculo}}{{$loop->last ? '' : ', '}}</span>
                    @endforeach
                    </p>
                @endif
                @if($frete->atributos->veiculos_medios)
                    <p><span class="font-bold">Veículos Médios:</span>
                    @foreach($frete->atributos->veiculos_medios as $veiculo)
                        <span>{{$veiculo}}{{$loop->last ? '' : ', '}}</span>
                    @endforeach
                    </p>
                @endif
                @if($frete->atributos->veiculos_leves)
                    <p><span class="font-bold">Veículos Leves:</span>
                    @foreach($frete->atributos->veiculos_leves as $veiculo)
                        <span>{{$veiculo}}{{$loop->last ? '' : ', '}}</span>
                    @endforeach
                    </p>
                @endif

                <p><span class="font-bold">Carroceria:</span>
                @isset($frete->atributos->carroceria)
                    @foreach($frete->atributos->carroceria as $carroceria)
                        <span>{{$carroceria}}{{$loop->last ? '' : ', '}}</span>
                    @endforeach
                @endisset
                </p>

                <p class="mt-12"><span class="font-bold">Peso da Carga:</span> {{$frete->atributos->peso['total']}}</p>
                <p class="mb-12"><span class="font-bold">Volumes da Carga:</span> {{$frete->atributos->peso['volumes']}}</p>


                <p><span class="font-bold">Lona:</span> {{$frete->atributos->lona == 1 ? 'Sim' : 'Não'}}</p>
                <p><span class="font-bold">Agenciamento:</span> {{$frete->atributos->agenciamento == 1 ? 'Sim' : 'Não'}}</p>
                <p><span class="font-bold">Pedágio:</span> {{$frete->atributos->pedagio == 1 ? 'Sim' : 'Não'}}</p>
                <p><span class="font-bold">Rastreador:</span> {{$frete->atributos->rastreador == 1 ? 'Sim' : 'Não'}}</p>

                <p><span class="font-bold">Pagamento:</span>
                    @isset($frete->atributos->pagamento)
                        @foreach($frete->atributos->pagamento as $pagamento)
                            <span>{{$pagamento}}{{$loop->last ? '' : ', '}}</span>
                        @endforeach
                    @endisset
                </p>

                <p><span class="font-bold">Observações:</span> {{$frete->atributos->observacoes}}</p>

            </div>
        </div>
    </div>

</main>



{{-- Modal Lista Candidatos --}}
<div class="modal-list-wrapper">
    <div class="modal-list">
        <div class="modal-list-top">
            <h3 class="frete-details-panel-title">Candidatos</h3>
            <img class="modal-list-top-close-btn" src="/assets/img/close-1.svg" alt="">
        </div>
        <ul class="frete-details-panel-content-actions frete-details-panel-content-actions-list">
            <li class="frete-details-panel-content-actions-item">
                <div class="frete-details-panel-content-actions-item-content">
                    <img class="frete-details-panel-content-actions-item-content-img-caminhoneiro"
                        src="/assets/img/trucker-profile-pic.png" alt="">
                    <div class="frete-details-panel-content-actions-item-content-aside">
                        <h3>Pedro Luiz Henrique</h3>
                        <p>São Paulo - SP</p>
                        <div class="frete-details-rate-caminhoneiro">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/half-star.svg" alt="">
                        </div>
                    </div>
                </div>
                <a class="ver-caminhoneiro" href="#">Ver ></a>
            </li>
            <li class="frete-details-panel-content-actions-item">
                <div class="frete-details-panel-content-actions-item-content">
                    <img class="frete-details-panel-content-actions-item-content-img-caminhoneiro"
                        src="/assets/img/back-frete-details.png" alt="">
                    <div class="frete-details-panel-content-actions-item-content-aside">
                        <h3>Pedro Luiz Henrique</h3>
                        <p>São Paulo - SP</p>
                        <div class="frete-details-rate-caminhoneiro">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/half-star.svg" alt="">
                        </div>
                    </div>
                </div>
                <a class="ver-caminhoneiro" href="#">Ver ></a>
            </li>
            <li class="frete-details-panel-content-actions-item">
                <div class="frete-details-panel-content-actions-item-content">
                    <img class="frete-details-panel-content-actions-item-content-img-caminhoneiro"
                        src="/assets/img/trucker-profile-pic.png" alt="">
                    <div class="frete-details-panel-content-actions-item-content-aside">
                        <h3>Pedro Luiz Henrique</h3>
                        <p>São Paulo - SP</p>
                        <div class="frete-details-rate-caminhoneiro">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/half-star.svg" alt="">
                        </div>
                    </div>
                </div>
                <a class="ver-caminhoneiro" href="#">Ver ></a>
            </li>
            <li class="frete-details-panel-content-actions-item">
                <div class="frete-details-panel-content-actions-item-content">
                    <img class="frete-details-panel-content-actions-item-content-img-caminhoneiro"
                        src="/assets/img/trucker-profile-pic.png" alt="">
                    <div class="frete-details-panel-content-actions-item-content-aside">
                        <h3>Pedro Luiz Henrique</h3>
                        <p>São Paulo - SP</p>
                        <div class="frete-details-rate-caminhoneiro">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/half-star.svg" alt="">
                        </div>
                    </div>
                </div>
                <a class="ver-caminhoneiro" href="#">Ver ></a>
            </li>
            <li class="frete-details-panel-content-actions-item">
                <div class="frete-details-panel-content-actions-item-content">
                    <img class="frete-details-panel-content-actions-item-content-img-caminhoneiro"
                        src="/assets/img/back-frete-details.png" alt="">
                    <div class="frete-details-panel-content-actions-item-content-aside">
                        <h3>Pedro Luiz Henrique</h3>
                        <p>São Paulo - SP</p>
                        <div class="frete-details-rate-caminhoneiro">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/half-star.svg" alt="">
                        </div>
                    </div>
                </div>
                <a class="ver-caminhoneiro" href="#">Ver ></a>
            </li>
            <li class="frete-details-panel-content-actions-item">
                <div class="frete-details-panel-content-actions-item-content">
                    <img class="frete-details-panel-content-actions-item-content-img-caminhoneiro"
                        src="/assets/img/trucker-profile-pic.png" alt="">
                    <div class="frete-details-panel-content-actions-item-content-aside">
                        <h3>Pedro Luiz Henrique</h3>
                        <p>São Paulo - SP</p>
                        <div class="frete-details-rate-caminhoneiro">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/full-star.svg" alt="">
                            <img src="/assets/img/half-star.svg" alt="">
                        </div>
                    </div>
                </div>
                <a class="ver-caminhoneiro" href="#">Ver ></a>
            </li>
        </ul>
    </div>
</div>

@endsection

@push('scripts')
    {{-- <script src="/assets/js/modal-frete-details.js"></script> --}}
@endpush
