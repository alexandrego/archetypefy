@extends('layouts.head')

@section('title', 'Questão 1')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question1" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Você se sente mais realizado(a) quando:</span>
                    </div>

                    <div class="respostas">

                        <!-- @if(session('answer'))
                            <p>Resposta selecionada: {{ session('answer') }}</p>
                        @endif -->

                        @if(session('answer')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question1" id="a" value="a" checked /><label for="a">Ganha uma competição ou um desafio</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question1" id="a" value="a" /><label for="a">Ganha uma competição ou um desafio</label>
                            </div>
                        @endif

                        @if(session('answer')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question1" id="b" value="b" checked /><label for="b">Explora novos lugares e experiências</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question1" id="b" value="b" /><label for="b">Explora novos lugares e experiências</label>
                            </div>
                        @endif

                        @if(session('answer')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question1" id="c" value="c" checked /><label for="c">Ajuda os outros sem esperar nada em troca</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question1" id="c" value="c" /><label for="c">Ajuda os outros sem esperar nada em troca</label>
                            </div>
                        @endif

                        @if(session('answer')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question1" id="d" value="d" checked /><label for="d">Encontra harmonia e paz interior</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question1" id="d" value="d" /><label for="d">Encontra harmonia e paz interior</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/startTest" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>1 - 48</span>
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
