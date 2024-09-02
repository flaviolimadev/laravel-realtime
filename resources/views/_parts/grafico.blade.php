
<div class="page-content">
    <div class="body-chart">
        <div id="chart">
        </div>
        
        <div class="header-chart" id="header-chart-0">
            <div class="left">
                <div class="dropdown">
                    <button class="dropdown-toggle btn-select-chart" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <i class="fa-solid fa-plus"></i>
                    </button>
    
                    <div class="dropdown-menu">
                        <div class="filter-dropdown">
                            <button type="button" class="btn-search">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
    
                            <input type="text" placeholder="Procurar">
    
                            <div class="btns-filter">
                                <button type="button" class="active">Moedas</button>
    
                                <button type="button">Cripto</button>
    
                                <button type="button">Matérias-primas</button>
    
                                <button type="button">Ações</button>
                            </div>
                        </div>
    
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>
                                            <a href="#">Ativos</a>
                                        </th>
                                        <th>
                                            <a href="#">Mudanças (24hrs)</a>
                                        </th>
                                        <th>
                                            <a href="#">Rev. de 1 min</a>
                                        </th>
                                        <th>
                                            <a href="#">A partir de 5 min</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
    
                                    @foreach([] as $att)
                                    <tr>
                                        <td>
                                            <a href="{{ route('index', ['ativo' => $att->ativo]) }}">
                                                <i class="fa-solid fa-coins"></i>
                                                <span>{{ $att->ativo }}</span>
                                            </a>
                                        </td>
    
                                        <td class="up">
                                            <i class="fa-solid fa-arrow-up"></i>
                                            0%
                                        </td>
    
                                        <td>{{ $att->payoutCompra }}%</td>
    
                                        <td>
                                            {{ $att->payoutVenda }}%
                                            <a href="#">
                                                <i class="fa-regular fa-star" style="display: none;"></i>
                                                <i class="fa-solid fa-star" style="display: inline-block;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
    
                                
                                </tbody>    
                               
                            </table>
                        </div>
                    </div>   
                </div>
    
                <button type="button" class="btn-operacoes-mobile" data-bs-toggle="collapse" data-bs-target="#collapseOperacoes" aria-expanded="false" aria-controls="collapseOperacoes">
                    <i class="fa-solid fa-briefcase"></i>
    
                    <span class="tag close">
                        <i class="fa-solid fa-xmark"></i>
                    </span>
    
                    <span class="tag qtd-ops">7</span>
                </button>
                
                <div id="stocktools-container">
                </div>
            </div>
            
            <div class="right">
                <div class="tabs-chart">
                    
                    @foreach([] as $att)
                    
                    <button href="#" type="button" class="btn-tab-chart 
                    {{ $att->ativo == $ativoVez->ativo ? 'active' : '' }}" onclick="reload('{{$att->ativo}}')">
                        <i class="fa-solid fa-coins"></i>
    
                        <div class="texts">
                            <p>{{ $att->ativo }}</p>
                            <span>{{ $att->payoutCompra }}%</span>
                        </div>
    
                        <div class="actions">
                            <a class="btn-closed" href="{{ route('session.removeItem', ['ativo' => $att]) }}">
                                <i class="fa-solid fa-xmark"></i>
                            </a>
                            
                            <a class="btn-fixar" href="{{ route('session.moveToFirst', ['ativo' => $att]) }}">
                                <i class="fa-solid fa-thumbtack"></i>
                            </a>
                        </div>
                    </button>
                    @endforeach
    
                    
                    
                </div>
    
                <div class="server-time-chart">
                    <span class="time" id="relogio"></span>
    
                    <span class="type-time">UTC</span>
                </div>
    
                <button type="button" class="btn-info-chart">
                    <div class="circle-info">
                        <i class="fa-solid fa-info"></i>
                    </div>
    
                    <span>Informação do par</span>
                </button>
            </div>
        </div>

        <div class="controls-chart" id="controls-chart-0">
            <div class="buttons-options-chart">
                <div class="dropdown dropup type-chart">
                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" title="Tipos de gráfico">
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon line-icon injected-svg" viewBox="0 0 40 35" width="40" height="35" data-src="/themes/cabinet/svg/icons/chart-types/line.svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="img">
                            <path d="M.22 16.28L4.4 11.6a.69.69 0 011.13-.06c1.2 1.12 2.21 2 3.4 3.16.23.23.33.17.52 0L18.2 4.54a.68.68 0 011.07 0c1.81 1.37 3.21 2.31 5 3.59.81.6 1.64 1.18 2.46 1.77.17.12.27.13.43 0L38.19.27c.24-.21.42-.16.55 0l1.08 1.23a.6.6 0 01.16.22.26.26 0 010 .24.24.24 0 01-.06.08c-1 .87-2.06 1.74-3.08 2.62l-9.38 8.12a.77.77 0 01-.88 0c-2.41-1.84-4.75-3.47-7.21-5.24-.28-.2-.41-.19-.63.07-3 3.54-5.92 6.88-9 10.39a.58.58 0 01-.91 0c-.91-.87-3-2.9-3.41-3.31-.21-.21-.33-.24-.55 0C3.9 15.8 3 16.81 2 17.9c-.19.21-.33.21-.52 0-.48-.37-.82-.7-1.27-1.12-.21-.19-.11-.36.01-.5zm.15 16.19h39.35a.19.19 0 01.2.2v2c0 .18-.08.25-.29.25H.45c-.29 0-.37-.07-.36-.37v-1.77a.27.27 0 01.28-.31z"></path><path d="M.24 30.07A.14.14 0 01.09 30v-7c0-.29 0-.28.35-.64C2 21 3.43 19.16 5 17.73c.19-.17.29-.15.49 0A46.59 46.59 0 009 21.05a.62.62 0 00.8 0c2.73-2.66 5.59-6 9.18-10.27.2-.19.32-.2.57 0 2.4 1.76 4.67 3.39 7.18 5a.43.43 0 00.57 0c2.06-1.64 1.94-1.5 3.79-3.07 3.69-3.25 6-5.17 8.41-7.32.35-.21.44 0 .44.11v24.39c0 .09-.09.17-.22.17H.24z"></path>
                        </svg>
                    </button>
    
                    <ul class="dropdown-menu">
                        <div class="top">
                            <p>Tipos de gráficos</p>
    
                            <div>
                                <li>
                                    <button type="button" class="dropdown-item active">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon line-icon injected-svg" viewBox="0 0 40 35" width="40" height="35" data-src="/themes/cabinet/svg/icons/chart-types/line.svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="img">
                                            <path d="M.22 16.28L4.4 11.6a.69.69 0 011.13-.06c1.2 1.12 2.21 2 3.4 3.16.23.23.33.17.52 0L18.2 4.54a.68.68 0 011.07 0c1.81 1.37 3.21 2.31 5 3.59.81.6 1.64 1.18 2.46 1.77.17.12.27.13.43 0L38.19.27c.24-.21.42-.16.55 0l1.08 1.23a.6.6 0 01.16.22.26.26 0 010 .24.24.24 0 01-.06.08c-1 .87-2.06 1.74-3.08 2.62l-9.38 8.12a.77.77 0 01-.88 0c-2.41-1.84-4.75-3.47-7.21-5.24-.28-.2-.41-.19-.63.07-3 3.54-5.92 6.88-9 10.39a.58.58 0 01-.91 0c-.91-.87-3-2.9-3.41-3.31-.21-.21-.33-.24-.55 0C3.9 15.8 3 16.81 2 17.9c-.19.21-.33.21-.52 0-.48-.37-.82-.7-1.27-1.12-.21-.19-.11-.36.01-.5zm.15 16.19h39.35a.19.19 0 01.2.2v2c0 .18-.08.25-.29.25H.45c-.29 0-.37-.07-.36-.37v-1.77a.27.27 0 01.28-.31z"></path><path d="M.24 30.07A.14.14 0 01.09 30v-7c0-.29 0-.28.35-.64C2 21 3.43 19.16 5 17.73c.19-.17.29-.15.49 0A46.59 46.59 0 009 21.05a.62.62 0 00.8 0c2.73-2.66 5.59-6 9.18-10.27.2-.19.32-.2.57 0 2.4 1.76 4.67 3.39 7.18 5a.43.43 0 00.57 0c2.06-1.64 1.94-1.5 3.79-3.07 3.69-3.25 6-5.17 8.41-7.32.35-.21.44 0 .44.11v24.39c0 .09-.09.17-.22.17H.24z"></path>
                                        </svg>
                                        Linha
                                    </button>
                                </li>                                   
    
                                <li>
                                    <button type="button" class="dropdown-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon bars-icon injected-svg" viewBox="0 0 500.1 435.1" width="40" height="35" data-src="/themes/cabinet/svg/icons/chart-types/bars.svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="img">
                                            <path d="M2.4 405h494.8c1.6 0 2.8 1.3 2.8 2.8 0 8.1-.1 16 .1 24.3 0 2.2-1.3 2.9-3.5 2.9-163.7 0-328.4 0-492.1.1-3.7 0-4.4-.6-4.4-4.6-.1-7.7-.1-15.4-.1-23.1 0-1.3 1.1-2.4 2.4-2.4zM423.9 0c1.7 0 3.1 1.4 3.1 3.1 0 103.8 0 207.6-.1 311.4 0 4.5 1 5.9 5.6 5.7 8.6-.4 17.3 0 26-.2 3.2-.1 3.5.9 3.5 5 .1 7.8-.1 14.2 0 20.8 0 3.4-.2 4.3-3 4.3-19.7-.1-39.3-.2-59 0-3.7 0-3-2-3-4.1v-80.5c0-26.7-.1-53.3.1-80 0-3.7-.8-4.8-4.6-4.6-9.3.3-18.7 0-28 .2-3.2.1-3.5-.9-3.5-4.8.1-6.9-.1-13.1 0-20.8 0-3.6.4-4.6 3.5-4.5 9.3.2 18.7-.1 28 .2 3.8.1 4.6-.9 4.6-4.6C397 98.7 397 50.8 397 3c0-1.7 1.3-3 3-3h23.9zM104 217.5c0 24 .1 48-.1 72 0 3.7.8 4.8 4.6 4.6 9.3-.3 18.7 0 28-.2 2.8-.1 3.6.7 3.6 3.6v23c0 2.8-.7 3.6-3.6 3.6-9.7-.2-19.3 0-29-.1-3 0-3.6.2-3.6 3.6v11.6c0 2.2-1 3-3.1 3H78.5c-3.5 0-4.5-1.2-4.5-3.7v-12.4c-.1-36.2-.1-72.3 0-108.5 0-3.7-.8-4.7-4.6-4.6-9.3.3-18.7 0-28 .2-2.8.1-3.6-.7-3.6-3.6v-23c0-2.8.7-3.6 3.6-3.6 9.7.2 19.3 0 29 .1 2.8.1 3.6-.7 3.6-3.6-.2-11.7 0-23.3-.1-35 0-2.8.7-3.6 3.6-3.6H100c3.3 0 4 .8 4 4.1-.2 24.1 0 48.3 0 72.5zM244 187.3c0 21.5-.1 43 .1 64.5 0 3.5-.8 4.5-4.4 4.3-7-.3-14-.3-21 0-4 .2-4.8-1-4.8-4.9.1-58.5.1-117 .1-175.5 0-6.8.1-13.7-.1-20.5-.1-2.6.7-3.4 3.3-3.3 7.8.2 15.7.2 23.5 0 2.6-.1 3.4.7 3.3 3.3-.2 9.8 0 19.7-.1 29.5 0 2.6.7 3.4 3.3 3.3 9.8-.2 19.7 0 29.5-.1 2.6 0 3.4.7 3.3 3.3v23.5c0 2.6-.7 3.3-3.3 3.3-9.7-.1-19.3.1-29-.1-3.1-.1-3.8.8-3.8 3.9.2 21.8.1 43.6.1 65.5z"></path>
                                        </svg>
                                        Barras
                                    </button>
                                </li>
    
                                <li>
                                    <button type="button" class="dropdown-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon heiken-ashi-icon injected-svg" viewBox="0 0 500.2 415.2" width="40" height="35" data-src="/themes/cabinet/svg/icons/chart-types/heiken-ashi.svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="img">
                                            <path d="M3.4 385.1h494.5c1.2 0 2.2 1 2.2 2.2 0 8.4-.1 16.9.1 25.3 0 2.2-1.1 2.5-2.8 2.5-163.7 0-329.1 0-492.8.1-3.7 0-4.7-.8-4.6-4.6.3-7.4.2-14.8.1-22.2 0-1.8 1.5-3.3 3.3-3.3zM46.1 79.6c0-25 .1-50-.1-75 0-3.7.9-4.6 4.6-4.6 27 .2 54 .2 81 0 3.7 0 4.6.9 4.6 4.6-.1 50-.1 100 0 150 0 3.7-.6 4.6-4.6 4.6h-21.4c-3.3 0-4.1.7-4.1 3.9.1 32.8 0 65.7.2 98.5 0 4.5-.2 5.5-4.8 5.5H80.2c-3.3.1-4.1-.9-4.1-4.1.1-32.8 0-65.7.2-98.5 0-4.5-1.1-5.5-5.6-5.4-7 .2-13.6 0-20.5 0-3.3 0-4.1-.9-4.1-4.1.1-25.1 0-50.2 0-75.4zM295.1 117.6c0 24-.1 48 .1 72 0 3.7-.8 4.6-4.6 4.6h-21.5c-3.3 0-4 .6-4 3.9.1 31 0 62 .2 93 0 4.1-.8 5.1-5.1 5.1h-21c-3.3.1-4.1-.8-4.1-4.1.1-31 0-62 .2-93 0-4.2-1-4.9-5.2-4.9h-20.4c-3.8 0-4.6-.9-4.6-4.6.2-35 .1-70 .1-105 0-13.2.1-26.3-.1-39.5 0-3.3.8-4.1 4.1-4.1 27.3.1 54.7.1 82 0 3.3 0 4.1.8 4.1 4.1-.3 24.2-.2 48.3-.2 72.5zM364.1 163.1c0-22.5.1-45-.1-67.5 0-3.7.8-4.6 4.6-4.6 27 .2 54 .2 81 0 3.7 0 4.6.8 4.6 4.6-.1 45-.1 90 0 135 0 3.7-.7 4.6-4.5 4.5-7.3 0-14.3.1-21.6 0-3.3 0-4.1.7-4 4 .1 28 0 56 .2 84 0 4.1-.8 5.1-5.1 5-7 0-13.9 0-21 .1-3.3.1-4.1-.8-4.1-4.1.1-28 0-56 .2-84 0-4.1-.9-5-5.1-5h-21c-3.3 0-4.1-.8-4.1-4 .1-22.7 0-45.3 0-68z"></path>
                                        </svg>
                                        Heiken Ashi
                                    </button>
                                </li>
    
                                <li>
                                    <button type="button" class="dropdown-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon candles-icon injected-svg" viewBox="0 0 500.1 435.1" width="55" height="35" data-src="/themes/cabinet/svg/icons/chart-types/candles.svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="img">
                                            <path d="M2.8 405H499c.6 0 1.1.5 1.1 1.1v26.4c0 2.2-.2 2.4-2.5 2.5h-2c-163.7 0-327.3 0-491 .1-3.7 0-4.7-.8-4.6-4.6.3-7.6.1-15.2.1-22.8 0-1.5 1.2-2.7 2.7-2.7zM425.1 1.8c0 11.9.1 23.8-.1 35.7 0 2 1.6 3.6 3.6 3.6 7.7-.2 15.3.1 23-.1 2.8-.1 3.6.8 3.6 3.6-.1 79.7-.1 159.3 0 239 0 2.8-.7 3.7-3.6 3.6-7.5-.2-15 .1-22.5-.1-3.3-.1-4.1.8-4.1 4.1.2 17.3 0 34.7.2 52 0 3.3-.8 4-4.2 4.1-7.2.1-14.5 0-21.9 0-3.3 0-4.1-.8-4.1-4.1.2-17.3 0-34.7.2-52 0-3.3-.8-4.2-4.1-4.1-7.5.2-15-.1-22.5.1-2.9.1-3.4-.7-3.4-3.6 0-5.1-.1-8.3-.1-12.5 0-75 0-150-.1-225 0-4.1.9-5.4 5.1-5.1 7.1.4 14.3 0 21.5.2 2 .1 3.6-1.5 3.6-3.5-.1-11.9-.1-23.8-.1-35.7 0-1 .8-1.9 1.9-1.9h26.3c1-.1 1.8.7 1.8 1.7zM199.1 164c0-18.3.1-36.7-.1-55 0-3.2.7-4.2 4.1-4.1 7.5.3 15 0 22.5.1 2.8.1 3.7-.7 3.6-3.6-.2-7.7.1-15.3-.1-23-.1-3.1.8-3.6 4.4-3.6 7.9 0 14.8.1 22.1 0 2.9 0 3.7.4 3.7 3-.1 7.8.1 15.7-.1 23.5-.1 2.8.7 3.7 3.6 3.6 7.7-.2 15.3.1 23-.1 2 0 3.6 1.5 3.6 3.5-.1 37-.1 74 0 111 0 2.8-.7 3.7-3.5 3.6-7.5-.2-15 .1-22.5-.1-3.2-.1-4.1.8-4.1 4.1.2 17.3 0 34.7.2 52 0 4-1.1 3.8-6.7 3.9-5.6.1-10.9 0-16.5 0s-7 .3-6.9-3.8c.2-17.3 0-34.7.2-52 0-3.2-.8-4.2-4.1-4.1-7.3.3-14.7-.1-22 .2-3.3.1-4.1-.8-4.1-4.1-.2-18.3-.3-36.7-.3-55zM44.1 228c0-18.3.1-36.7-.1-55 0-3.2.8-4.2 4.1-4.1 7.5.3 15 0 22.5.1 2.8.1 3.6-.7 3.6-3.6-.2-9.7 0-19.3-.1-29-.1-3.2 1-3.5 4.9-3.5h20.7c3.6 0 4.6.4 4.5 3.5-.2 9.7 0 19.3-.1 29 0 2 1.6 3.6 3.6 3.6 7.7-.2 15.3.1 23-.1 2.8-.1 3.6.8 3.6 3.6-.1 37-.1 74 0 111 0 2.8-.7 3.7-3.6 3.6-7.7-.2-15.3.1-23-.1-2-.1-3.6 1.6-3.6 3.5.1 15.5 0 31 .1 46.5 0 3.5-.9 4-5 4-6.7.1-13.3 0-20.1-.1-4 0-5-.2-5-3.5.1-15.5 0-31 .1-46.5 0-3.3-.8-4.2-4.1-4.1-7.3.3-14.7-.1-22 .2-3.3.1-4.1-.8-4.1-4.1.2-18.2.1-36.6.1-54.9z"></path>
                                        </svg>
                                        Barras Japonesas
                                    </button>
                                </li>
                            </div>
                        </div>
    
                        <p>Definições</p>
    
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="switchDefinicao1" checked>
                            <label class="form-check-label" for="switchDefinicao1">Área de exposição</label>
                        </div>
    
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="switchDefinicao2" checked>
                            <label class="form-check-label" for="switchDefinicao2">Ativar o autoscroll</label>
                        </div>
                    </ul>
                </div>
    
                <div class="dropdown dropup indicadores">
                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" title="Indicadores">
                        <i class="fa-solid fa-sliders"></i>
                    </button>
    
                    <ul class="dropdown-menu">
                        <div class="itens-indicadores">
                            <li>
                                <button type="button">
                                    <a href="#">
                                        <i class="fa-regular fa-star" style="display: inline-block;"></i>
                                        <i class="fa-solid fa-star" style="display: none;"></i>
                                    </a>
                                    
                                    <span>Oscilador Acelerador</span>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <a href="#">
                                        <i class="fa-regular fa-star" style="display: inline-block;"></i>
                                        <i class="fa-solid fa-star" style="display: none;"></i>
                                    </a>
    
                                    <span>Largura das Bandas de Bollinger</span>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <a href="#">
                                        <i class="fa-regular fa-star" style="display: inline-block;"></i>
                                        <i class="fa-solid fa-star" style="display: none;"></i>
                                    </a>
    
                                    <span>Ciclo de Tendências Schaff</span>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <a href="#">
                                        <i class="fa-regular fa-star" style="display: inline-block;"></i>
                                        <i class="fa-solid fa-star" style="display: none;"></i>
                                    </a>
                                    
                                    <span>Oscilador Acelerador</span>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <a href="#">
                                        <i class="fa-regular fa-star" style="display: inline-block;"></i>
                                        <i class="fa-solid fa-star" style="display: none;"></i>
                                    </a>
    
                                    <span>Largura das Bandas de Bollinger</span>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <a href="#">
                                        <i class="fa-regular fa-star" style="display: inline-block;"></i>
                                        <i class="fa-solid fa-star" style="display: none;"></i>
                                    </a>
    
                                    <span>Ciclo de Tendências Schaff</span>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <a href="#">
                                        <i class="fa-regular fa-star" style="display: inline-block;"></i>
                                        <i class="fa-solid fa-star" style="display: none;"></i>
                                    </a>
                                    
                                    <span>Oscilador Acelerador</span>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <a href="#">
                                        <i class="fa-regular fa-star" style="display: inline-block;"></i>
                                        <i class="fa-solid fa-star" style="display: none;"></i>
                                    </a>
    
                                    <span>Largura das Bandas de Bollinger</span>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <a href="#">
                                        <i class="fa-regular fa-star" style="display: inline-block;"></i>
                                        <i class="fa-solid fa-star" style="display: none;"></i>
                                    </a>
    
                                    <span>Ciclo de Tendências Schaff</span>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <a href="#">
                                        <i class="fa-regular fa-star" style="display: inline-block;"></i>
                                        <i class="fa-solid fa-star" style="display: none;"></i>
                                    </a>
                                    
                                    <span>Oscilador Acelerador</span>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <a href="#">
                                        <i class="fa-regular fa-star" style="display: inline-block;"></i>
                                        <i class="fa-solid fa-star" style="display: none;"></i>
                                    </a>
    
                                    <span>Largura das Bandas de Bollinger</span>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <a href="#">
                                        <i class="fa-regular fa-star" style="display: inline-block;"></i>
                                        <i class="fa-solid fa-star" style="display: none;"></i>
                                    </a>
    
                                    <span>Ciclo de Tendências Schaff</span>
                                </button>
                            </li>
                        </div>
                    </ul>
                </div>
    
                <div class="dropdown dropup graficos">
                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" title="Gráficos">
                        <i class="fa-solid fa-paintbrush"></i>
                    </button>
    
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 225 45" height="16" width="16">
                                    <path d="M58.2 30.7V15.3h108.4v15.4H58.2zM0 22.6C0 10.1 10.1 0 22.5 0 35 0 45.1 10.2 45 22.7 44.9 34.9 35 44.9 22.7 45 10.2 45.1 0 35 0 22.6zm225-.3c.1 12.5-10 22.6-22.5 22.6-12.4.1-22.5-10.1-22.5-22.5C180 10.2 190 .1 202.2 0c12.5-.1 22.7 9.9 22.8 22.3z"></path>
                                </svg>
                                Linha Horizontal
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44.99 225.08" height="16" width="16">
                                    <path d="M14.34 58.24h15.4v108.42h-15.4zM22.55 45A22.5 22.5 0 1145 22.32 22.54 22.54 0 0122.55 45zm0 180.08A22.5 22.5 0 1145 202.4a22.53 22.53 0 01-22.45 22.68z"></path>
                                </svg>
                                Linha Vertical
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 171 171.1" height="16" width="16">
                                    <path d="M53.3 128.4c-3.9-3.9-7.3-7.5-11-11.2C81.2 78.4 120.4 39.2 159.7 0L171 11.3c-39.3 39-78.4 78-117.7 117.1zm-30.4-2.2c12.5.2 22.3 10.5 22 23-.3 12.2-10.5 22.1-22.7 21.9C9.8 171-.2 160.7 0 148.3c.2-12.4 10.5-22.4 22.9-22.1z"></path>
                                </svg>
                                Raio
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 224.6 174" height="16" width="16">
                                    <path d="M81.1 159.5v-15.4h143.4v15.4H81.1zm61.5-128.8H.3V15.2h142.3v15.5zm55.5-7.7c.5 11.4-8.7 22.4-22.6 22.8-12.1.3-22.7-10.8-22.6-23.1.1-12.2 10.9-23 22.8-22.7 12.7.3 22.4 10.3 22.4 23zM48.5 128.7c12.8.1 22.6 9.9 22.5 22.7 0 12.7-10 22.6-22.8 22.6-12.5-.1-22.4-10.4-22.3-23.2 0-12.3 10-22.2 22.6-22.1zm102.6-48.8c26.6-.1 45.7 0 72.3 0h1.2v15.5h-90.5c9-8.4 17-15.5 17-15.5zm-151 16V80.2h89.4c-5.5 5.4-8.6 8.5-15.9 15.7H.1zm126.2-12.1c-6 6-11.8 11.7-18.4 18.3-3.6-3.6-7.2-7.3-10.8-11.1 5.9-5.6 12.1-12 18.4-18 2.9 3 7.2 7.2 10.8 10.8zm29.3-29.3l-17.3 17.3c-3.7-3.7-7.3-7.4-11-11.1 5.7-5.6 11.6-11.4 17.6-17.2 3.2 3.3 6.9 7.1 10.7 11zm-59.4 59.4c-5.3 5.3-11.2 11.1-17.6 17.3-3.5-3.8-7.1-7.6-10.7-11.6 6-5.8 11.8-11.5 17.6-17.2 3.4 3.7 7 7.6 10.7 11.5zm128.3-83.1h-16.2V15.2h16.2v15.6zM0 159.6v-15.3h15.6v15.3H0z"></path>
                                </svg>
                                Retraimento de Fibonacci
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 224.6 224.7" height="16" width="16">
                                    <path d="M47 175.2c-5-2.8-9.3-5.2-14-7.8 27.3-48.7 54.4-96.9 81.7-145.6 4.8 2.7 9.2 5.2 14 7.9-27.2 48.6-54.3 96.8-81.7 145.5zm9.8 16.3c-2.6-4.9-4.9-9.2-7.5-14.1 49.3-26 98.2-51.8 147.8-77.9 2.4 4.6 4.8 9.1 7.4 14.3-49.2 25.9-98.2 51.6-147.7 77.7zM15.3 0h15.4v166.4H15.3V0zm42.9 209.4V194h166.4v15.4H58.2zm-34.6 15.3C10.7 224.8 0 214.2 0 201.3c0-12.5 10.1-22.6 22.6-22.5 12.7 0 23.2 10.5 23.4 23.2.1 12.4-9.9 22.7-22.4 22.7z"></path>
                                </svg>
                                Ventilador Fibonacci
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" height="16" width="16">
                                    <path d="M5 12l-1-1 6.8-6.8 1.1 1.1C8.2 8.8 8.7 8.4 5 12zm-2.9-.2c1.2 0 2.1 1 2.1 2.2 0 1.1-1 2.1-2.1 2C.9 16 0 15 0 13.9s1-2.1 2.1-2.1z"></path><circle cx="13.9" cy="2.1" r="2.1"></circle>
                                </svg>
                                Linha de Tendência
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 206 198.1" height="16" width="16">
                                    <path d="M147.9 31.1c2.5 4.9 4.8 9.3 7.3 14.2-32.4 16.7-64.5 33.2-96.9 50-2.5-4.8-4.8-9.2-7.4-14.2 32.4-16.7 64.4-33.2 97-50zm-12.6 103.6c0 12.2-10.1 22.5-22.1 22.6-12.5 0-22.8-10-22.9-22.3-.1-12.2 9.9-22.6 21.9-22.8 12.7-.3 23 9.8 23.1 22.5zM205.8 23c-.2 12.4-10.7 22.3-23.1 22-12.2-.3-22-10.5-21.8-22.8C161 9.7 171.2-.2 183.8 0c12.4.2 22.3 10.5 22 23zM.8 104.5C1 92.2 11.4 82 23.2 82.3c12.9.3 22.8 10.6 22.5 23.2-.3 12.2-10.7 22.2-22.7 21.9C10.5 127.1.5 116.8.8 104.5zm84.6 53.3c-26.1 13.4-52 26.7-78.5 40.3-2.2-4.7-4.4-9.3-6.9-14.6 25.9-13.3 51.6-26.5 77.8-39.9 2.6 4.8 4.9 9.2 7.6 14.2zm62.4-32.6c-2.6-5-4.8-9.3-7.4-14.3 19.7-10.2 39.1-20.3 58.9-30.5 2.3 5 4.3 9.5 6.7 14.6-19.2 10-38.3 19.9-58.2 30.2z"></path>
                                </svg>
                                Canal Paralelo
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 1.5H11v1H1.5v-1zm13 12H5v1h9.5v-1z"></path><circle r="1.75" cx="2" cy="14"></circle><circle cx="14" cy="2" r="1.75"></circle><path d="M1.5 2.5h1V11h-1zm12 2.5h1v8.5h-1z"></path>
                                </svg>
                                Retângulo
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 14.95 10.56">
                                    <path d="M14.35 1.18c.21.41.4.77.61 1.18-2.69 1.38-7.5 3.87-10.18 5.26-.21-.4-.4-.76-.61-1.18 2.69-1.38 7.49-3.87 10.19-5.26ZM0 8.38c.02-1.02.88-1.87 1.86-1.84 1.07.02 1.89.88 1.87 1.92-.02 1.01-.89 1.84-1.88 1.82A1.875 1.875 0 0 1 0 8.38Zm10.23-7.2C8.07 2.29 5.92 3.39 3.72 4.52c-.18-.39-.36-.77-.57-1.21C5.3 2.21 7.43 1.11 9.6 0c.22.4.41.76.63 1.18ZM6.29 10.56c2.2-1.13 4.35-2.23 6.51-3.34-.22-.41-.41-.78-.63-1.18C10.1 7.1 8.06 8.15 6.01 9.2l-.29.15c.21.44.39.82.57 1.21Z"></path>
                                </svg>
                                Andrew's Pitchfork
                            </a>
                        </li>
                    </ul>
                </div>
    
                <div class="dropdown dropup options">
                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" title="Opções">
                        <i class="fa-solid fa-ellipsis"></i>
                    </button>
    
                    <ul class="dropdown-menu">
                        <li>
                            <button type="button" class="btn" data-bs-toggle="button" aria-pressed="false" title="Navegação Social">
                                <i class="fa-solid fa-users"></i>
    
                                <span class="tag-checked">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="btn" data-bs-toggle="button" aria-pressed="false" title="Vigilância do Mercado">
                                <i class="fa-solid fa-temperature-three-quarters"></i>
    
                                <span class="tag-checked">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                            </button>
                        </li>
                    </ul>
                </div>
    
                <div class="dropdown dropup multi-charts">
                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" title="Multi Gráficos">
                        <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="35" viewBox="0 0 33 33">
                            <path d="M15.199 3.287v8.626a3.287 3.287 0 01-3.286 3.286H3.286A3.287 3.287 0 010 11.913V3.287A3.288 3.288 0 013.286 0h8.627a3.286 3.286 0 013.286 3.287zM29.714 0h-8.627a3.288 3.288 0 00-3.286 3.287v8.626a3.287 3.287 0 003.286 3.286h8.627A3.287 3.287 0 0033 11.913V3.287A3.288 3.288 0 0029.714 0zM11.913 17.801H3.286A3.286 3.286 0 000 21.087v8.627A3.288 3.288 0 003.286 33h8.627a3.288 3.288 0 003.286-3.286v-8.627a3.284 3.284 0 00-3.286-3.286zm17.801 0h-8.627a3.287 3.287 0 00-3.286 3.286v8.627A3.288 3.288 0 0021.087 33h8.627A3.288 3.288 0 0033 29.714v-8.627a3.286 3.286 0 00-3.286-3.286z"></path>
                        </svg>
                    </button>
    
                    <ul class="dropdown-menu">
                        <li>
                            <span class="title-multicharts">1 Gráfico</span>
    
                            <div class="sq-wrap">
                                <button type="button" class="active">
                                    <div class="sq full">
                                        <div class="sq__item"></div>
                                    </div>
                                </button>
                            </div>
                        </li>
                        <!--
                        <li>
                            <span class="title-multicharts">Gráficos em 2</span>
    
                            <div class="sq-wrap">
                                <button type="button">
                                    <div class="sq horizontal-2">
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                    </div>
                                </button>
    
                                <button type="button">
                                    <div class="sq vertical-2">
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                    </div>   
                                </button>
                            </div>
                        </li>
                        <li>
                            <span class="title-multicharts">Gráficos em 3</span>
    
                            <div class="sq-wrap">
                                <button type="button">
                                    <div class="sq top-1-bottom-2">
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                    </div>
                                </button>
    
                                <button type="button">
                                    <div class="sq top-2-bottom-1">
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                    </div>
                                </button>
                                
                                <button type="button">
                                    <div class="sq left-2-right-1">
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                    </div>
                                </button>
                                
                                <button type="button">
                                    <div class="sq left-1-right-2">
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                    </div>
                                </button>
                                
                                <button type="button">
                                    <div class="sq vertical-3">
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                    </div>
                                </button> 
                            </div>
                        </li>
                        <li>
                            <span class="title-multicharts">Gráficos em 4</span>
    
                            <div class="sq-wrap">
                                <button type="button">
                                    <div class="sq top-2-bottom-2">
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                    </div>
                                </button>
    
                                <button type="button">
                                    <div class="sq top-3-bottom-1">
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                    </div>
                                </button>
    
                                <button type="button">
                                    <div class="sq top-1-bottom-3">
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                    </div>
                                </button>
    
                                <button type="button">
                                    <div class="sq left-1-right-3">
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                    </div>
                                </button>
    
                                <button type="button">
                                    <div class="sq left-3-right-1">
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                        <div class="sq__item"></div>
                                    </div>   
                                </button>
                            </div>
                        </li>
                        -->
                    </ul>
                </div>
            </div>

            <div class="buttons-controls-chart">
                <div class="input-invest-chart">
                    <div class="buttons">
                        <button type="button" class="btn-add">
                            <i class="fa-solid fa-plus"></i>
                        </button>
    
                        <button type="button" class="btn-remove">
                            <i class="fa-solid fa-minus"></i>
                        </button>
                    </div>
    
                    <div class="area-input">
                        <input type="text" id="floatingInvestimento" placeholder="Digite o valor" value="R$ 0">
                        <label for="floatingInvestimento">Investimento</label>
                    </div>
                </div>
    
                <div class="buttons-center">
                    <button type="button" class="btnBuy">
                        <i class="fa-solid fa-angle-down"></i>
                    
                        <div>
                            <p>Vender</p>
                            <span>0%</span>
                        </div>
                    </button>
                    
                    <button type="button" class="btnSell">
                        <i class="fa-solid fa-angle-up"></i>
    
                        <div>
                            <p>Comprar</p>
                            <span>0%</span>
                        </div>
                    </button>
                </div>
    
                <div class="input-strikes-chart">
                    <button type="button" class="btn-strikes">
                        0.00
                        <span>Total de Strike</span>
                    </button>
    
                    <div class="buttons">
                        <button type="button" class="btn-up">
                            <i class="fa-solid fa-angle-up"></i>
                        </button>
    
                        <button type="button" class="btn-down">
                            <i class="fa-solid fa-angle-down"></i>
                        </button>
                    </div>
                </div>
            </div>
    
            <div class="buttons-zoom-chart">
                <button type="button" class="btn-zoom" id="zoom-in" title="Zoom In">
                    <i class="fa-solid fa-plus"></i>
                </button>
    
                <button type="button" class="btn-zoom" id="zoom-out" title="Zoom Out">
                    <i class="fa-solid fa-minus"></i>
                </button>
            </div>
        </div>
    
        <!--
        <button onclick="changeChartType('line')">Linha</button>
        <button onclick="changeChartType('bar')">Barras</button>
        <button onclick="changeChartType('candlestick')">Candlesticks</button>
        <button onclick="changeChartType('heikinAshi')">Heiken Ashi</button>
        -->
    </div>
</div>

<script>
    (async () => {
        const data = await fetch(
            'https://demo-live-data.highcharts.com/aapl-ohlcv.json'
        ).then(response => response.json());

        const ohlc = [],
            volume = [],
            dataLength = data.length;

        for (let i = 0; i < dataLength; i += 1) {
            ohlc.push([
                data[i][0],
                data[i][1],
                data[i][2],
                data[i][3],
                data[i][4]
            ]);

            volume.push([
                data[i][0],
                data[i][5]
            ]);
        }

        const chart = Highcharts.stockChart('chart', {
            chart: {
                backgroundColor: '#1C1F2D',
                events: {
                    load: function () {
                        moveDivsToChart();
                        actCurrentPriceIndicator();
                    }
                }
            },
            navigator: {
                enabled: false
            },
            scrollbar: {
                enabled: false
            },
            rangeSelector: {
                enabled: true,
                inputEnabled: false,
                floating: true,
                y: -9,
                x: 0,
                verticalAlign: 'top',
                align: 'right',
                selected: 1,
                buttonPosition: {
                    align: 'right'
                },
                buttons: [{
                    type: 'month',
                    count: 1,
                    text: '1m'
                }, {
                    type: 'month',
                    count: 3,
                    text: '3m'
                }, {
                    type: 'month',
                    count: 6,
                    text: '6m'
                }, {
                    type: 'year',
                    count: 1,
                    text: '1y'
                }, {
                    type: 'all',
                    text: 'All'
                }],
                labelStyle: {
                    color: '#fff',
                    fontSize: '12px'
                }
            },
            yAxis: {
                labels: {
                    style: {
                        color: '#fff',
                        fontSize: '12px'
                    },
                    align: 'left'
                },
                gridLineColor: '#2a3041',
                height: '100%'
            },
            xAxis: {
                labels: {
                    style: {
                        color: '#fff',
                        fontSize: '12px'
                    }
                },
                gridLineColor: '#2a3041',
                crosshair: {
                    color: '#2a3041'
                }
            },
            tooltip: {
                shape: 'square',
                headerShape: 'callout',
                borderWidth: 0,
                shadow: false,
                style: {
                    fontSize: '12px'
                }
            },
            title: {
                style: {
                    fontSize: '12px',
                    color: '#fff'
                }
            },
            subtitle: {
                style: {
                    fontSize: '12px',
                    color: '#fff'
                }
            },
            legend: {
                itemStyle: {
                    fontSize: '12px',
                    color: '#fff'
                }
            },
            navigation: {
                bindingsClassName: 'tools-container'
            },
            stockTools: {
                gui: {
                    enabled: true,
                    buttons: [
                        'indicators',
                        'lines',
                        'crookedLines',
                        'measure',
                        'advanced',
                        'toggleAnnotations',
                        'verticalLabels',
                        'flags',
                        'typeChange',
                        'currentPriceIndicator',
                    ]
                }
            },
            series: [{
                type: 'candlestick',
                id: 'aapl-candlestick',
                name: 'AAPL Stock Price',
                data: ohlc,
                color: '#ff0000',
                upColor: '#0faf4b',
                lineColor: '#ff0000',
                upLineColor: '#0faf4b'
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 800
                    },
                    chartOptions: {
                            rangeSelector: {
                            inputEnabled: false,
                            verticalAlign: 'bottom',
                            y: 0
                        }
                    }
                }]
            }
        });

        const stockToolsContainer = document.getElementById('stocktools-container');
        const stockToolsElement = document.querySelector('.highcharts-stocktools-wrapper');

        if (stockToolsContainer && stockToolsElement) {
            stockToolsContainer.appendChild(stockToolsElement);
        }
    })();

    function moveDivsToChart() {
        const headerChart = document.getElementById('header-chart-0');
        const controlsChart = document.getElementById('controls-chart-0');
        const chartContainer = document.getElementById('chart');

        if (headerChart && controlsChart && chartContainer) {
            chartContainer.appendChild(headerChart);
            chartContainer.appendChild(controlsChart);
        }
    }
    
    function actCurrentPriceIndicator() {
        const btnCPI = document.querySelector('.highcharts-current-price-indicator button');
        
        if (btnCPI) {
            setTimeout(function() {
                btnCPI.click();
            }, 500);
        } else {
            console.error("currentPriceIndicator not automatically activated");
        }
    }
</script>



