<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Option</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" type="text/css" href="https://code.highcharts.com/css/stocktools/gui.css">
    
    <link rel="stylesheet" type="text/css" href="https://code.highcharts.com/css/annotations/popup.css">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <style>
        #container {
            height: 100% !important;
            width: 100% !important;
            border-radius: 5px;
        }

        text.highcharts-credits {
            display: none !important;
        }

        .header-chart .left {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .highcharts-bindings-wrapper {
            position: relative;
            height: 440px !important;
        }

        .highcharts-menu-wrapper {
            padding: 10px 3px;
            height: 100% !important;
            position: relative;
            left: -1.5px;
        }

        .progress-bar-chart {
            height: calc(100% - 495px);
        }

        g.highcharts-range-selector-buttons g.highcharts-label,
        .highcharts-range-input text {
            display: none;
        }

        #chart {
            padding: 0px;
        }

        .highcharts-bindings-wrapper ul,
        .highcharts-bindings-wrapper .highcharts-stocktools-toolbar li {
            background-color: transparent !important;
            border: none !important;
        }

        .highcharts-bindings-wrapper .highcharts-stocktools-toolbar li {
            margin-bottom: 3px;
        }

        .highcharts-bindings-wrapper li > button.highcharts-menu-item-btn {
            background-color: #0d0e15 !important;
            border: 1px solid #13131a !important;
            border-radius: 5px;
            color: #fff;
            filter: brightness(4);
            width: 40px !important;
            height: 40px !important;
        }

        .highcharts-bindings-wrapper li.highcharts-current > button.highcharts-menu-item-btn {
            background-color: #001d37 !important;
        }

        .highcharts-bindings-wrapper li > button.highcharts-submenu-item-arrow {
            background-color: transparent !important;
            width: 100%;
            background-position-y: calc(100% + 2px);
            background-position-x: calc(100% + 2px);
            background-size: 15px 15px;
            filter: brightness(4);
            transform: rotate(-90deg);
        }

        .highcharts-toggle-toolbar.highcharts-arrow-left {
            background-color: #0d0e15 !important;
            border: 1px solid #13131a !important;
            border-radius: 2px;
            color: #fff;
            filter: brightness(5);
            width: 11px;
            height: 11px;
        }

        .highcharts-bindings-wrapper li {
            width: 42px !important;
            height: 42px !important;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
        }

        .highcharts-bindings-wrapper li:hover {
            background-color: #026fd3 !important;
            border: 1px solid #026fd3;
        }

        .highcharts-bindings-wrapper li:hover > button.highcharts-menu-item-btn,
        .highcharts-bindings-wrapper li:hover .highcharts-toggle-toolbar.highcharts-arrow-left {
            background-color: transparent !important;
        }

        .highcharts-arrow-wrapper {
            display: none !important;
        }

        .highcharts-popup {
            border-radius: 5px;
            left: 50%;
            top: calc(50% - 75px);
            transform: translate(-50%, -50%);
            max-height: calc(100% - 260px);
        }

        #chart .highcharts-container {
            position: static !important;
        }

        #chart .header-chart {
            position: absolute;
            top: 0px;
            left: 0px;
            z-index: 2;
        }

        #chart .highcharts-popup.highcharts-annotation-toolbar {
            right: 0px !important;
            left: auto !important;
            top: 90px !important;
            font-size: 16px;
            font-weight: 500;
            color: #000;
        }

        #chart .highcharts-popup.highcharts-annotation-toolbar button {
            background-color: #f7f7f7;
            border-radius: 5px;
            background-size: 30px;
        }

        #chart .highcharts-popup.highcharts-annotation-toolbar button:hover {
            transition: .2s;
            background-color: #dddddd;
        }

        .highcharts-tab-item-content .highcharts-popup-rhs-col {
            color: #000;
        }

        g.highcharts-range-selector-buttons .highcharts-button rect {
            fill: #343854;
        }

        g.highcharts-range-selector-buttons .highcharts-button:hover rect {
            transition: .2s;
            fill: #595d7a;
        }

        g.highcharts-range-selector-buttons .highcharts-button text {
            color: #fff !important;
            fill: #fff !important;
            font-size: 12px !important;
            font-weight: 500 !important;
        }

        .buttons-options-chart, .buttons-zoom-chart {
            display: none;
        }

        @media (min-width: 600px) {
            .buttons-controls-chart {
                margin-bottom: 2rem;
            }
        }

        @media (min-width: 1150px) {
            .buttons-controls-chart {
                margin-bottom: 1rem;
            }
        }
        
        @media (max-width: 440px) and (max-height: 800px) {
            ul.highcharts-stocktools-toolbar.stocktools-toolbar {
                height: 300px !important;
                overflow-y: auto !important;
                width: 95px;
                border-radius: 5px;
            }
        }
        
        @media (max-width: 440px) and (max-height: 680px) {
            ul.highcharts-stocktools-toolbar.stocktools-toolbar {
                height: 250px !important;
            }
        }

        @media (max-width: 440px) and (max-height: 600px) {
            ul.highcharts-stocktools-toolbar.stocktools-toolbar {
                height: 160px !important;
            }
        }

        @media screen and (max-width: 600px) {
            #container {
                height: 400px;
            }
        }

        @media screen and (max-width: 500px) {
            #chart .highcharts-popup.highcharts-annotation-toolbar {
                font-size: 14px;
            }
            #chart .highcharts-popup {
                width: 98%;
            }
            .highcharts-tab-item-content .highcharts-popup-lhs-col {
                width: 40%;
            }
            .highcharts-tab-item-content .highcharts-popup-rhs-col {
                width: 60%;
                padding: 10px;
                font-size: 14px;
            }
            .highcharts-popup-rhs-col h3.highcharts-indicator-title {
                font-size: 1rem;
            }
            button.highcharts-indicator-list-item {
                padding: 10px 5px;
                font-size: 12px;
                font-weight: 500;
            }
            #chart .highcharts-popup.highcharts-annotation-toolbar {
                width: auto;
            }
        }

        @media screen and (max-width: 400px) {
            #chart .highcharts-popup.highcharts-annotation-toolbar {
                right: -25% !important;
            }
        }

        @media screen and (max-width: 330px) {
            #chart .highcharts-popup {
                min-width: auto;
            }
        }

        @media screen and (max-width: 320px) {
            #chart .highcharts-popup.highcharts-annotation-toolbar {
                right: -30% !important;
            }
        }
    </style>

    <script>
        window.Promise ||
            document.write(
                '<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"><\/script>'
            )
        window.Promise ||
            document.write(
                '<script src="https://cdn.jsdelivr.net/npm/eligrey-classlist-js-polyfill@1.2.20171210/classList.min.js"><\/script>'
            )
        window.Promise ||
            document.write(
                '<script src="https://cdn.jsdelivr.net/npm/findindex_polyfill_mdn"><\/script>'
            )
    </script>
</head>
<body>
    <header class="header-main">
        <div class="header-left">
            <a href="#" class="logo-header">
                <img src="{{ asset('img/h branco colorido.png') }}" alt="logo" style="height: 260px">
            </a>

            <button class="btn-fav-header" type="button">
                <i class="fa-solid fa-star"></i>
            </button>

            <button class="btn-menu-mobile" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <div class="header-right">
            <div class="dropdown-center exchange">
                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    @if($auth->account == 0)
                    <span class="title-drop">
                        Conta Demo
                    </span>

                    <i class="fa-solid fa-money-bill-1-wave"></i>
                    R$ {{ number_format($auth->balancefake/100, 2) }}

                    @else

                    <span class="title-drop">
                        Conta Real
                    </span>

                    <i class="fa-solid fa-money-bill-1-wave"></i>
                    R$ {{ number_format($auth->balance/100, 2) }}

                    @endif
                </button>

                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item {{ $auth->account == 0 ? 'active' : '' }}" href="">
                            <span>
                                <i class="fa-solid fa-money-bill-1-wave"></i>
                                Conta Demo
                            </span>
                            <span class="value">
                                R$ {{ number_format($auth->balancefake/100, 2) }}
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item {{ $auth->account == 1 ? 'active' : '' }}" href="">
                            <span>
                                <i class="fa-solid fa-money-bill-1-wave"></i>
                                Conta Real
                            </span>
                            <span class="value">
                                R$ {{ number_format($auth->balance/100, 2) }}
                            </span>
                        </a>
                    </li>
                    
                    
                </ul>
            </div>

            <div class="dropdown depositar">
                <button class="dropdown-toggle btn-depositar-header" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 4H16V3C16 2.20435 15.6839 1.44129 15.1213 0.87868C14.5587 0.316071 13.7956 0 13 0H3C2.20435 0 1.44129 0.316071 0.87868 0.87868C0.316071 1.44129 0 2.20435 0 3V15C0 15.7956 0.316071 16.5587 0.87868 17.1213C1.44129 17.6839 2.20435 18 3 18H17C17.7956 18 18.5587 17.6839 19.1213 17.1213C19.6839 16.5587 20 15.7956 20 15V7C20 6.20435 19.6839 5.44129 19.1213 4.87868C18.5587 4.31607 17.7956 4 17 4ZM3 2H13C13.2652 2 13.5196 2.10536 13.7071 2.29289C13.8946 2.48043 14 2.73478 14 3V4H3C2.73478 4 2.48043 3.89464 2.29289 3.70711C2.10536 3.51957 2 3.26522 2 3C2 2.73478 2.10536 2.48043 2.29289 2.29289C2.48043 2.10536 2.73478 2 3 2ZM18 12H17C16.7348 12 16.4804 11.8946 16.2929 11.7071C16.1054 11.5196 16 11.2652 16 11C16 10.7348 16.1054 10.4804 16.2929 10.2929C16.4804 10.1054 16.7348 10 17 10H18V12ZM18 8H17C16.2044 8 15.4413 8.31607 14.8787 8.87868C14.3161 9.44129 14 10.2044 14 11C14 11.7956 14.3161 12.5587 14.8787 13.1213C15.4413 13.6839 16.2044 14 17 14H18V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H3C2.73478 16 2.48043 15.8946 2.29289 15.7071C2.10536 15.5196 2 15.2652 2 15V5.83C2.32127 5.94302 2.65943 6.00051 3 6H17C17.2652 6 17.5196 6.10536 17.7071 6.29289C17.8946 6.48043 18 6.73478 18 7V8Z" fill="currentColor"></path>
                    </svg>

                    <span>Recarregar Conta</span>
                </button>

                <ul class="dropdown-menu dropdown-menu-end">
                    <p class="title">Recarga rápida da conta</p>

                    <span class="subtitle">Fazer um depósito para começar a ganhar</span>

                    <div class="select-payment">
                        <span>Forma de Pagamento</span>

                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="fastPayment">
                            <option value="0" selected>Pix</option>
                            <option value="1">Picpay</option>
                            <option value="2">Binance Pay</option>
                            <option value="3">Tether (USDT)</option>
                        </select>
                    </div>

                    <div class="value-payment">
                        <label for="valuePayment">Montante</label>
                        
                        <div>
                            <span class="addon-value">R$</span>
                            <input id="valuePayment" type="text" value="10">
                        </div>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkCodePromo" onchange="toggleCodePromo()">

                        <label class="form-check-label" for="checkCodePromo">
                            Tenho um código promocional
                        </label>
                    </div>

                    <div class="codePromo" id="codePromo">
                        <label for="codePromotional">Código promocional</label>
                        
                        <input type="text" id="codePromotional">
                    </div>

                    <button type="button" class="btn-fast-deposito">
                        Continuar e pagar
                        <span class="btn-value">R$ 100</span>
                    </button>
                </ul>
            </div>

            <div class="dropdown perfil">
                <button class="btn-perfil-header" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" style="background-image: url('https://img.freepik.com/psd-gratuitas/ilustracao-3d-de-avatar-ou-perfil-humano_23-2150671142.jpg?size=338&ext=jpg&ga=GA1.1.1546980028.1713830400&semt=ais');">
                </button>

                <div class="dropdown-menu dropdown-menu-end">
                    <div class="left-perfil">
                        <div class="top">
                            <div class="image-perfil" style="background-image: url('https://img.freepik.com/psd-gratuitas/ilustracao-3d-de-avatar-ou-perfil-humano_23-2150671142.jpg?size=338&ext=jpg&ga=GA1.1.1546980028.1713830400&semt=ais');"></div>

                            <div class="infos-perfil">
                                <p class="flag-name">
                                    <img src="{{ asset('img/flags/brazil.png') }}" class="country-flag" alt="Bandeira do País" width="20px">

                                    <span>{{ $auth->user }}</span>
                                </p>

                                <a href="#" class="level-user">
                                    <span>Plano Básico</span>
                                </a>

                                <div class="id-user">
                                    <p>
                                        <i class="fa-solid fa-user"></i>

                                        <span>
                                            
                                            <span class="blur-perfil">{{ $auth->code }}</span>
                                        </span>
                                    </p>

                                    <button type="button" id="btnBlurPerfil" class="btn-eye-perfil" title="Exibir/Ocultar dados">
                                        <i class="fa-solid fa-eye-slash"></i>
                                        <i class="fa-solid fa-eye" style="display: none;"></i>
                                    </button>
                                </div>

                                <p class="info-default">
                                    <i class="fa-solid fa-envelope"></i>
                                    <span class="blur-perfil">{{ $auth->email }}</span>
                                </p>

                                <p class="info-default">
                                    <i class="fa-solid fa-wallet"></i>
                                    <span>
                                        R$
                                        <span class="blur-perfil">{{ number_format($auth->balance/100, 2) }}</span>
                                    </span>
                                </p>

                                <p class="info-default">
                                    <i class="fa-solid fa-earth-americas"></i>
                                    <span class="blur-perfil">IP</span>
                                </p>
                            </div>
                        </div>

                        <div class="warning-user">

                            @if($auth->account == 0)
                            <p class="acc-demo">
                                Você está operando na conta demo.
                            </p>
                            @else

                            <p class="acc-real">
                                Você está operando na conta real.
                            </p>

                            @endif
                        </div>

                        <div class="area-estatiscas-perfil">
                            <div class="top-stats">
                                <span>Estatísticas de contas reais hoje:</span>

                                <button type="button" class="btn-reload">
                                    <i class="fa-solid fa-rotate"></i>
                                </button>
                            </div>

                            <p class="estatisticas-default">
                                <span>Negociações:</span>

                                <span class="blur-perfil">0</span>
                            </p>

                            <p class="estatisticas-default">
                                <span>Circulação comercial:</span>

                                <span>
                                    R$
                                    <span class="blur-perfil">0</span>
                                </span>
                            </p>

                            <p class="estatisticas-default">
                                <span>Circulação líquida:</span>

                                <span>
                                    R$
                                    <span class="blur-perfil">0</span>
                                </span>
                            </p>

                            <p class="estatisticas-default">
                                <span>Lucro comercial:</span>

                                <span>
                                    R$
                                    <span class="blur-perfil">0</span>
                                </span>
                            </p>

                            <a href="#" class="btnEstatisticasGlobal">
                                Estatísticas Total da Conta Real
                            </a>
                        </div>

                        <p class="status-info-perfil">
                            <span>Estado do e-mail:</span>

                            <span class="verification-not">
                                <!--
                                <i class="fa-regular fa-circle-check"></i>
                                Verificado -->

                                <i class="fa-solid fa-triangle-exclamation"></i>
                                Não verificado
                            </span>
                        </p>

                        <p class="status-info-perfil">
                            <span>Status da identidade:</span>

                            <span class="verification-not">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                                Não verificado
                            </span>
                        </p>
                    </div>

                    <div class="right-perfil">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-user"></i>
                                    Perfil
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-circle-dollar-to-slot"></i>
                                    Depositar 🔒
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-hand-holding-dollar"></i>
                                    Sacar 🔒
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-bell"></i>
                                    Notificações 🔒
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-headset"></i>
                                    Suporte 🔒
                                </a>
                            </li>
                            

                            <li>
                                <a class="btn-language-perfil" data-bs-toggle="collapse" href="#collapseLanguage" role="button" aria-expanded="false" aria-controls="collapseLanguage">
                                    <img src="{{ asset('img/flags/brazil.png') }}" alt="Language" width="15px">
                                    <span>Português</span>

                                    <i class="fa-solid fa-chevron-down"></i>
                                </a>
                                  
                                <div class="collapse" id="collapseLanguage">
                                    <ul>
                                        <li>
                                            <a href="#" class="option-language">
                                                <img src="{{ asset('img/flags/usa.png') }}" alt="Language" width="15px">
                                                <span>English</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="option-language">
                                                <img src="{{ asset('img/flags/spain.png') }}" alt="Language" width="15px">
                                                <span>Español</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="option-language">
                                                <img src="{{ asset('img/flags/france.png') }}" alt="Language" width="15px">
                                                <span>Français</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="option-language">
                                                <img src="{{ asset('img/flags/germany.png') }}" alt="Language" width="15px">
                                                <span>Deutsche</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="option-language">
                                                <img src="{{ asset('img/flags/brazil.png') }}" alt="Language" width="15px">
                                                <span>Português</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                            <li>
                                <a href="{{ route('auth.logout') }}">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    Sair
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="area-aside-main">
        <aside class="aside-main">
            <nav class="nav-aside">
                <a href="#" class="item-nav-aside {{ url()->current() == route('auth.login') ? 'active' : '' }}">
                    <i class="fa-solid fa-chart-area"></i>
                    <span>Trade</span>
                </a>
            
    
                <a href="#" class="item-nav-aside {{ url()->current() == route('auth.login') ? 'active' : '' }}">
                    <i class="fa-solid fa-user"></i>
                    <span>Conta</span>
                </a>

                <!--

                <a href="#" class="item-nav-aside">
                    <i class="fa-solid fa-circle-question"></i>
                    <span>Suporte</span>
                </a>
    
                <a href="#" class="item-nav-aside">
                    <i class="fa-solid fa-trophy"></i>
                    <span>Torneios</span>
                </a>
    
                <a href="#" class="item-nav-aside">
                    <i class="fa-solid fa-coins"></i>
                    <span>Mercado</span>
                </a>
    
                <div class="dropdown dropend more">
                    <a href="#" class="item-nav-aside" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <i class="fa-solid fa-ellipsis"></i>
                        <span>Mais</span>
                    </a>
    
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">
                                <i class="fa-solid fa-chart-pie"></i>
                                Análise
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-solid fa-ranking-star"></i>
                                TOP
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-regular fa-circle-dot"></i>
                                Sinais
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                -->
            </nav>
    
            <div class="aside-footer">
                <div class="buttons-settings">
                    <button type="button">
                        <i class="fa-solid fa-expand"></i>
                    </button>
    
                    <button type="button">
                        <i class="fa-solid fa-gear"></i>
                    </button>
    
                    <button type="button">
                        <i class="fa-solid fa-volume-high"></i>
                    </button>
    
                    <button type="button">
                        <i class="fa-solid fa-right-long"></i>
                    </button>
                </div>
    
                <button class="btn-social" type="button">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.1667 8.37424C15.1667 7.19296 16.1244 6.23535 17.3056 6.23535H25.8612C27.0425 6.23535 28.0001 7.19296 28.0001 8.37424V16.9298C28.0001 18.1111 27.0425 19.0687 25.8612 19.0687H17.3056C16.1244 19.0687 15.1667 18.1111 15.1667 16.9298V8.37424Z" fill="white"></path><path d="M21.5833 17.9991C24.5365 17.9991 26.9305 15.6051 26.9305 12.6519C26.9305 9.69872 24.5365 7.30469 21.5833 7.30469C18.6301 7.30469 16.2361 9.69872 16.2361 12.6519C16.2361 15.6051 18.6301 17.9991 21.5833 17.9991Z" fill="#026FD3"></path><path d="M24.252 10.4402C24.2978 10.1326 24.0163 9.88973 23.753 10.0098L18.5091 12.4019C18.3203 12.488 18.3341 12.7852 18.5299 12.8499L19.6113 13.2077C19.8178 13.276 20.0412 13.2407 20.2215 13.1113L22.6596 11.3613C22.7331 11.3085 22.8133 11.4171 22.7505 11.4844L20.9954 13.3643C20.8252 13.5467 20.859 13.8557 21.0638 13.9891L23.0287 15.2693C23.2491 15.4129 23.5326 15.2687 23.5738 14.992L24.252 10.4402Z" fill="white"></path><path d="M11.0834 2.73535H2.91675C1.95025 2.73535 1.16675 3.51885 1.16675 4.48535V12.652C1.16675 13.6185 1.95025 14.402 2.91675 14.402H11.0834C12.0499 14.402 12.8334 13.6185 12.8334 12.652V4.48535C12.8334 3.51885 12.0499 2.73535 11.0834 2.73535Z" fill="#026FD3"></path><path d="M9.26953 10.255L9.5293 8.56885H7.91146V7.4751C7.91146 7.01481 8.13704 6.56364 8.86165 6.56364H9.59766V5.12809C9.59766 5.12809 8.93001 5.01416 8.29199 5.01416C6.95898 5.01416 6.08854 5.8208 6.08854 7.28369V8.56885H4.60742V10.255H6.08854V14.4022H7.91146V10.255H9.26953Z" fill="white"></path><path d="M7 15.0688C7 13.412 8.34315 12.0688 10 12.0688H18C19.6569 12.0688 21 13.412 21 15.0688V23.0688C21 24.7257 19.6569 26.0688 18 26.0688H10C8.34315 26.0688 7 24.7257 7 23.0688V15.0688Z" fill="#F14D5B"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M12 14.0688H16C17.6569 14.0688 19 15.412 19 17.0688V21.0688C19 22.7257 17.6569 24.0688 16 24.0688H12C10.3431 24.0688 9 22.7257 9 21.0688V17.0688C9 15.412 10.3431 14.0688 12 14.0688ZM12 15.0688C10.8954 15.0688 10 15.9643 10 17.0688V21.0688C10 22.1734 10.8954 23.0688 12 23.0688H16C17.1046 23.0688 18 22.1734 18 21.0688V17.0688C18 15.9643 17.1046 15.0688 16 15.0688H12ZM14 21.5688C12.6193 21.5688 11.5 20.4496 11.5 19.0688C11.5 17.6881 12.6193 16.5688 14 16.5688C15.3807 16.5688 16.5 17.6881 16.5 19.0688C16.5 20.4496 15.3807 21.5688 14 21.5688ZM14 20.5688C14.8284 20.5688 15.5 19.8973 15.5 19.0688C15.5 18.2404 14.8284 17.5688 14 17.5688C13.1716 17.5688 12.5 18.2404 12.5 19.0688C12.5 19.8973 13.1716 20.5688 14 20.5688ZM16.5 17.0688C16.2239 17.0688 16 16.845 16 16.5688C16 16.2927 16.2239 16.0688 16.5 16.0688C16.7761 16.0688 17 16.2927 17 16.5688C17 16.845 16.7761 17.0688 16.5 17.0688Z" fill="white">
                        </path>
                    </svg>
    
                    <span>Junte-se a nós</span>
                </button>
    
                <button class="btn-ajuda" type="button">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>Ajuda</span>
                </button>
            </div>
        </aside>
    </div>

    <main class="{{ request()->is('profile/user') ? 'main-content dashboard' : 'main-content' }}">
        @yield('main')
    </main>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel"></div>

    <div class="collapse" id="collapseOperacoes"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script src="https://code.highcharts.com/stock/highstock.js"></script>

    <script src="https://code.highcharts.com/stock/indicators/indicators-all.js"></script>
    <script src="https://code.highcharts.com/stock/modules/drag-panes.js"></script>

    <script src="https://code.highcharts.com/modules/annotations-advanced.js"></script>
    <script src="https://code.highcharts.com/modules/price-indicator.js"></script>
    <script src="https://code.highcharts.com/modules/full-screen.js"></script>

    <script src="https://code.highcharts.com/modules/stock-tools.js"></script>

    <script src="https://code.highcharts.com/stock/modules/heikinashi.js"></script>
    <script src="https://code.highcharts.com/stock/modules/hollowcandlestick.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
</body>
</html>