@extends('layouts.head')

@section('title', 'Iniciar Teste')

@section('content')
  <div class="content">
    <div class="contentHome">
            @auth
                <div class="logout">
                    <form action="/atention" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-danger"> <img src="src/assets/img/back.svg" class="btnBack" />Voltar</button>
                    </form>
                </div>
            @endauth

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

      <div class="formulario">
        <form action="/question1" method="GET">
          <div class="message roboto-thin messageStartTest">
            <p>Bem vindo a</p>
            <p><span class="wordOrange">Archetypefy</span></p>
            <p>Descubra seu arquétipo e desbloqueie</p>
            <p>Seu potencial inexplorado</p>
            <p>Vamos começar seu teste?</p>
          </div>

          <div class="buttonCadastrar">
            <button>Começar teste <img src="src/assets/img/back.svg" class="btnGo" /></button>
          </div>
        </form>
      </div>

      <div class="suporte">
        <div class="suporteName">
            Suporte
        </div>
        <div class="suportePhoto">
            <img src="src/assets/img/suporte.svg" />
        </div>
        <div class="suporteAction">
            Conversar via WhatsApp
        </div>
    </div>

    </div>
  </div>
@endsection
