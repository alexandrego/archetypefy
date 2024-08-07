@extends('layouts.head')

@section('title', 'Archetypefy')

@section('content')
    <div class="content">
        <div class="contentHome">

            <div class="logo">
                <img src="src/assets/img/logo.svg" />
            </div>

            <div class="codeError">
                @if(session('error'))
                    <p>{{ session('error') }}</p>
                @endif
            </div>

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

                <fieldset>
                    <legend>E-mail</legend>
                    <i class="fa-regular fa-envelope" style="font-size:25px;margin:0 10px 0 0;"></i>
                    <input type="text" id="email" name="email" placeholder="Informe o e-mail utilizado na compra" required />
                </fieldset>

                <!-- <fieldset>
                    <legend>Celular</legend>
                    <input type="text" id="celular" name="celular" placeholder="Informe seu WhastApp (XX) X.XXXX-XXXX" maxlength="15" onkeyup="handlePhone(event)" required />
                </fieldset> -->

                <div id="buttonCadastrar" class="buttonCadastrar">
                    <button>Entrar <i class="fa-solid fa-arrow-right-to-bracket" style="margin:0 0 0 15px;font-size:25px;background-color:transparent;color:#fff;"></i></button>
                </div>
                </form>
                <a href="https://pay.kiwify.com.br/yd54E7h" class="comprarTeste">
                    <div class="buttonComprarTeste">
                        <button>Compre seu teste</button>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
