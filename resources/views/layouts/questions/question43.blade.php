@extends('layouts.head')

@section('title', 'Questão 43')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question43" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Sua maior qualidade é:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer43')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question43" id="a" value="a" checked /><label for="a">Capacidade de transformar e inovar</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question43" id="a" value="a" /><label for="a">Capacidade de transformar e inovar</label>
                            </div>
                        @endif

                        @if(session('answer43')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question43" id="b" value="b" checked /><label for="b">Desejo de ajudar os outros</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question43" id="b" value="b" /><label for="b">Desejo de ajudar os outros</label>
                            </div>
                        @endif

                        @if(session('answer43')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question43" id="c" value="c" checked /><label for="c">Força e determinação</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question43" id="c" value="c" /><label for="c">Força e determinação</label>
                            </div>
                        @endif

                        @if(session('answer43')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question43" id="d" value="d" checked /><label for="d">Curiosidade e exploração</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question43" id="d" value="d" /><label for="d">Curiosidade e exploração</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question42" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <spam>43 - 48</span>
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
