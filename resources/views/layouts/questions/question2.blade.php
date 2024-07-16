@extends('layouts.head')

@section('title', 'Questão 2')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question2" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Você acredita que a vida:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer2')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question2" id="a" value="a" checked /><label for="a">É uma jornada cheia de descobertas</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question2" id="a" value="a" required /><label for="a">É uma jornada cheia de descobertas</label>
                            </div>
                        @endif

                        @if(session('answer2')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question2" id="b" value="b" checked /><label for="b">É um campo de batalha onde os fortes vencem</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question2" id="b" value="b" required /><label for="b">É um campo de batalha onde os fortes vencem</label>
                            </div>
                        @endif

                        @if(session('answer2')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question2" id="c" value="c" checked /><label for="c">Deve ser vivida de maneira simples e honesta</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question2" id="c" value="c" required /><label for="c">Deve ser vivida de maneira simples e honesta</label>
                            </div>
                        @endif

                        @if(session('answer2')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question2" id="d" value="d" checked /><label for="d">É um lugar onde devemos ajudar e cuidar dos outros</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question2" id="d" value="d" required /><label for="d">É um lugar onde devemos ajudar e cuidar dos outros</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question1" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>2 - 48</span>
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
