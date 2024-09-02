<div class="page-sidebar">
    <div class="top-sidebar">
        <div class="section-title">
            <i class="fa-solid fa-coins"></i>

            <span class="name-sidebar">ATIVO</span>

            <span class="percenty-sidebar">0,00%</span>
        </div>

        <div class="slidecontainer">
            <span id="valueLeft">0,00%</span>
            
            <input type="range" min="0" max="100" value="0" class="slider" id="rangeSidebar">

            <span id="valueRight">0%</span>
        </div>

        <div class="area-input-sidebar tempo">
            <span class="tag-title">Tempo</span>

            <button type="button">
                <i class="fa-solid fa-minus"></i>
            </button>

            <span class="time">00:05:00</span>

            <button type="button">
                <i class="fa-solid fa-plus"></i>
            </button>

            <a href="#">
                Tempo de Comutação
            </a>
        </div>

        <div class="area-input-sidebar invest">
            <span class="tag-title">Investimento</span>

            <button type="button">
                <i class="fa-solid fa-minus"></i>
            </button>

            <input type="text" value="R$ 10">

            <button type="button">
                <i class="fa-solid fa-plus"></i>
            </button>

            <a href="#">
                Trocar
            </a>
        </div>

        <div class="payments-sidebar">
            <p class="title">Pagamentos</p>

            <span class="percenty">+0%</span>

            <span class="value">R$ 0,00</span>

            <span class="profit">Lucro</span>

            <span class="profit-value">+R$ 0,00</span>

            <span class="tag-question" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio nulla rem et at libero illo repellendus dolores veritatis exercitationem ratione! Placeat ducimus facilis aspernatur cupiditate delectus, corporis quibusdam quis hic.">
                <i class="fa-solid fa-question"></i>
            </span>
        </div>
    </div>

    <div class="area-sidebar-main">
        <div class="bottom-sidebar">
            <div class="header-tabs-sidebar">
                <button class="item active" type="button" onclick="openTab(this, 'Operacoes')">
                    <span class="title">Operações</span>

                    <span class="subtitle">
                        <i class="fa-solid fa-right-left"></i>
                    </span>

                    <span class="tag-qtd">0</span>
                </button>

                <button class="item off" type="button" onclick="openTab(this, 'Pedidos')">
                    <span class="title">
                        Pedidos
                    </span>

                    <span class="subtitle">
                        <i class="fa-regular fa-clock"></i>
                    </span>

                    <span class="tag-qtd">0</span>
                </button>
            </div>

            <div class="body-tabs-sidebar">
                <div id="Operacoes" class="container-tab tab-item">
                    <div class="message-empty" style="display: block;">
                        <i class="fa-solid fa-box-open"></i>

                        <p>
                            A lista de operações está vazia.
                            <br>
                            Crie uma operação pendente usando o formulário acima.
                        </p>
                    </div>

                    <!--

                    <p class="title-data">
                        10 Maio
                        <span class="tag-qtd">2</span>
                    </p>



                    <div class="itens-container-tab">
                        <div class="item-pedido-tab">
                            <div class="header-pedido" onclick="toggleHidden(this)">
                                <div class="top">
                                    <div>
                                        <i class="fa-solid fa-coins"></i>
                
                                        <span class="title">EUR/JPY (OTC) EUR/JPY (OTC)</span>
                                    </div>     
                
                                    <span class="time-operacoes">
                                        00:00:53
                                    </span>
                                </div>

                                <div class="bottom">
                                    <div>
                                        <span class="arrow up">
                                            <i class="fa-solid fa-arrow-up"></i>
                                        </span>

                                        <span class="green">R$ 1.500</span>
                                    </div>
                                    
                                    <span class="red">R$ 0.00</span>
                                </div>

                                <button type="button" class="btn-sell" onclick="handleButtonClick(event)">
                                    Vender agora

                                    <span>R$ 450</span>
                                </button>
                            </div>

                            <div class="infos-pedido hidden">
                                <div>
                                    <span>ID:</span>
                                    <span>aab6d38b-9304-4453-a179-7e1fb1842304</span>
                                </div>

                                <div>
                                    <span>Par comercial:</span>
                                    <span>EUR/USD (OTC)</span>
                                </div>

                                <div>
                                    <span>Preço de abertura:</span>
                                    <span>1.08743</span>
                                </div>

                                <div>
                                    <span>Preço de fechamento:</span>
                                    <span>1.08851</span>
                                </div>

                                <div>
                                    <span>Hora de abertura:</span>
                                    <span>2024-05-10 01:20:07.732</span>
                                </div>

                                <div>
                                    <span>Hora de fechamento:</span>
                                    <span>2024-05-10 01:21:00.94</span>
                                </div>

                                <div>
                                    <span>Duração:</span>
                                    <span>00:00:53</span>
                                </div>

                                <div>
                                    <span>Diferença:</span>
                                    <span>-18</span>
                                </div>
                            </div>
                        </div>

                        <div class="item-pedido-tab">
                            <div class="header-pedido" onclick="toggleHidden(this)">
                                <div class="top">
                                    <div>
                                        <i class="fa-solid fa-coins"></i>
                
                                        <span class="title">EUR/JPY (OTC) EUR/JPY (OTC)</span>
                                    </div>     
                
                                    <span class="time-operacoes">
                                        00:00:53
                                    </span>
                                </div>

                                <div class="bottom">
                                    <div>
                                        <span class="arrow up">
                                            <i class="fa-solid fa-arrow-up"></i>
                                        </span>

                                        <span class="green">R$ 1.500</span>
                                    </div>
                                    
                                    <span class="red">R$ 0.00</span>
                                </div>
                            </div>

                            <div class="infos-pedido hidden">
                                <div>
                                    <span>ID:</span>
                                    <span>aab6d38b-9304-4453-a179-7e1fb1842304</span>
                                </div>

                                <div>
                                    <span>Par comercial:</span>
                                    <span>EUR/USD (OTC)</span>
                                </div>

                                <div>
                                    <span>Preço de abertura:</span>
                                    <span>1.08743</span>
                                </div>

                                <div>
                                    <span>Preço de fechamento:</span>
                                    <span>1.08851</span>
                                </div>

                                <div>
                                    <span>Hora de abertura:</span>
                                    <span>2024-05-10 01:20:07.732</span>
                                </div>

                                <div>
                                    <span>Hora de fechamento:</span>
                                    <span>2024-05-10 01:21:00.94</span>
                                </div>

                                <div>
                                    <span>Duração:</span>
                                    <span>00:00:53</span>
                                </div>

                                <div>
                                    <span>Diferença:</span>
                                    <span>-18</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="title-data">
                        9 Maio
                        <span class="tag-qtd">1</span>
                    </p>

                    <div class="itens-container-tab">
                        <div class="item-pedido-tab">
                            <div class="header-pedido" onclick="toggleHidden(this)">
                                <div class="top">
                                    <div>
                                        <i class="fa-solid fa-coins"></i>
                
                                        <span class="title">EUR/JPY (OTC) EUR/JPY (OTC)</span>
                                    </div>     
                
                                    <span class="time-operacoes">
                                        00:00:53
                                    </span>
                                </div>

                                <div class="bottom">
                                    <div>
                                        <span class="arrow up">
                                            <i class="fa-solid fa-arrow-up"></i>
                                        </span>

                                        <span class="green">R$ 1.500</span>
                                    </div>
                                    
                                    <span class="red">R$ 0.00</span>
                                </div>

                                <button type="button" class="btn-sell" onclick="handleButtonClick(event)">
                                    Vender agora

                                    <span>R$ 450</span>
                                </button>
                            </div>

                            <div class="infos-pedido hidden">
                                <div>
                                    <span>ID:</span>
                                    <span>aab6d38b-9304-4453-a179-7e1fb1842304</span>
                                </div>

                                <div>
                                    <span>Par comercial:</span>
                                    <span>EUR/USD (OTC)</span>
                                </div>

                                <div>
                                    <span>Preço de abertura:</span>
                                    <span>1.08743</span>
                                </div>

                                <div>
                                    <span>Preço de fechamento:</span>
                                    <span>1.08851</span>
                                </div>

                                <div>
                                    <span>Hora de abertura:</span>
                                    <span>2024-05-10 01:20:07.732</span>
                                </div>

                                <div>
                                    <span>Hora de fechamento:</span>
                                    <span>2024-05-10 01:21:00.94</span>
                                </div>

                                <div>
                                    <span>Duração:</span>
                                    <span>00:00:53</span>
                                </div>

                                <div>
                                    <span>Diferença:</span>
                                    <span>-18</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    -->
                </div>
                  
                <div id="Pedidos" class="container-tab tab-item" style="display:none">
                    <div class="message-empty" style="display: block;">
                        <i class="fa-solid fa-box-open"></i>

                        <p>
                            A lista de pedidos está vazia.
                            <br>
                            Crie uma negociação pendente usando o formulário acima.
                        </p>
                    </div>
                    <!--
                    <div class="itens-container-tab">
                        <div class="item-pedido-tab">
                            <div class="header-pedido">
                                <div>
                                    <i class="fa-solid fa-coins"></i>
            
                                    <span class="title">EUR/JPY (OTC) EUR/JPY (OTC)</span>
                                </div>     
            
                                <span class="arrow up">
                                    <i class="fa-solid fa-arrow-up"></i>
                                </span>
                            </div>

                            <div class="infos-pedido">
                                <div>
                                    <span>Quantia:</span>
                                    <span>R$ 1.500</span>
                                </div>

                                <div>
                                    <span>Período:</span>
                                    <span>H4</span>
                                </div>

                                <div>
                                    <span>Preço:</span>
                                    <span>1.08743</span>
                                </div>

                                <div>
                                    <span>Preço atual:</span>
                                    <span>1.08851</span>
                                </div>
                            </div>

                            <button type="button" class="btn-cancel">Cancelar</button>
                        </div>

                        <div class="item-pedido-tab">
                            <div class="header-pedido">
                                <div>
                                    <i class="fa-solid fa-coins"></i>
            
                                    <span class="title">EUR/JPY (OTC)</span>
                                </div>     
            
                                <span class="arrow down">
                                    <i class="fa-solid fa-arrow-down"></i>
                                </span>
                            </div>

                            <div class="infos-pedido">
                                <div>
                                    <span>Quantia:</span>
                                    <span>R$ 1.500</span>
                                </div>

                                <div>
                                    <span>Período:</span>
                                    <span>H4</span>
                                </div>

                                <div>
                                    <span>Preço:</span>
                                    <span>1.08743</span>
                                </div>

                                <div>
                                    <span>Preço atual:</span>
                                    <span>1.08851</span>
                                </div>
                            </div>

                            <button type="button" class="btn-cancel">Cancelar</button>
                        </div>

                        <div class="item-pedido-tab">
                            <div class="header-pedido">
                                <div>
                                    <i class="fa-solid fa-coins"></i>
            
                                    <span class="title">EUR/JPY (OTC)</span>
                                </div>     
            
                                <span class="arrow up">
                                    <i class="fa-solid fa-arrow-up"></i>
                                </span>
                            </div>

                            <div class="infos-pedido">
                                <div>
                                    <span>Quantia:</span>
                                    <span>R$ 1.500</span>
                                </div>

                                <div>
                                    <span>Período:</span>
                                    <span>H4</span>
                                </div>

                                <div>
                                    <span>Preço:</span>
                                    <span>1.08743</span>
                                </div>

                                <div>
                                    <span>Preço atual:</span>
                                    <span>1.08851</span>
                                </div>
                            </div>

                            <button type="button" class="btn-cancel">Cancelar</button>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
</div>