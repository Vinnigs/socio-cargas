<div>
    {{-- PESQUISA DE FRETES --}}
    <div id="container">
        <div class="filter">
            <div class="destiny filter-block">
                <div class="destiny-title select-title">
                    <img src="/assets/img/map-filter.svg" alt="">
                    <h5>Origem e destino</h5>
                </div>
                <select required name="filter-origin" id="filter-origin"
                    wire:model="filterOrigem"
                    wire:change="filterFretes"
                    >
                    <option selected value="">Escolha sua origem</option>
                    <option value="SP">São Paulo</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MG">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>

                <select required name="filter-destiny" id="filter-destiny"
                    wire:model="filterDestino"
                    wire:change="filterFretes"
                    >
                    <option selected value="">Escolha seu destino</option>
                    <option value="SP">São Paulo</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MG">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>
            <div class="distance filter-block">
                <div class="distance-title select-title">
                    <img src="./assets/img/up-distance.svg" alt="">
                    <h5>Distância (km)</h5>
                </div>
                <div>
                    <input type="radio" id="distance-50km" wire:model="filterDistancia" value="ate50km" wire:change="filterFretes">
                    <label for="distance-50km">Até 50km</label>
                </div>
                <div>
                    <input type="radio" id="distance-100km" wire:model="filterDistancia" value="ate100km"  wire:change="filterFretes">
                    <label for="distance-100km">50km a 100km</label>
                </div>
                <div>
                    <input type="radio" id="distance-100km-plus" wire:model="filterDistancia" value="mais100km" wire:change="filterFretes">
                    <label for="distance-100km-plus">Mais de 100km</label>
                </div>
            </div>
            <div class="vehicles filter-block">
                <div class="distance-title select-title">
                    <img src="./assets/img/truck-vehicles.svg" alt="">
                    <h5>Veículos</h5>
                </div>
                <div>
                    <input type="checkbox" id="carreta" wire:model="filterVeiculos.Carreta" wire:change="filterFretes">
                    <label for="carreta">Carreta</label>
                </div>
                <div>
                    <input type="checkbox" id="carreta-ls" wire:model="filterVeiculos.Carreta LS" wire:change="filterFretes" />
                    <label for="carreta-ls">Carreta LS</label>
                </div>
                <div>
                    <input type="checkbox" id="bitrem" wire:model="filterVeiculos.Bitrem" wire:change="filterFretes" />
                    <label for="bitrem">Bitrem</label>
                </div>
                <div>
                    <input type="checkbox" id="rodotrem" wire:model="filterVeiculos.Rodotrem" wire:change="filterFretes" />
                    <label for="rodotrem">Rodotrem</label>
                </div>
                <div>
                    <input type="checkbox" id="vanderleia" wire:model="filterVeiculos.Vanderléia" wire:change="filterFretes" />
                    <label for="vanderleia">Vanderléia</label>
                </div>
            </div>
            <div class="carroceria filter-block">
                <div class="carroceria-title select-title">
                    <img src="./assets/img/carroceria-pesquisar.svg" alt="">
                    <h5>Carroceria</h5>
                </div>
                <div>
                    <input type="checkbox" id="sider" name="sider" wire:model="filterCarroceria.Sider" wire:change="filterFretes"/>
                    <label for="sider">Sider</label>
                </div>
                <div>
                    <input type="checkbox" id="bau" name="bau" wire:model="filterCarroceria.Baú" wire:change="filterFretes"/>
                    <label for="bau">Baú</label>
                </div>
                <div>
                    <input type="checkbox" id="graneleiro" name="graneleiro" wire:model="filterCarroceria.Graneleiro" wire:change="filterFretes"/>
                    <label for="graneleiro">Graneleiro</label>
                </div>
                <div>
                    <input type="checkbox" id="prancha" name="prancha" wire:model="filterCarroceria.Prancha" wire:change="filterFretes"/>
                    <label for="prancha">Prancha</label>
                </div>
                <div>
                    <input type="checkbox" id="cacamba" name="cacamba" wire:model="filterCarroceria.Caçamba" wire:change="filterFretes"/>
                    <label for="cacamba">Caçamba</label>
                </div>
            </div>
        </div>

        {{-- FRETES --}}
        <div class="fretes">
            <div class="new-frete-link">
                <div class="new-frete-img-wrapper">
                    <img src="/assets/img/new-frete-gps.svg" alt="">
                </div>
                <p>Gostaria de cadastrar seu frete? <a href="#">Clique aqui</a></p>
            </div>
            <div class="frete-quantity">
                <span><p>{{$fretesContagem}}</p> Fretes disponíveis</span>
                <img id="filter-button-toggle" src="/assets/img/filter-button-icon.svg" alt="">
            </div>
            <ul class="fretes-list">
                @foreach($fretesAtivos as $frete)
                    <li class="fretes-list-item">
                        <a href="{{route('fretes.show', $frete->id)}}" class="frete-wrapper">
                            <div class="frete-container-top">
                                <div class="frete-container-top-info">
                                    <div class="frete-loja-container">
                                        <img class="frete-container-loja-img" src="/assets/img/empresas/{{$frete->empresa->imagem}}" style="object-fit: cover; border-radius: 2px;">
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
                                <p>{{$frete->tipo == 1 ? 'Exclusivo' : ($frete->tipo == 2 ? 'Urgente' : '')}}</p>
                            </div>
                            <div class="frete-container-bottom">
                                <div class="frete-container-bottom-type-product">
                                    <img src="/assets/img/material-block-black.svg" alt="">
                                    <p>{{$frete->atributos->produto}}</p>
                                </div>
                                <div class="frete-container-bottom-info">
                                    <div class="frete-bottom-stats">
                                        @if($frete->atributos->km > 0)
                                            <p class="type-of-frete-vehicle distance-vehicle">{{$frete->atributos->km}}km</p>
                                        @endif

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
                                    <p class="frete-value frete-value-mobile">
                                        @if($frete->atributos->valor > 0)
                                            R$ {{$frete->atributos->valor}}
                                        @else
                                            A COMBINAR
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <p class="frete-value">
                                @if($frete->atributos->valor > 0)
                                    R$ {{$frete->atributos->valor}}
                                @else
                                    A COMBINAR
                                @endif
                            </p>
                        </a>
                    </li>
                @endforeach
            </ul>

        </div>

    </div>
</div>
