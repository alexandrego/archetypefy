@extends('layouts.head')

@section('title', 'Questão 27')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question27" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Em um relacionamento, você valoriza mais:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer27')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question27" id="a" value="a" checked /><label for="a">Conexão emocional profunda</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question27" id="a" value="a" /><label for="a">Conexão emocional profunda</label>
                            </div>
                        @endif

                        @if(session('answer27')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question27" id="b" value="b" checked /><label for="b">Apoio e cuidado mútuo</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question27" id="b" value="b" /><label for="b">Apoio e cuidado mútuo</label>
                            </div>
                        @endif

                        @if(session('answer27')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question27" id="c" value="c" checked /><label for="c">Crescimento e desenvolvimento</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question27" id="c" value="c" /><label for="c">Crescimento e desenvolvimento</label>
                            </div>
                        @endif

                        @if(session('answer27')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question27" id="d" value="d" checked /><label for="d">Novidade e aventura</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question27" id="d" value="d" /><label for="d">Novidade e aventura</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question26" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <spam>27 - 48</span>
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
