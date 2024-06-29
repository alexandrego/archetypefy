@extends('layouts.head')

@section('title', 'Questão 26')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question26" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Sua maior qualidade é:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer26')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question26" id="a" value="a" checked /><label for="a">Capacidade de amar profundamente</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question26" id="a" value="a" /><label for="a">Capacidade de amar profundamente</label>
                            </div>
                        @endif

                        @if(session('answer26')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question26" id="b" value="b" checked /><label for="b">Desejo de ajudar os outros</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question26" id="b" value="b" /><label for="b">Desejo de ajudar os outros</label>
                            </div>
                        @endif

                        @if(session('answer26')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question26" id="c" value="c" checked /><label for="c">Determinação e coragem</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question26" id="c" value="c" /><label for="c">Determinação e coragem</label>
                            </div>
                        @endif

                        @if(session('answer26')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question26" id="d" value="d" checked /><label for="d">Curiosidade e busca por novidades</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question26" id="d" value="d" /><label for="d">Curiosidade e busca por novidades</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question25" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <spam>26 - 48</span>
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
