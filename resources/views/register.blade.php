@extends('_layouts.auth')

@section('header')
<div class="area-logo">
    <a href="#" class="logo">
        
    </a>
</div>

<div class="right-header">
    
    <a href="{{ route('auth.login') }}" class="btnDefault">
        Acesse sua conta
    </a>
</div>
@endsection

@section('main')
<div class="area-form-login register">
    <div class="area-logo">
        <a href="{{ route('site.index') }}" class="logo">
            <img src="{{ asset('img/h azul.png') }}" alt="Logo">
        </a>
    </div>
    <h1 class="title-login">
       Crie sua conta grátis
    </h1>

    <div class="login-social">
        <button type="button" class="loginSocial facebook" onclick="socialAuth()">
            <i class="fa-brands fa-facebook"></i>

            <span>Facebook</span>
        </button>

        <button type="button" class="loginSocial google" onclick="socialAuth()">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
            </svg>

            <span>Google</span>
        </button>

        <div class="separator-social">
            <span>ou</span>
        </div>
    </div>

    <form action="#" method="post">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (isset($_GET['error']))
            <div class="alert alert-danger">
                <ul>
                    <li>Email ou Senha não correspondem!</li>
                </ul>
            </div>
        @endif
        <div class="area-select-country">
            <select class="form-select" name="#" id="#">
                <option value="Brasil" selected="">Brasil</option>
            </select>

            <span>Certifique-se de que este é seu país de residência permanente.</span>
        </div>

        <input class="inputDefault" type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">

        <input class="inputDefault" type="text" name="user" placeholder="Usuário" value="{{ old('user') }}">
        
        <input class="inputDefault" type="password" name="password" placeholder="Senha" value="{{ old('password') }}">

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="checkTermos">
            
            <label class="form-check-label" for="checkTermos">
                Confirmo que tenho 18 anos ou mais e aceito os 
                <a target="_blank" href="#" class="link">Termos e Condições</a>
                , a 
                <a target="_blank" href="#" class="link">Política de Privacidade</a> 
                e a 
                <a target="_blank" href="#" class="link">Política de Execução de Ordens.</a>
            </label>
        </div>

        <button type="submit" class="btnConfirmDef">
            Continuar com o e-mail
        </button>
    </form>

    <div class="footer-login">
        <p class="messageRegister">
            Já possui uma conta?
            <a href="{{ route('auth.login') }}">Entrar agora</a>
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