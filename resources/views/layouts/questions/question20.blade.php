@extends('layouts.head')

@section('title', 'Questão 20')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question20" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Sua filosofia de vida é mais próxima de:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer20')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question20" id="a" value="a" checked /><label for="a">"A vida é uma aventura"</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question20" id="a" value="a" required/><label for="a">"A vida é uma aventura"</label>
                            </div>
                        @endif

                        @if(session('answer20')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question20" id="b" value="b" checked /><label for="b">"Ajudar os outros é essencial"</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question20" id="b" value="b" required/><label for="b">"Ajudar os outros é essencial"</label>
                            </div>
                        @endif

                        @if(session('answer20')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question20" id="c" value="c" checked /><label for="c">"A vitória é o que importa"</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question20" id="c" value="c" required/><label for="c">"A vitória é o que importa"</label>
                            </div>
                        @endif

                        @if(session('answer20')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question20" id="d" value="d" checked /><label for="d">"Paz e harmonia são tudo"</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question20" id="d" value="d" required/><label for="d">"Paz e harmonia são tudo"</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question19" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>20 - 48</span>
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
