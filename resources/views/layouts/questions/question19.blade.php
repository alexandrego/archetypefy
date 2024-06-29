@extends('layouts.head')

@section('title', 'Questão 19')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question19" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Em um novo ambiente, você:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question19" id="a" value="a" checked /><label for="a">Sente-se animado(a) para explorar</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question19" id="a" value="a" /><label for="a">Sente-se animado(a) para explorar</label>
                            </div>
                        @endif

                        @if(session('answer')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question19" id="b" value="b" checked /><label for="b">Procura ajudar os outros a se adaptarem</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question19" id="b" value="b" /><label for="b">Procura ajudar os outros a se adaptarem</label>
                            </div>
                        @endif

                        @if(session('answer')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question19" id="c" value="c" checked /><label for="c">Toma a liderança para organizar as coisas</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question19" id="c" value="c" /><label for="c">Toma a liderança para organizar as coisas</label>
                            </div>
                        @endif

                        @if(session('answer')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question19" id="d" value="d" checked /><label for="d">Procura um lugar calmo para refletir</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question19" id="d" value="d" /><label for="d">Procura um lugar calmo para refletir</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question18" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <spam>19 - 48</span>
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
