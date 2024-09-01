@extends('layouts.head')

@section('title', 'Archetypefy')

@section('content')
    <div class="content">
        <div class="contentHome">

            <div class="logo">
                <img src="src/assets/img/logo.svg" />
            </div>

            @if(session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif

            <div class="formulario">
                <form action="/dataArchetypefy" method="POST" onsubmit="entrar()">
                @csrf
                <!-- <fieldset>
                    <legend>Nome</legend>
                    <input type="text" id="nome" name="nome" placeholder="Informe seu nome" required />
                </fieldset> -->

                <div class="message roboto-thin">
                    Seja bem-vindo! Para realizar o seu teste, por favor, utilize o mesmo e-mail utilizado na compra. (Atenção: certifique-se de que o e-mail está correto, pois será nele que será enviado o resultado).
                </div>

                <fieldset class="fieldsetArch">
                    <legend>E-mail</legend>
                    <i class="fa-regular fa-envelope" style="font-size:17px;margin: 0 8px 0 0;border-right: 1px solid;padding: 0 8px 0 0;"></i>
                    <input type="text" id="email" name="email" placeholder="Informe o e-mail utilizado na compra" required />
                </fieldset>

                <!-- <fieldset>
                    <legend>Celular</legend>
                    <input type="text" id="celular" name="celular" placeholder="Informe seu WhastApp (XX) X.XXXX-XXXX" maxlength="15" onkeyup="handlePhone(event)" required />
                </fieldset> -->

                <div id="buttonCadastrar" class="buttonCadastrar">
                    <button>Entrar <i class="fa-solid fa-arrow-right-to-bracket" style="margin:0 0 0 15px;font-size:20px;background-color:transparent;color:#fff;"></i></button>
                </div>
                </form>
                <a href="https://pay.kiwify.com.br/yd54E7h" class="comprarTeste">
                    <div class="buttonComprarTeste">
                        <button>Compre seu teste <i class="fa-solid fa-store fa-fade" style="margin:0 0 0 15px;font-size:20px;background-color:transparent;color:rgba(187, 129, 53, 1);"></i></button>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
