@extends('layouts.head')

@section('title', 'Questão 11')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question11" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Seu lema de vida é mais próximo de:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer11')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question11" id="a" value="a" checked /><label for="a">"Vencer é tudo"</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question11" id="a" value="a" /><label for="a">"Vencer é tudo"</label>
                            </div>
                        @endif

                        @if(session('answer11')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question11" id="b" value="b" checked /><label for="b">"Ajudar é o mais importante"</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question11" id="b" value="b" /><label for="b">"Ajudar é o mais importante"</label>
                            </div>
                        @endif

                        @if(session('answer11')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question11" id="c" value="c" checked /><label for="c">"Explorar e descobrir"</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question11" id="c" value="c" /><label for="c">"Explorar e descobrir"</label>
                            </div>
                        @endif

                        @if(session('answer11')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question11" id="d" value="d" checked /><label for="d">"Viver em paz e harmonia"</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question11" id="d" value="d" /><label for="d">"Viver em paz e harmonia"</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question10" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <spam>11 - 48</span>
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
