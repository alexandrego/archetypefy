@extends('layouts.head')

@section('title', 'Questão 36')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question36" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Seu objetivo principal na vida é:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer36')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question36" id="a" value="a" checked /><label for="a">Trazer alegria e leveza aos outros</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question36" id="a" value="a" /><label for="a">Trazer alegria e leveza aos outros</label>
                            </div>
                        @endif

                        @if(session('answer36')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question36" id="b" value="b" checked /><label for="b">Ajudar e cuidar dos outros</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question36" id="b" value="b" /><label for="b">Ajudar e cuidar dos outros</label>
                            </div>
                        @endif

                        @if(session('answer36')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question36" id="c" value="c" checked /><label for="c">Superar desafios e vencer</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question36" id="c" value="c" /><label for="c">Superar desafios e vencer</label>
                            </div>
                        @endif

                        @if(session('answer36')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question36" id="d" value="d" checked /><label for="d">Descobrir e explorar novas possibilidades</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question36" id="d" value="d" /><label for="d">Descobrir e explorar novas possibilidades</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question35" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <spam>36 - 48</span>
                    </div>
                    <div id="btnQuestion" class="btnQuestion">
                        <input type="submit" value="Avançar" class="btnS"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
@endsection
