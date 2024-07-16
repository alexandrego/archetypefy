@extends('layouts.head')

@section('title', 'Questão 5')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question5" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Em situações difíceis, você tende a:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer5')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question5" id="a" value="a" checked /><label for="a">Sentir-se sozinho(a) e desamparado(a)</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question5" id="a" value="a" required /><label for="a">Sentir-se sozinho(a) e desamparado(a)</label>
                            </div>
                        @endif

                        @if(session('answer5')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question5" id="b" value="b" checked /><label for="b">Procurar maneiras de superar o desafio</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question5" id="b" value="b" required /><label for="b">Procurar maneiras de superar o desafio</label>
                            </div>
                        @endif

                        @if(session('answer5')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question5" id="c" value="c" checked /><label for="c">Ajudar os outros a se sentirem melhor</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question5" id="c" value="c" required /><label for="c">Ajudar os outros a se sentirem melhor</label>
                            </div>
                        @endif

                        @if(session('answer5')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question5" id="d" value="d" checked /><label for="d">Procurar novas oportunidades</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question5" id="d" value="d" required /><label for="d">Procurar novas oportunidades</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question4" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>5 - 48</span>
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
