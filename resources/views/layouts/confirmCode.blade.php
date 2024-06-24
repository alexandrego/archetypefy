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

        <form action="/checkCode" method="POST">
        @csrf
          <fieldset>
            <legend>Código de verificação</legend>
            <input type="text" id="confirmCode" name="confirmCode" placeholder="Informe o código recebido no e-mail" required />
            <input type="hidden" id="email" name="email" value="{{ session('email') }}" />
          </fieldset>

          <div class="buttonCadastrar">
            <button>Confirmar código</button>
          </div>

        </form>
      </div>

    </div>
  </div>
@endsection
