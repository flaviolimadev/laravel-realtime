<div>    
    <div class="table-responsive" id="tableMenuAtivo">
        <table>
            <thead>
                <tr>
                    <th>
                        <a href="#">Ativo</a>
                    </th>
                    <th>
                        <a href="#">Variação</a>
                    </th>
                    <th>
                        <a href="#">Payout Compra</a>
                    </th>
                    <th>
                        <a href="#">Payout Venda</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($ativos->where('status',1) as $att)
                <tr>
                    <td>
                        <a href="#">
                            <i class="fa-solid fa-coins"></i>
                            <span>{{ $att->name }}</span>
                        </a>
                    </td>

                    @php
                        $open = floatval($att->timeframesFirst->first()->open);
                        $close = floatval($att->timeframesFirst->first()->close);

                    @endphp

                    @if(number_format((($open - $close)*100) / $open, 10) > 0)

                    <td class="up">
                        <i class="fa-solid fa-arrow-up"></i>
                        {{ number_format($att->timeframesFirst->first()->close, 6) }}
                    </td>

                    @else

                    <td class="down">
                        <i class="fa-solid fa-arrow-up"></i>
                        {{ number_format($att->timeframesFirst->first()->close, 6)  }}
                    </td>

                    @endif

                    <td>{{ $att->payout_buy }}%</td>

                    <td>
                        {{ $att->payout_sell }}%
                        <!--
                        <a href="#">
                            <i class="fa-regular fa-star" style="display: none;"></i>
                            <i class="fa-solid fa-star" style="display: inline-block;"></i>
                        </a>
                        -->
                    </td>
                </tr>
                @endforeach
            </tbody>    
        </table>
    </div>

     <!-- Script para Escutar o Evento de Atualização de Nome -->
     <script  type="module">
        function addLeadingZero(number) {
            return number < 10 ? '0' + number : number.toString();
        }


        Echo.channel('ativos')
            .listen('.AtivosUpdate', (event) => {
                document.getElementById('tableMenuAtivo').innerHTML = event.ativosRenderMenu;
            });
    </script>
</div>
