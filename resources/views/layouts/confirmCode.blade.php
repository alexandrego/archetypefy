@extends('layouts.head')

@section('title', 'Código de verificação')

@section('content')
    <div class="content">
        <div class="contentHome">

            <div class="logo">
                <img src="src/assets/img/logo.svg" />
            </div>

            <div class="formulario">

                    @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    @php
                        $user = session('user');
                        $whoIs = session('whoIs');
                    @endphp

                    @if(empty($user) && empty($whoIs))
                        <script>
                            window.location.href = "{{ route('login') }}"; // Redireciona para a página de login
                        </script>
                    @endif

                <!-- Formulário para criar senha -->
                    @if($whoIs == 'admNoPassword')
                        <div class="message roboto-thin">
                            Bem vindo Sr. {{ $user->name }}, vamos criar a sua senha de acesso ao sistema, assim toda vez que você voltar basta digitar a mesma senha e eu libero seu acesso.
                        </div>

                        <div class="message roboto-thin">
                            A senha é livre pode conter qualquer caracter e precisa ter no minimo 4 e no máximo 8 digitos.
                        </div>

                        <form action="/createPassword" method="POST" onsubmit="return verifyPassword()">
                            @csrf
                            <fieldset class="fieldsetConfirmCode">
                                <legend>Crie a senha</legend>
                                <i class="fa-solid fa-key" style="margin: 0 8px 0 0;border-right: 1px solid;padding: 0 8px 0 0;"></i>
                                <input type="password" id="crieSenha" name="crieSenha" placeholder="Crie a senha" minlength="4" maxlength="8" required />
                            </fieldset>

                            <fieldset class="fieldsetConfirmCode">
                                <legend>Confirme a senha</legend>
                                <i class="fa-solid fa-key" style="margin: 0 8px 0 0;border-right: 1px solid;padding: 0 8px 0 0;"></i>
                                <input type="password" id="confirmSenha" name="confirmSenha" placeholder="Confirme a senha" minlength="4" maxlength="8" required />
                            </fieldset>

                            <input type="hidden" id="email" name="sessionEmail" value="{{ $user->email }}" />
                            <input type="hidden" id="email" name="email" value="{{ $user->email }}" />
                            <input type="hidden" id="whoIs" name="whoIs" value="{{ $whoIs }}" />

                            <div id="buttonCadastrar" class="buttonCadastrar">
                                <button>Cadastrar senha <i class="fa-solid fa-unlock" style="margin:0 0 0 8px;font-size:17px;background-color:transparent;color:#fff;"></i></button>
                            </div>
                        </form>
                    @endif
                <!-- Formulário para criar senha -->

                <!-- Formulário para Administradores -->
                    @if($whoIs == 'adm')
                        <div class="message roboto-thin">
                            Bem vindo Sr. <span class="resultadoFinal">{{ $user->name }}</span>
                        </div>

                        <form action="/checkCode" method="POST" onsubmit="confSec()">
                            @csrf
                            <fieldset class="fieldsetConfirmCode">
                                <legend>Informe sua senha</legend>
                                <i class="fa-solid fa-key" style="margin: 0 8px 0 0;border-right: 1px solid;padding: 0 8px 0 0;"></i>
                                <input type="password" id="confirmCode" name="confirmCode" placeholder="Informe a sua senha" minlength="4" maxlength="8" required />
                            </fieldset>

                            <input type="hidden" id="email" name="sessionEmail" value="{{ $user->email }}" />
                            <input type="hidden" id="email" name="email" value="{{ $user->email }}" />
                            <input type="hidden" id="whoIs" name="whoIs" value="{{ $whoIs }}" />

                            <div id="buttonCadastrar" class="buttonCadastrar">
                                <button>Confirmar senha <i class="fa-solid fa-unlock" style="margin:0 0 0 8px;font-size:17px;background-color:transparent;color:#fff;"></i></button>
                            </div>
                        </form>
                    @endif
                <!-- Formulário para Administradores -->

                <!-- Formulário para usuário comum! -->
                    @if($whoIs == 'normalUser')
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
                            <input type="hidden" id="email" name="sessionEmail" value="{{ $user->email }}" />
                            <input type="hidden" id="email" name="email" value="{{ $user->email }}" />
                            <input type="hidden" id="whoIs" name="whoIs" value="{{ $whoIs }}" />
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
