@extends('layouts.head')

@section('title', 'Código de verificação')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

      <div class="formulario">

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

            @php
                $nome = session('nome');
                $adm = session('adm');
                $usuario = session('usuario');

                dd($usuario);
            @endphp

        <!-- Formulário para criar senha -->
            @if(isset($nome))
                <div class="message roboto-thin">
                    Bem vindo Sr. {{ $adm->name }}, vamos criar a sua senha de acesso ao sistema, assim toda vez que você voltar basta digitar a mesma senha e eu libero seu acesso.
                </div>

                <div class="message roboto-thin">
                    A senha é livre pode conter qualquer caracter e precisa ter no minimo 4 e no máximo 8 digitos.
                </div>

                <form action="/checkCode" method="POST" onsubmit="confSec()">
                    @csrf
                    <fieldset class="fieldsetConfirmCode">
                        <legend>Informe a senha</legend>
                        <i class="fa-solid fa-key" style="margin: 0 8px 0 0;border-right: 1px solid;padding: 0 8px 0 0;"></i>
                        <input type="password" id="confirmCode" name="infoSenha" placeholder="Informe a senha" minlength="4" maxlength="8" required />
                    </fieldset>

                    <fieldset class="fieldsetConfirmCode">
                        <legend>Confirme a senha</legend>
                        <i class="fa-solid fa-key" style="margin: 0 8px 0 0;border-right: 1px solid;padding: 0 8px 0 0;"></i>
                        <input type="password" id="confirmCode" name="confirmSenha" placeholder="Confirme a senha" minlength="4" maxlength="8" required />
                    </fieldset>

                    <input type="hidden" id="email" name="sessionEmail" value="{{ $email }}" />
                    <input type="hidden" id="email" name="email" value="{{ $email }}" />

                    <div id="buttonCadastrar" class="buttonCadastrar">
                        <button>Cadastrar senha <i class="fa-solid fa-unlock" style="margin:0 0 0 8px;font-size:17px;background-color:transparent;color:#fff;"></i></button>
                    </div>
                </form>
            @endif
        <!-- Formulário para criar senha -->

        <!-- Formulário para Administradores -->
            @if(isset($adm))
                <div class="message roboto-thin">
                    Bem vindo Sr. <span class="resultadoFinal">{{ $adm->name }}</span>
                </div>

                <form action="/checkCode" method="POST" onsubmit="confSec()">
                    @csrf
                    <fieldset class="fieldsetConfirmCode">
                        <legend>Informe sua senha</legend>
                        <i class="fa-solid fa-key" style="margin: 0 8px 0 0;border-right: 1px solid;padding: 0 8px 0 0;"></i>
                        <input type="password" id="confirmCode" name="confirmCode" placeholder="Informe a sua senha" minlength="4" maxlength="4" required />
                    </fieldset>

                    <input type="hidden" id="email" name="sessionEmail" value="{{ $email }}" />
                        <input type="hidden" id="email" name="email" value="{{ $email }}" />

                    <div id="buttonCadastrar" class="buttonCadastrar">
                        <button>Confirmar senha <i class="fa-solid fa-unlock" style="margin:0 0 0 8px;font-size:17px;background-color:transparent;color:#fff;"></i></button>
                    </div>
                </form>
            @endif
        <!-- Formulário para Administradores -->

        <!-- Formulário para usuário comum! -->
            @if(isset($usuario))
                <div class="message roboto-thin">
                    <div class="message roboto-thin">Para garantir a segurança de nossa comunidade e proteger suas informações, utilizamos a confirmação de código númerico aleatorio via e-mail durante o processo de login.</div>
                    <div class="message roboto-thin">Isso significa que após informar seu e-mail, enviaremos um código de confirmação para o endereço fornecido. Ao informar o código de confirmação contido nesse e-mail, você nos ajudará a verificar sua identidade e a garantir que apenas você tenha acesso à sua conta.</div>
                    <div class="message roboto-thin">Este procedimento simples ajuda a manter nossos serviços seguros e confiáveis para todos os nossos usuários.</div>
                    <div class="message roboto-thin">Agradecemos sua compreensão e cooperação.</div>
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
                @endif
        <!-- Formulário para usuário comum! -->
      </div>
    </div>
  </div>
@endsection
