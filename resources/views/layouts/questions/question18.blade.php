@extends('layouts.head')

@section('title', 'Questão 18')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question18" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Sua maior força é:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer18')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question18" id="a" value="a" checked /><label for="a">Coragem para explorar o desconhecido</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question18" id="a" value="a" required/><label for="a">Coragem para explorar o desconhecido</label>
                            </div>
                        @endif

                        @if(session('answer18')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question18" id="b" value="b" checked /><label for="b">Compaixão e empatia</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question18" id="b" value="b" required/><label for="b">Compaixão e empatia</label>
                            </div>
                        @endif

                        @if(session('answer18')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question18" id="c" value="c" checked /><label for="c">Determinação e força</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question18" id="c" value="c" required/><label for="c">Determinação e força</label>
                            </div>
                        @endif

                        @if(session('answer18')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question18" id="d" value="d" checked /><label for="d">Serenidade e paz interior</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question18" id="d" value="d" required/><label for="d">Serenidade e paz interior</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question17" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>18 - 48</span>
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
