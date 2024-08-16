@extends('layouts.head')

@section('title', 'Código de verificação')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

      <div class="formulario">
        <div class="message roboto-thin">
        Para garantir a segurança de nossa comunidade e proteger suas informações, utilizamos a autenticação via e-mail durante o processo de cadastro. Isso significa que após preencher seus dados, enviaremos um e-mail de confirmação para o endereço fornecido. Ao clicar no link de confirmação contido nesse e-mail, você nos ajudará a verificar sua identidade e a garantir que apenas você tenha acesso à sua conta. Este procedimento simples ajuda a manter nossos serviços seguros e confiáveis para todos os nossos usuários.
        Agradecemos sua compreensão e cooperação.
        </div>

        <!-- @if(session('email'))
            <p> Tem E-mail: {{ session('email') }}</p>
        @else
            <p> Não tem E-mail: {{ session('email') }}</p>
        @endif -->

            <!-- <div class="message">
                @if(session('nome'))
                    <p>{{ session('nome') }}</p>
                @endif
            </div>

            <div class="message">
                @if(session('email'))
                    <p>{{ session('email') }}</p>
                @endif
            </div>

            <div class="message">
                @if(session('mobile'))
                    <p>{{ session('mobile') }}</p>
                @endif
            </div>

            <div class="message">
                @if(session('confirmCode'))
                    <p>{{ session('confirmCode') }}</p>
                @endif
            </div> -->
            <div class="codeError">
                @if(session('error'))
                    <p>{{ session('error') }}</p>
                @endif
            </div>

        <form action="/checkCode" method="POST" onsubmit="confSec()">
        @csrf
          <fieldset class="fieldsetConfirmCode">
            <legend>Código de verificação</legend>
            <i class="fa-solid fa-key" style="margin: 0 8px 0 0;border-right: 1px solid;padding: 0 8px 0 0;"></i>
            <input type="text" id="confirmCode" name="confirmCode" placeholder="Informe o código recebido no e-mail" maxlength="4" onkeyup="handleCode(event)" required />
            <input type="hidden" id="email" name="sessionEmail" value="{{ $email }}" />
            <input type="hidden" id="email" name="email" value="{{ $email }}" />
          </fieldset>

          <div id="buttonCadastrar" class="buttonCadastrar">
            <button>Confirmar código <i class="fa-solid fa-unlock" style="margin:0 0 0 8px;font-size:17px;background-color:transparent;color:#fff;"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
