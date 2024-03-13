@extends('site.layout')

@section('titulo', 'Minha Empresa - Histórico de Fretes | Sócio Caminhoneiro')

@section('conteudo')

<section class="profile-info-rating">
    <div id="container">
        <div class="profile-info-rating-text">
            <h4>Empresa</h4>
            <p>{{$empresa->nome}}</p>
        </div>
        <div class="profile-info-rating-rate">
            <p class="profile-info-rating-rate-number"></p>
            <div class="profile-info-rating-rate-container">
                <div class="profile-info-rating-rate-bars profile-info-rating-rate-bars-three"></div>
            </div>
            <div class="profile-info-rating-rate-info">
                <i class="ph ph-info">
                    <div class="profile-info-rating-rate-info-lightbox">
                        <p>A plataforma da Sócio utiliza um sistema de avaliação para os caminhoneiros parceiros com
                            base na qualidade da entrega.
                        </p>
                    </div>
                </i>

            </div>
        </div>
    </div>
</section>

<section class="breadcrumb">
    <div id="container">
        <div class="breadcrumb-left">
            <a href="{{route('home')}}">Início</a>
            <p>Minha Empresa</p>
        </div>
        <img id="breadcrumb-menu-opener" src="/assets/img/menu-fretes-mob.svg" alt="">
    </div>
</section>

<main>
    <div id="container">
        <div class="aside-wrapper">
            <aside class="menu">
                <a href="{{route('minhaempresa.index')}}" class="menu-item">
                    <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3.58439 12.5C2.96235 12.5 2.43422 12.2825 2 11.8474C1.56577 11.4123 1.34866 10.884 1.34866 10.2625H0V1.94063C0 1.53807 0.139464 1.19732 0.418393 0.918393C0.697321 0.639464 1.03806 0.5 1.44061 0.5H12.2912V3.5345H14.4061L16.9809 6.9828V10.2625H15.5403C15.5403 10.884 15.3226 11.4123 14.8871 11.8474C14.4517 12.2825 13.923 12.5 13.3009 12.5C12.6789 12.5 12.1508 12.2825 11.7165 11.8474C11.2823 11.4123 11.0652 10.884 11.0652 10.2625H5.82375C5.82375 10.8857 5.60603 11.4144 5.1706 11.8487C4.73518 12.2829 4.20644 12.5 3.58439 12.5ZM3.5862 11.3046C3.87841 11.3046 4.12516 11.204 4.32644 11.0027C4.52772 10.8014 4.62836 10.5547 4.62836 10.2625C4.62836 9.97025 4.52772 9.7235 4.32644 9.52222C4.12516 9.32094 3.87841 9.2203 3.5862 9.2203C3.29398 9.2203 3.04723 9.32094 2.84595 9.52222C2.64467 9.7235 2.54403 9.97025 2.54403 10.2625C2.54403 10.5547 2.64467 10.8014 2.84595 11.0027C3.04723 11.204 3.29398 11.3046 3.5862 11.3046ZM1.19539 9.06709H1.77163C1.94122 8.77181 2.18617 8.52429 2.50649 8.32454C2.82681 8.12479 3.18671 8.02491 3.5862 8.02491C3.97548 8.02491 4.33283 8.12351 4.65824 8.32072C4.98366 8.5179 5.23117 8.7667 5.40077 9.06709H11.0958V1.69539H1.44061C1.37931 1.69539 1.32311 1.72093 1.27201 1.77201C1.22093 1.82311 1.19539 1.87932 1.19539 1.94063V9.06709ZM13.3027 11.3046C13.5949 11.3046 13.8417 11.204 14.043 11.0027C14.2443 10.8014 14.3449 10.5547 14.3449 10.2625C14.3449 9.97025 14.2443 9.7235 14.043 9.52222C13.8417 9.32094 13.5949 9.2203 13.3027 9.2203C13.0105 9.2203 12.7638 9.32094 12.5625 9.52222C12.3612 9.7235 12.2606 9.97025 12.2606 10.2625C12.2606 10.5547 12.3612 10.8014 12.5625 11.0027C12.7638 11.204 13.0105 11.3046 13.3027 11.3046ZM12.2912 7.47321H15.8621L13.7931 4.72987H12.2912V7.47321Z"
                            fill="white" />
                    </svg>
                    <p>Dashboard</p>
                </a>
                <a href="{{route('minhaempresa.fretes')}}" class="menu-item">
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3.78851 9.55261C4.08064 9.55261 4.32927 9.45037 4.53439 9.24588C4.73951 9.04138 4.84208 8.79307 4.84208 8.50095C4.84208 8.20882 4.73983 7.9602 4.53534 7.75507C4.33085 7.54995 4.08254 7.44739 3.79041 7.44739C3.49828 7.44739 3.24966 7.54963 3.04453 7.75412C2.83941 7.95862 2.73685 8.20693 2.73685 8.49905C2.73685 8.79118 2.8391 9.03981 3.04359 9.24493C3.24808 9.45005 3.49639 9.55261 3.78851 9.55261ZM7.99905 9.55261C8.29118 9.55261 8.5398 9.45037 8.74493 9.24588C8.95005 9.04138 9.05261 8.79307 9.05261 8.50095C9.05261 8.20882 8.95037 7.9602 8.74588 7.75507C8.54138 7.54995 8.29307 7.44739 8.00095 7.44739C7.70882 7.44739 7.46019 7.54963 7.25507 7.75412C7.04995 7.95862 6.94739 8.20693 6.94739 8.49905C6.94739 8.79118 7.04963 9.03981 7.25412 9.24493C7.45862 9.45005 7.70692 9.55261 7.99905 9.55261ZM12.2096 9.55261C12.5017 9.55261 12.7503 9.45037 12.9555 9.24588C13.1606 9.04138 13.2632 8.79307 13.2632 8.50095C13.2632 8.20882 13.1609 7.9602 12.9564 7.75507C12.7519 7.54995 12.5036 7.44739 12.2115 7.44739C11.9194 7.44739 11.6707 7.54963 11.4656 7.75412C11.2605 7.95862 11.1579 8.20693 11.1579 8.49905C11.1579 8.79118 11.2602 9.03981 11.4647 9.24493C11.6692 9.45005 11.9175 9.55261 12.2096 9.55261ZM8.00141 16.5C6.89494 16.5 5.85491 16.29 4.88132 15.8701C3.90772 15.4502 3.06082 14.8803 2.34064 14.1604C1.62044 13.4405 1.05028 12.594 0.63017 11.6209C0.210057 10.6477 0 9.60788 0 8.50141C0 7.39494 0.209966 6.35491 0.629897 5.38132C1.04983 4.40772 1.61972 3.56082 2.33959 2.84064C3.05946 2.12044 3.90598 1.55028 4.87915 1.13017C5.8523 0.710058 6.89212 0.5 7.99859 0.5C9.10506 0.5 10.1451 0.709966 11.1187 1.1299C12.0923 1.54983 12.9392 2.11972 13.6594 2.83959C14.3796 3.55946 14.9497 4.40598 15.3698 5.37915C15.7899 6.3523 16 7.39212 16 8.49859C16 9.60506 15.79 10.6451 15.3701 11.6187C14.9502 12.5923 14.3803 13.4392 13.6604 14.1594C12.9405 14.8796 12.094 15.4497 11.1209 15.8698C10.1477 16.2899 9.10788 16.5 8.00141 16.5ZM8 15.2369C9.88071 15.2369 11.4737 14.5842 12.779 13.279C14.0842 11.9737 14.7369 10.3807 14.7369 8.5C14.7369 6.61929 14.0842 5.02631 12.779 3.72104C11.4737 2.41577 9.88071 1.76314 8 1.76314C6.11929 1.76314 4.52631 2.41577 3.22104 3.72104C1.91577 5.02631 1.26314 6.61929 1.26314 8.5C1.26314 10.3807 1.91577 11.9737 3.22104 13.279C4.52631 14.5842 6.11929 15.2369 8 15.2369Z"
                            fill="white" />
                    </svg>
                    <p>Fretes</p>
                </a>
                <a href="{{route('minhaempresa.historico')}}" class="menu-item-active menu-item">
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.94388 16.5C5.90587 16.5 4.1297 15.8291 2.61537 14.4873C1.10105 13.1455 0.229256 11.4635 0 9.44118H1.44069C1.6784 11.0665 2.40992 12.414 3.63526 13.4837C4.86061 14.5534 6.29682 15.0883 7.94388 15.0883C9.77918 15.0883 11.336 14.449 12.6145 13.1706C13.8929 11.8922 14.5321 10.3353 14.5321 8.5C14.5321 6.6647 13.8929 5.10783 12.6145 3.8294C11.336 2.55096 9.77918 1.91175 7.94388 1.91175C6.91583 1.91175 5.95233 2.1401 5.05338 2.59681C4.15444 3.05351 3.38039 3.68187 2.73121 4.48187H5.19274V5.89362H0.414519V1.11537H1.82624V3.34526C2.59004 2.4439 3.50467 1.74436 4.57013 1.24661C5.63559 0.748872 6.76018 0.5 7.94388 0.5C9.05399 0.5 10.0941 0.709962 11.0642 1.12988C12.0344 1.54979 12.8802 2.12052 13.6018 2.84208C14.3233 3.56365 14.8941 4.4095 15.314 5.37964C15.7339 6.34977 15.9439 7.38989 15.9439 8.5C15.9439 9.61011 15.7339 10.6502 15.314 11.6204C14.8941 12.5905 14.3233 13.4364 13.6018 14.1579C12.8802 14.8795 12.0344 15.4502 11.0642 15.8701C10.0941 16.29 9.05399 16.5 7.94388 16.5ZM10.7692 12.29L7.26515 8.78598V3.7941H8.6769V8.21402L11.7611 11.2982L10.7692 12.29Z"
                            fill="white" />
                    </svg>
                    <p>Histórico de Fretes</p>
                </a>
                <a href="#" class="menu-item">
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.96924 16.5L5.64858 13.9348C5.42294 13.8592 5.19163 13.7534 4.95464 13.6174C4.71766 13.4814 4.50578 13.3356 4.319 13.1801L1.94329 14.1842L0 10.8158L2.05506 9.26276C2.03562 9.13752 2.02185 9.01175 2.01375 8.88543C2.00565 8.75912 2.00161 8.63334 2.00161 8.50811C2.00161 8.38826 2.00565 8.26653 2.01375 8.1429C2.02185 8.01928 2.03562 7.88406 2.05506 7.73724L0 6.1842L1.94329 2.83201L4.31089 3.82797C4.51387 3.6671 4.73061 3.51999 4.96111 3.38666C5.19162 3.25331 5.41808 3.14615 5.64048 3.06519L5.96924 0.5H9.85581L10.1765 3.07329C10.4291 3.16505 10.6577 3.2722 10.8623 3.39474C11.0669 3.51729 11.2734 3.66169 11.4818 3.82797L13.8818 2.83201L15.8251 6.1842L13.7376 7.76151C13.7678 7.89756 13.7843 8.02469 13.787 8.1429C13.7897 8.26112 13.791 8.38015 13.791 8.5C13.791 8.61444 13.7884 8.73077 13.783 8.84899C13.7776 8.96721 13.7581 9.10244 13.7246 9.25468L15.7959 10.8158L13.8526 14.1842L11.4818 13.172C11.2734 13.3383 11.0607 13.4854 10.8437 13.6133C10.6267 13.7413 10.4043 13.8457 10.1765 13.9267L9.85581 16.5H5.96924ZM7.92223 11.0263C8.62291 11.0263 9.21912 10.7804 9.71089 10.2887C10.2027 9.79688 10.4485 9.20066 10.4485 8.5C10.4485 7.79934 10.2027 7.20312 9.71089 6.71134C9.21912 6.21958 8.62291 5.9737 7.92223 5.9737C7.21294 5.9737 6.61456 6.21958 6.12711 6.71134C5.63967 7.20312 5.39595 7.79934 5.39595 8.5C5.39595 9.20066 5.63967 9.79688 6.12711 10.2887C6.61456 10.7804 7.21294 11.0263 7.92223 11.0263ZM7.92223 9.76316C7.57135 9.76316 7.27311 9.64035 7.02749 9.39474C6.78188 9.14913 6.65907 8.85088 6.65907 8.5C6.65907 8.14912 6.78188 7.85088 7.02749 7.60526C7.27311 7.35965 7.57135 7.23684 7.92223 7.23684C8.27311 7.23684 8.57135 7.35965 8.81697 7.60526C9.06258 7.85088 9.18539 8.14912 9.18539 8.5C9.18539 8.85088 9.06258 9.14913 8.81697 9.39474C8.57135 9.64035 8.27311 9.76316 7.92223 9.76316ZM7.07042 15.2369H8.72547L9.02832 12.981C9.458 12.8687 9.85071 12.7092 10.2064 12.5024C10.5622 12.2957 10.9052 12.0298 11.2356 11.7049L13.3279 12.5842L14.1571 11.1526L12.3303 9.77611C12.4005 9.55803 12.4483 9.34427 12.4737 9.13482C12.499 8.92538 12.5117 8.71377 12.5117 8.5C12.5117 8.28084 12.499 8.06923 12.4737 7.86518C12.4483 7.66114 12.4005 7.45277 12.3303 7.24008L14.1733 5.84736L13.3441 4.41578L11.2275 5.3081C10.9457 5.00688 10.6081 4.74075 10.2146 4.50972C9.82102 4.27867 9.42291 4.1151 9.02021 4.01902L8.75463 1.76314H7.08336L6.80484 4.01091C6.37514 4.1124 5.97837 4.26787 5.61454 4.47732C5.25071 4.68676 4.90361 4.95667 4.57325 5.28705L2.48093 4.41578L1.65177 5.84736L3.47041 7.20284C3.40023 7.40256 3.35111 7.61038 3.32304 7.82631C3.29497 8.04224 3.28093 8.26951 3.28093 8.50811C3.28093 8.72726 3.29497 8.94211 3.32304 9.15263C3.35111 9.36316 3.39753 9.57099 3.4623 9.77611L1.65177 11.1526L2.48093 12.5842L4.56515 11.7C4.88471 12.0282 5.22641 12.297 5.59025 12.5065C5.95408 12.7159 6.35624 12.8768 6.79673 12.9891L7.07042 15.2369Z"
                            fill="white" />
                    </svg>
                    <p>Configurações</p>
                </a>
                <a href="{{route('minhaempresa.sair')}}" class="menu-item">
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.70137 16.5C1.22595 16.5 0.823532 16.3353 0.494119 16.0059C0.164706 15.6765 0 15.2741 0 14.7986V2.20137C0 1.72595 0.164706 1.32353 0.494119 0.994119C0.823532 0.664706 1.22595 0.5 1.70137 0.5H8.00906V1.91175H1.70137C1.62896 1.91175 1.56258 1.94191 1.50224 2.00224C1.44191 2.06259 1.41175 2.12896 1.41175 2.20137V14.7986C1.41175 14.871 1.44191 14.9374 1.50224 14.9978C1.56258 15.0581 1.62896 15.0883 1.70137 15.0883H8.00906V16.5H1.70137ZM11.9819 12.5181L11.0046 11.4973L13.296 9.20586H5.26696V7.79414H13.296L11.0046 5.50272L11.9819 4.48194L16 8.5L11.9819 12.5181Z"
                            fill="white" />
                    </svg>
                    <p>Sair</p>
                </a>
            </aside>
        </div>

        <section class="my-fretes">
            <div class="my-fretes-top" style="height: 78px">
                <h3>Histórico de Fretes</h3>
                <div class="my-fretes-filter">
                    <img src="/assets/img/filter-my-fretes.svg" alt="">
                    <div class="select">
                        <div id="category-select">
                            <label for="options-view-button1">Ordenar por:</label>
                            <input type="checkbox" id="options-view-button1">

                            <div id="select-button">
                                <div id="selected-value">Selecione a categoria</div>

                                <div id="chevrons">
                                    <i class="ph ph-caret-down"></i>
                                    <i class="ph ph-caret-up"></i>
                                </div>
                            </div>
                        </div>

                        <ul id="options">
                            <li class="option">
                                <input class="form-input-radio" type="radio" name="category" value="so-cavalo" data-label="Só Cavalo">
                                <span class="label-selected-form">Só Cavalo</span>
                                <i class="ph ph-check"></i>
                            </li>
                            <li class="option">
                                <input class="form-input-radio" type="radio" name="category" value="cavalo-carreta" data-label="Cavalo/Carreta">
                                <span class="label-selected-form">Cavalo/Carreta</span>
                                <i class="ph ph-check"></i>
                            </li>
                            <li class="option">
                                <input class="form-input-radio" type="radio" name="category" value="truck" data-label="Truck">
                                <span class="label-selected-form">Truck</span>
                                <i class="ph ph-check"></i>
                            </li>
                            <li class="option">
                                <input class="form-input-radio" type="radio" name="category" value="bi-truck" data-label="Bi-Truck">
                                <span class="label-selected-form">Bi-Truck</span>
                                <i class="ph ph-check"></i>
                            </li>
                            <li class="option">
                                <input class="form-input-radio" type="radio" name="category" value="toco" data-label="Toco">
                                <span class="label-selected-form">Toco</span>
                                <i class="ph ph-check"></i>
                            </li>
                            <li class="option">
                                <input class="form-input-radio" type="radio" name="category" value="3-4" data-label="3/4">
                                <span class="label-selected-form">3/4</span>
                                <i class="ph ph-check"></i>
                            </li>
                            <li class="option">
                                <input class="form-input-radio" type="radio" name="category" value="VUC" data-label="VUC">
                                <span class="label-selected-form">VUC</span>
                                <i class="ph ph-check"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- <p>Tabs: Fretes em Análise | Fretes Aprovados | Fretes Em Andamento | Fretes Concluídos | Fretes Rejeitados | Fretes Cancelados</p> --}}


            <ul class="fretes-list">

                @if(count($fretesConcluidos) > 0)
                    <p style="margin-top: 32px">Fretes Concluídos:</p>
                    @foreach($fretesConcluidos as $frete)
                        <li class="fretes-list-item">
                            <div class="frete-wrapper">
                                <div class="frete-container-top">
                                    <div class="frete-container-top-info">
                                        <div class="frete-loja-container">
                                            <img class="frete-container-loja-img" src="/assets/img/frete-container-img.png"
                                                alt="">
                                        </div>
                                        <div class="frete-container-top-info-details">
                                            <img src="/assets/img/rectangle-frete.svg" alt="">
                                            <img class="rectangle-frete-img" src="/assets/img/rectangle-fretes-black.svg"
                                                alt="">
                                            <img src="/assets/img/circle-frete.svg" alt="">
                                        </div>
                                        <div class="frete-container-cities">
                                            <p>{{$frete->origem}}</p>
                                            <p>{{$frete->destino}}</p>
                                        </div>
                                    </div>
                                    <p>Caminhoneiro Atribuído: <br> <a href="#">{{$frete->caminhoneiroAtribuido->users->firstName.' '.$frete->caminhoneiroAtribuido->users->lastName}}</a></p>
                                </div>
                                <div class="frete-container-bottom">
                                    <div class="frete-container-bottom-type-product">
                                        <img src="/assets/img/material-block-black.svg" alt="">
                                        <p>{{$frete->produto}}</p>
                                    </div>
                                    <div class="frete-container-bottom-info">
                                        <div class="frete-bottom-stats">
                                            <p class="type-of-frete-vehicle distance-vehicle">819km</p>
                                            <p class="type-of-frete-vehicle">Carreta<span>+3</span></p>
                                            <p class="type-of-frete-vehicle">Carreta<span>+3</span></p>
                                        </div>
                                        <p class="frete-value frete-value-mobile">R$ {{$frete->preco}}</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="frete-value">R$ {{$frete->preco}}</p>
                                    <a href="{{route('fretes.show', $frete->id)}}" style="font-size: 14px;">Ver Frete</a>
                                </div>

                            </div>
                        </li>
                    @endforeach
                @else
                    <li><p>Você não possui fretes concluídos no momento.</p></li>
                @endif
            </ul>
            <ul class="fretes-list">

                @if(count($fretesCancelados) > 0)
                    <p style="margin-top: 32px">Fretes Cancelados:</p>
                    @foreach($fretesCancelados as $frete)
                        <li class="fretes-list-item">
                            <div class="frete-wrapper">
                                <div class="frete-container-top">
                                    <div class="frete-container-top-info">
                                        <div class="frete-loja-container">
                                            <img class="frete-container-loja-img" src="/assets/img/frete-container-img.png"
                                                alt="">
                                        </div>
                                        <div class="frete-container-top-info-details">
                                            <img src="/assets/img/rectangle-frete.svg" alt="">
                                            <img class="rectangle-frete-img" src="/assets/img/rectangle-fretes-black.svg"
                                                alt="">
                                            <img src="/assets/img/circle-frete.svg" alt="">
                                        </div>
                                        <div class="frete-container-cities">
                                            <p>{{$frete->origem}}</p>
                                            <p>{{$frete->destino}}</p>
                                        </div>
                                    </div>
                                    <p>Caminhoneiro Atribuído: <br> <a href="#">{{$frete->caminhoneiroAtribuido->users->firstName.' '.$frete->caminhoneiroAtribuido->users->lastName}}</a></p>
                                </div>
                                <div class="frete-container-bottom">
                                    <div class="frete-container-bottom-type-product">
                                        <img src="/assets/img/material-block-black.svg" alt="">
                                        <p>{{$frete->produto}}</p>
                                    </div>
                                    <div class="frete-container-bottom-info">
                                        <div class="frete-bottom-stats">
                                            <p class="type-of-frete-vehicle distance-vehicle">819km</p>
                                            <p class="type-of-frete-vehicle">Carreta<span>+3</span></p>
                                            <p class="type-of-frete-vehicle">Carreta<span>+3</span></p>
                                        </div>
                                        <p class="frete-value frete-value-mobile">R$ {{$frete->preco}}</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="frete-value">R$ {{$frete->preco}}</p>
                                    <a href="{{route('fretes.show', $frete->id)}}" style="font-size: 14px;">Ver Frete</a>
                                </div>

                            </div>
                        </li>
                    @endforeach
                @else
                    <li><p>Você não possui fretes cancelados no momento.</p></li>
                @endif
            </ul>
            <ul class="fretes-list">

                @if(count($fretesRejeitados) > 0)
                    <p style="margin-top: 32px">Fretes Concluídos:</p>
                    @foreach($fretesRejeitados as $frete)
                        <li class="fretes-list-item">
                            <div class="frete-wrapper">
                                <div class="frete-container-top">
                                    <div class="frete-container-top-info">
                                        <div class="frete-loja-container">
                                            <img class="frete-container-loja-img" src="/assets/img/frete-container-img.png"
                                                alt="">
                                        </div>
                                        <div class="frete-container-top-info-details">
                                            <img src="/assets/img/rectangle-frete.svg" alt="">
                                            <img class="rectangle-frete-img" src="/assets/img/rectangle-fretes-black.svg"
                                                alt="">
                                            <img src="/assets/img/circle-frete.svg" alt="">
                                        </div>
                                        <div class="frete-container-cities">
                                            <p>{{$frete->origem}}</p>
                                            <p>{{$frete->destino}}</p>
                                        </div>
                                    </div>
                                    <p>Caminhoneiro Atribuído: <br> <a href="#">{{$frete->caminhoneiroAtribuido->users->firstName.' '.$frete->caminhoneiroAtribuido->users->lastName}}</a></p>
                                </div>
                                <div class="frete-container-bottom">
                                    <div class="frete-container-bottom-type-product">
                                        <img src="/assets/img/material-block-black.svg" alt="">
                                        <p>{{$frete->produto}}</p>
                                    </div>
                                    <div class="frete-container-bottom-info">
                                        <div class="frete-bottom-stats">
                                            <p class="type-of-frete-vehicle distance-vehicle">819km</p>
                                            <p class="type-of-frete-vehicle">Carreta<span>+3</span></p>
                                            <p class="type-of-frete-vehicle">Carreta<span>+3</span></p>
                                        </div>
                                        <p class="frete-value frete-value-mobile">R$ {{$frete->preco}}</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="frete-value">R$ {{$frete->preco}}</p>
                                    <a href="{{route('fretes.show', $frete->id)}}" style="font-size: 14px;">Ver Frete</a>
                                </div>

                            </div>
                        </li>
                    @endforeach
                @else
                    <li><p>Você não possui fretes rejeitados no momento.</p></li>
                @endif
            </ul>
        </section>
    </div>
</main>

@endsection

@push('styles')
    <link rel="stylesheet" href="/assets/css/perfil-caminhoneiro.css">
    <link rel="stylesheet" href="/assets/css/header-fretes.css">

@endpush

@push('scripts')

    <script defer src="/assets/js/headcrumb-menu-opener.js"></script>
    <script defer src="/assets/js/mobile-navbar.js"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script defer src="/assets/js/select-input.js"></script>
    <script defer src="/assets/js/user-rate.js"></script>

@endpush
