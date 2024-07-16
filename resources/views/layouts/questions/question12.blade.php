@extends('layouts.head')

@section('title', 'Questão 12')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question12" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Em momentos de crise, você:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer12')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question12" id="a" value="a" checked /><label for="a">Luta com todas as suas forças</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question12" id="a" value="a" required/><label for="a">Luta com todas as suas forças</label>
                            </div>
                        @endif

                        @if(session('answer12')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question12" id="b" value="b" checked /><label for="b">Oferece suporte emocional</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question12" id="b" value="b" required/><label for="b">Oferece suporte emocional</label>
                            </div>
                        @endif

                        @if(session('answer12')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question12" id="c" value="c" checked /><label for="c">Procura novas soluções</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question12" id="c" value="c" required/><label for="c">Procura novas soluções</label>
                            </div>
                        @endif

                        @if(session('answer12')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question12" id="d" value="d" checked /><label for="d">Tenta manter a calma e a serenidade</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question12" id="d" value="d" required/><label for="d">Tenta manter a calma e a serenidade</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question11" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>12 - 48</span>
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
