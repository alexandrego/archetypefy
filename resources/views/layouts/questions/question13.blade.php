13@extends('layouts.head')

@section('title', 'Questão 13')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question13" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Quando vê alguém sofrendo, você:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer13')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question13" id="a" value="a" checked /><label for="a">Sente a necessidade de ajudar imediatamente</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question13" id="a" value="a" /><label for="a">Sente a necessidade de ajudar imediatamente</label>
                            </div>
                        @endif

                        @if(session('answer13')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question13" id="b" value="b" checked /><label for="b">Pensa em como resolver o problema</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question13" id="b" value="b" /><label for="b">Pensa em como resolver o problema</label>
                            </div>
                        @endif

                        @if(session('answer13')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question13" id="c" value="c" checked /><label for="c">Procura distrair a pessoa com algo novo</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question13" id="c" value="c" /><label for="c">Procura distrair a pessoa com algo novo</label>
                            </div>
                        @endif

                        @if(session('answer13')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question13" id="d" value="d" checked /><label for="d">Tenta acalmar e confortar</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question13" id="d" value="d" /><label for="d">Tenta acalmar e confortar</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question12" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <spam>13 - 48</span>
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
