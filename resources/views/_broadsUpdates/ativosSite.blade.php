@foreach ($ativos as $item)


<tr>
    <td class="nome">
        <a href="#">
            <!--
            <div class="area-logo-table">
                <img src="img/logo-table.svg" alt="Logo Operação">
            </div>
            -->

            <div class="title">
                {{ $item->name }}
                <span>Aberto Agora!</span>
            </div>
        </a>
    </td>

    <td class="value">
        <a href="#">
            {{ $item->timeframesFirst->first()->open }}
        </a>
    </td>

    <td class="value">
        <a href="#">
            {{ $item->timeframesFirst->first()->close }}
        </a>
    </td>

    <td class="chart">

        @php
            $open = floatval($item->timeframesFirst->first()->open);
            $close = floatval($item->timeframesFirst->first()->close);

        @endphp

        @if(number_format((($open - $close)*100) / $open, 8) > 0)
        
        <a href="#">
            <span class="text-sucess">
                {{ number_format((($open - $close)*100) / $open, 8) }}
            %</span>
        
            <i class="fa-solid fa-arrow-trend-up"></i>
        </a>

        @else
        
        <a href="#">
            <span class="text-danger">
                {{ number_format((($open - $close)*100) / $open, 8) }}
            %</span>
        
            <i class="fa-solid fa-arrow-trend-down"></i>
        </a>
        @endif
        
    </td>

    <td class="acoes">
        <button type="button" class="btnOpVender">
            Vender
        </button>

        <button type="button" class="btnOpComprar">
            Comprar
        </button>
    </td>
</tr>

@endforeach