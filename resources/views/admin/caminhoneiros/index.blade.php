@extends('admin.layout')

@section('titulo', 'Caminhoneiros')

@section('conteudo')

<section class="my-fretes">
    <div class="my-fretes-top">
        <div class="my-fretes-top-info-menu">
            <h3>Caminhoneiros</h3>
            <svg class="menu-cms-toggle" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                viewBox="0 0 18 18" fill="none">
                <path
                    d="M1.90906 18C1.38407 18 0.934645 17.8131 0.560775 17.4392C0.186925 17.0654 0 16.6159 0 16.0909C0 15.566 0.186925 15.1165 0.560775 14.7427C0.934645 14.3688 1.38407 14.1819 1.90906 14.1819C2.43404 14.1819 2.88347 14.3688 3.25734 14.7427C3.63119 15.1165 3.81812 15.566 3.81812 16.0909C3.81812 16.6159 3.63119 17.0654 3.25734 17.4392C2.88347 17.8131 2.43404 18 1.90906 18ZM9 18C8.47501 18 8.02559 17.8131 7.65172 17.4392C7.27787 17.0654 7.09094 16.6159 7.09094 16.0909C7.09094 15.566 7.27787 15.1165 7.65172 14.7427C8.02559 14.3688 8.47501 14.1819 9 14.1819C9.52499 14.1819 9.97441 14.3688 10.3483 14.7427C10.7221 15.1165 10.9091 15.566 10.9091 16.0909C10.9091 16.6159 10.7221 17.0654 10.3483 17.4392C9.97441 17.8131 9.52499 18 9 18ZM16.0909 18C15.566 18 15.1165 17.8131 14.7427 17.4392C14.3688 17.0654 14.1819 16.6159 14.1819 16.0909C14.1819 15.566 14.3688 15.1165 14.7427 14.7427C15.1165 14.3688 15.566 14.1819 16.0909 14.1819C16.6159 14.1819 17.0654 14.3688 17.4392 14.7427C17.8131 15.1165 18 15.566 18 16.0909C18 16.6159 17.8131 17.0654 17.4392 17.4392C17.0654 17.8131 16.6159 18 16.0909 18ZM1.90906 10.9091C1.38407 10.9091 0.934645 10.7221 0.560775 10.3483C0.186925 9.97441 0 9.52499 0 9C0 8.47501 0.186925 8.02559 0.560775 7.65172C0.934645 7.27787 1.38407 7.09094 1.90906 7.09094C2.43404 7.09094 2.88347 7.27787 3.25734 7.65172C3.63119 8.02559 3.81812 8.47501 3.81812 9C3.81812 9.52499 3.63119 9.97441 3.25734 10.3483C2.88347 10.7221 2.43404 10.9091 1.90906 10.9091ZM9 10.9091C8.47501 10.9091 8.02559 10.7221 7.65172 10.3483C7.27787 9.97441 7.09094 9.52499 7.09094 9C7.09094 8.47501 7.27787 8.02559 7.65172 7.65172C8.02559 7.27787 8.47501 7.09094 9 7.09094C9.52499 7.09094 9.97441 7.27787 10.3483 7.65172C10.7221 8.02559 10.9091 8.47501 10.9091 9C10.9091 9.52499 10.7221 9.97441 10.3483 10.3483C9.97441 10.7221 9.52499 10.9091 9 10.9091ZM16.0909 10.9091C15.566 10.9091 15.1165 10.7221 14.7427 10.3483C14.3688 9.97441 14.1819 9.52499 14.1819 9C14.1819 8.47501 14.3688 8.02559 14.7427 7.65172C15.1165 7.27787 15.566 7.09094 16.0909 7.09094C16.6159 7.09094 17.0654 7.27787 17.4392 7.65172C17.8131 8.02559 18 8.47501 18 9C18 9.52499 17.8131 9.97441 17.4392 10.3483C17.0654 10.7221 16.6159 10.9091 16.0909 10.9091ZM1.90906 3.81812C1.38407 3.81812 0.934645 3.63119 0.560775 3.25734C0.186925 2.88347 0 2.43404 0 1.90906C0 1.38407 0.186925 0.934646 0.560775 0.560776C0.934645 0.186926 1.38407 0 1.90906 0C2.43404 0 2.88347 0.186926 3.25734 0.560776C3.63119 0.934646 3.81812 1.38407 3.81812 1.90906C3.81812 2.43404 3.63119 2.88347 3.25734 3.25734C2.88347 3.63119 2.43404 3.81812 1.90906 3.81812ZM9 3.81812C8.47501 3.81812 8.02559 3.63119 7.65172 3.25734C7.27787 2.88347 7.09094 2.43404 7.09094 1.90906C7.09094 1.38407 7.27787 0.934646 7.65172 0.560776C8.02559 0.186926 8.47501 0 9 0C9.52499 0 9.97441 0.186926 10.3483 0.560776C10.7221 0.934646 10.9091 1.38407 10.9091 1.90906C10.9091 2.43404 10.7221 2.88347 10.3483 3.25734C9.97441 3.63119 9.52499 3.81812 9 3.81812ZM16.0909 3.81812C15.566 3.81812 15.1165 3.63119 14.7427 3.25734C14.3688 2.88347 14.1819 2.43404 14.1819 1.90906C14.1819 1.38407 14.3688 0.934646 14.7427 0.560776C15.1165 0.186926 15.566 0 16.0909 0C16.6159 0 17.0654 0.186926 17.4392 0.560776C17.8131 0.934646 18 1.38407 18 1.90906C18 2.43404 17.8131 2.88347 17.4392 3.25734C17.0654 3.63119 16.6159 3.81812 16.0909 3.81812Z"
                    fill="#FE9D00" />
            </svg>
        </div>
        <div class="my-fretes-filter">
            <img id="filter-button-toggle" src="/assets/img/filter-my-fretes.svg" alt="">
            <div class="select">
                <div id="category-select">
                    <input type="checkbox" id="options-view-button1">

                    <div id="select-button">
                        <div id="selected-value">Ordenar por:</div>

                        <div id="chevrons">
                            <i class="ph ph-caret-down"></i>
                            <i class="ph ph-caret-up"></i>
                        </div>
                    </div>
                </div>

                <ul id="options">
                    <li class="option">
                        <input class="form-input-radio" type="radio" name="category" value="so-cavalo"
                            data-label="Só Cavalo">
                        <span class="label-selected-form">Relevância</span>
                        <i class="ph ph-check"></i>
                    </li>
                    <li class="option">
                        <input class="form-input-radio" type="radio" name="category" value="cavalo-carreta"
                            data-label="Cavalo/Carreta">
                        <span class="label-selected-form">Recentes</span>
                        <i class="ph ph-check"></i>
                    </li>
                    <li class="option">
                        <input class="form-input-radio" type="radio" name="category" value="truck"
                            data-label="Truck">
                        <span class="label-selected-form">Menor distância</span>
                        <i class="ph ph-check"></i>
                    </li>
                    <li class="option">
                        <input class="form-input-radio" type="radio" name="category" value="truck"
                            data-label="Truck">
                        <span class="label-selected-form">Maior distância</span>
                        <i class="ph ph-check"></i>
                    </li>
                    <li class="option">
                        <input class="form-input-radio" type="radio" name="category" value="bi-truck"
                            data-label="Bi-Truck">
                        <span class="label-selected-form">Maior preço</span>
                        <i class="ph ph-check"></i>
                    </li>
                </ul>
            </div>
        </div>
        <div class="filter">
            <i id="filter-close-btn" class="ph ph-x"></i>
            <div class="destiny filter-block">
                <div class="destiny-title select-title">
                    <img src="/assets/img/map-filter.svg" alt="">
                    <h5>Origem e destino</h5>
                </div>
                <select required name="filter-origin" id="filter-origin">
                    <option disabled selected value="">Escolha sua origem</option>
                    <option value="taboao-sp">Taboão-SP</option>
                    <option value="taboao-sp">Taboão-SP</option>
                    <option value="taboao-sp">Taboão-SP</option>
                    <option value="taboao-sp">Taboão-SP</option>
                </select>

                <select required name="filter-destiny" id="filter-destiny">
                    <option value="rio-grande-da-serra-sp">Rio Grande da Serra-SP</option>
                    <option value="rio-grande-da-serra-sp">Rio Grande da Serra-SP</option>
                    <option value="rio-grande-da-serra-sp">Rio Grande da Serra-SP</option>
                    <option value="rio-grande-da-serra-sp">Rio Grande da Serra-SP</option>
                    <option value="rio-grande-da-serra-sp">Rio Grande da Serra-SP</option>
                    <option value="rio-grande-da-serra-sp">Rio Grande da Serra-SP</option>
                </select>
            </div>
            <div class="distance filter-block">
                <div class="distance-title select-title">
                    <img src="/assets/img/up-distance.svg" alt="">
                    <h5>Distância (km)</h5>
                </div>
                <div>
                    <input type="radio" id="distance-50km" name="drone" value="distance-50km" />
                    <label for="distance-50km">Até 50km</label>
                </div>
                <div>
                    <input type="radio" id="distance-100km" name="drone" value="distance-100km" />
                    <label for="distance-100km">50km a 100km</label>
                </div>
                <div>
                    <input type="radio" id="distance-100km-plus" name="drone" value="distance-100km-plus" />
                    <label for="distance-100km-plus">Mais de 100km</label>
                </div>
            </div>
            <div class="vehicles filter-block">
                <div class="distance-title select-title">
                    <img src="/assets/img/truck-vehicles.svg" alt="">
                    <h5>Veículos</h5>
                </div>
                <div>
                    <input type="checkbox" id="carreta" name="carreta" />
                    <label for="carreta">Carreta</label>
                </div>
                <div>
                    <input type="checkbox" id="carreta-ls" name="carreta-ls" />
                    <label for="carreta-ls">Carreta LS</label>
                </div>
                <div>
                    <input type="checkbox" id="bitrem" name="bitrem" />
                    <label for="bitrem">Bitrem</label>
                </div>
                <div>
                    <input type="checkbox" id="rodotrem" name="rodotrem" />
                    <label for="rodotrem">Rodotrem</label>
                </div>
                <div>
                    <input type="checkbox" id="vanderleia" name="vanderleia" />
                    <label for="vanderleia">Vanderléia</label>
                </div>
            </div>
            <div class="carroceria filter-block">
                <div class="carroceria-title select-title">
                    <img src="/assets/img/carroceria-pesquisar.svg" alt="">
                    <h5>Carroceria</h5>
                </div>
                <div>
                    <input type="checkbox" id="sider" name="sider" />
                    <label for="sider">Sider</label>
                </div>
                <div>
                    <input type="checkbox" id="bau" name="bau" />
                    <label for="bau">Baú</label>
                </div>
                <div>
                    <input type="checkbox" id="graneleiro" name="graneleiro" />
                    <label for="graneleiro">Graneleiro</label>
                </div>
                <div>
                    <input type="checkbox" id="prancha" name="prancha" />
                    <label for="prancha">Prancha</label>
                </div>
                <div>
                    <input type="checkbox" id="cacamba" name="cacamba" />
                    <label for="cacamba">Caçamba</label>
                </div>
            </div>
        </div>
    </div>
    <ul class="fretes-list">
        @foreach($caminhoneiros as $caminhoneiro)
        <li class="flex gap-10 items-center justify-between py-8 border-b-2 border-zinc-300">
            <div class="flex gap-6">
                <img width="50" height="50" src="/assets/img/caminhoneiros/{{$caminhoneiro->imagem}}" alt="" class="foto-cam">
                <div class="flex flex-col">
                    <p>{{ $caminhoneiro->users->firstName . ' ' . $caminhoneiro->users->lastName }}</p>
                    <p>#{{ $caminhoneiro->id }}</p>
                </div>
            </div>

            <p class="capitalize">{{ $caminhoneiro->assinatura }}</p>

            <div class="flex gap-10">
                <a href="{{ route('admin.caminhoneiros.edit', $caminhoneiro->slug) }}">Editar</a>
                <a href="#">Ver mais</a>
            </div>
        </li>
        @endforeach

    </ul>
</section>

@endsection
