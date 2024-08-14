@extends('layouts.head')

@section('title', 'Iniciar Teste')

@section('content')
  <div class="content">
    <div class="contentHome">
            @auth
                <div class="logout">
                    <form action="/atention" method="GET">
                        @csrf
                        <!-- <button type="submit" class="btn btn-danger"> <img src="src/assets/img/back.svg" class="btnBackStartTest" />Voltar</button> -->
                        <button type="submit" class="btn btn-danger"> <i class="fa-solid fa-circle-left" style="margin: 0 8px 0 0;"></i>Voltar</button>
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
            <button>Começar teste <i class="fa-solid fa-face-grin-stars fa-bounce" style="background-color:transparent;margin:0 0 0 8px;font-size:17px;color:#fff;"></i></button>
          </div>
        </form>
      </div>

      <x-suporte />

    </div>
  </div>
@endsection
