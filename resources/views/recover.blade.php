@extends('_layouts.auth')

@section('header')
<div class="area-logo">
    <a href="#" class="logo">
     
    </a>
</div>

<div class="right-header">
    <a href="{{ route('auth.login') }}" class="btnDefault">
        Acessar sua conta
    </a>
</div>
@endsection

@section('main')
<div class="area-form-login">
    <div class="area-logo">
        <a href="{{ route('site.index') }}" class="logo">
            <img src="{{ asset('img/h azul.png') }}" alt="Logo">
        </a>
    </div>
    <h1 class="title-login">
       Recuperar sua senha
    </h1>

    <form action="#">
        <input class="inputDefault" type="text" placeholder="Número de telefone ou e-mail">

        <button type="submit" class="btnConfirmDef">
            Recuperar
        </button>
    </form>


    <div class="footer-login">
        <a href="{{ route('auth.login') }}" class="recoveryPass">
            Acessar conta
        </a>

        <p class="messageRegister">
            Ainda não possui uma conta ?
            <a href="{{ route('auth.register') }}">Inscrever-se</a>
        </p>
    </div>

    <div class="warning-login">
        <p class="title-warning">Aviso de Risco:</p>

        <span class="message-warning">
            Os CFDs estão sujeitos a riscos semelhantes aos das ações. 
            Alguns fundos especializados negociados em bolsa podem estar sujeitos a riscos de mercado adicionais. 
            Investir em CFDs envolve riscos, incluindo possível perda do capital.
        </span>
    </div>
</div>
@endsection