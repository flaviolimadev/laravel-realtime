<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Negociação de Forex, Ações, ETFs e Opções</title>

    <link rel="shortcut icon" type="image/jpg" href="{{ asset('img/icon todo branco.png') }}"/>

    @vite('resources/js/app.js')
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ asset('auth/css/style.css') }}" rel="stylesheet">
</head>

<body style="background-color: #060642;">
    <header class="header-fixed index" style="margin-top: 20px;">
        <div class="area-logo">
            <a href="#" class="logo">
                <img src="{{ asset('img/h branco colorido.png') }}" alt="Logo">
            </a>
        </div>

        <div class="right-header">
            <a href="{{ route('auth.login') }}" class="btnDefault login">
                Entrar
            </a>

            <a href="{{ route('auth.register') }}" class="btnDefault">
                Registro
            </a>
        </div>
    </header>

    <main>
        <div class="area-bg-home" style="background-image: {{ asset('img/background-index.png') }}"></div>

        <div class="content-home">
            <h1 class="title-top-home">
                Negocie Ações, Forex
                <br>
                e Criptomoedas
            </h1>

            <div class="area-buttons-home">
                <a href="#" class="btnDefault">
                    Negociar
                </a>

                <a href="#" class="btnDefault login">
                    Conta Demo
                </a>
            </div>
        </div>

        
        <div class="body-content">
            <!--
            <div class="menu-tab">
                <button class="tablinks active" onclick="openTab(event, 'Forex')">Forex</button>

                <button class="tablinks" onclick="openTab(event, 'Acoes')">Açoes</button>

                <button class="tablinks" onclick="openTab(event, 'Cripto')">Cripto</button>

                <button class="tablinks" onclick="openTab(event, 'Commodities')">Commodities</button>

                <button class="tablinks" onclick="openTab(event, 'Indices')">Índices</button>

                <button class="tablinks" onclick="openTab(event, 'ETFs')">ETFs</button>
            </div>
            -->
            <div class="content-tab">
                <div id="Forex" class="tabcontent" style="display: block;margin-left: 15px;margin-right: 15px;">
                    <div class="header-tabcontent">
                        <div class="left-header-tabcontent">
                            <a href="#" class="title-tab">
                                <span id="sum-ativos">{{ str_pad($ativos->count(), 2, '0', STR_PAD_LEFT); }}</span>
                                Ativos dispoíveis
    
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>

                        <div class="right-header-tabcontent">
                            <div class="item-value-tab">
                                <p class="value-tab">
                                    <span>R$</span>
                                    10
                                </p>

                                <span class="subtitle">Depósito mín.</span>
                            </div>
                            

                            <div class="item-value-tab">
                                <p class="value-tab">
                                    <span>R$</span>
                                    1
                                </p>

                                <span class="subtitle">Investimento mínimo</span>
                            </div>
                        </div>
                    </div>

                    <div class="body-tabcontent table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th><div class="th-content">Nome</div></th>
                                    <th><div class="th-content">Abertura</div></th>
                                    <th><div class="th-content">Fechamento</div></th>
                                    <th><div class="th-content">Mudança</div></th>
                                    <th><div class="th-content"></div></th>
                                </tr>
                            </thead>

                            <tbody id="render-ativos">
                                @include('_broadsUpdates.ativosSite')
                            </tbody>
                        </table>
                    </div>
                </div>
 

                <p class="message-footer-home" style="background-color: #060642;">
                    * O desempenho passado não é uma indicação de resultados futuros. Restrições de alavancagem podem ser aplicadas dependendo das circunstâncias e/ou jurisdição do cliente.
                </p>
            </div>
            
        </div>
    
    </main>

     <!-- Script para Escutar o Evento de Atualização de Nome -->
     <script  type="module">
        function addLeadingZero(number) {
            return number < 10 ? '0' + number : number.toString();
        }


        Echo.channel('ativos')
            .listen('.AtivosUpdate', (event) => {
                //console.log('Nome atualizado:', event);
                document.getElementById('sum-ativos').innerText = addLeadingZero(event.ativos.length);
                document.getElementById('render-ativos').innerHTML = event.ativosRender;
            });
        /**    
        Echo.private('App.Models.User.'{.{$userAuth->id}.})
            .listen('.UserNameUpdated', (event) => {
                    console.log('Nome atualizado:', event.name);
                    document.getElementById('user-name').innerText = event.name;
                });
                */
    </script>

    <script>
        window.addEventListener('scroll', function() {
            var header = document.querySelector('.header-fixed.index');
            
            if (window.scrollY >= 15) {
                header.classList.add('header-white');
            } else {
                header.classList.remove('header-white');
            }
        });

        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            
            tabcontent = document.getElementsByClassName("tabcontent");
            
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablinks");
            
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            document.getElementById(tabName).style.display = "block";

            evt.currentTarget.className += " active";
        }
    </script>
</body>
</html>