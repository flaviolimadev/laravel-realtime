<div>
    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        @if($conta_type == 0)
        <span class="title-drop">
            Conta Demo
        </span>

        <i class="fa-solid fa-money-bill-1-wave"></i>
        R$ {{ number_format($balance_fake/100, 2) }}

        @else

        <span class="title-drop">
            Conta Real
        </span>

        <i class="fa-solid fa-money-bill-1-wave"></i>
        R$ {{ number_format($balance/100, 2) }}

        @endif
    </button>
    
    <ul class="dropdown-menu">
        <li>
            <a class="dropdown-item {{ $conta_type == 0 ? 'active' : '' }}" href="#" wire:click.prevent="switchAccount(0)">
                <span>
                    <i class="fa-solid fa-money-bill-1-wave"></i>
                    Conta Demo
                </span>
                <span class="value">
                    R$ {{ number_format($balance_fake / 100, 2) }}
                </span>
            </a>
        </li>
        <li>
            <a class="dropdown-item {{ $conta_type == 1 ? 'active' : '' }}" href="#" wire:click.prevent="switchAccount(1)">
                <span>
                    <i class="fa-solid fa-money-bill-1-wave"></i>
                    Conta Real
                </span>
                <span class="value">
                    R$ {{ number_format($balance / 100, 2) }}
                </span>
            </a>
        </li>
    </ul>
</div>
