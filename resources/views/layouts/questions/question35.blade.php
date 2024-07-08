@extends('layouts.head')

@section('title', 'Questão 35')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question35" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Sua maior qualidade é:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer35')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question35" id="a" value="a" checked /><label for="a">Capacidade de fazer os outros rirem</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question35" id="a" value="a" /><label for="a">Capacidade de fazer os outros rirem</label>
                            </div>
                        @endif

                        @if(session('answer35')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question35" id="b" value="b" checked /><label for="b">Desejo de ajudar os outros</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question35" id="b" value="b" /><label for="b">Desejo de ajudar os outros</label>
                            </div>
                        @endif

                        @if(session('answer35')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question35" id="c" value="c" checked /><label for="c">Força e determinação</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question35" id="c" value="c" /><label for="c">Força e determinação</label>
                            </div>
                        @endif

                        @if(session('answer35')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question35" id="d" value="d" checked /><label for="d">Curiosidade e inovação</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question35" id="d" value="d" /><label for="d">Curiosidade e inovação</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question34" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>35 - 48</span>
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
