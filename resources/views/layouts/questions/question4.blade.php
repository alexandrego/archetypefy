@extends('layouts.head')

@section('title', 'Questão 4')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question4" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Seu objetivo principal na vida é:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question4" id="a" value="a" checked /><label for="a">Encontrar a felicidade e a simplicidade</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question4" id="a" value="a" /><label for="a">Encontrar a felicidade e a simplicidade</label>
                            </div>
                        @endif

                        @if(session('answer')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question4" id="b" value="b" checked /><label for="b">Ser reconhecido(a) por suas conquistas</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question4" id="b" value="b" /><label for="b">Ser reconhecido(a) por suas conquistas</label>
                            </div>
                        @endif

                        @if(session('answer')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question4" id="c" value="c" checked /><label for="c">Ajudar e proteger os outros</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question4" id="c" value="c" /><label for="c">Ajudar e proteger os outros</label>
                            </div>
                        @endif

                        @if(session('answer')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question4" id="d" value="d" checked /><label for="d">Descobrir novos horizontes e aventuras</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question4" id="d" value="d" /><label for="d">Descobrir novos horizontes e aventuras</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question3" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <spam>4 - 48</span>
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
