@extends('layouts.head')

@section('title', 'Questão 7')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question7" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Em relacionamentos, você valoriza mais:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer7')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question7" id="a" value="a" checked /><label for="a">Empatia e compreensão</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question7" id="a" value="a" required /><label for="a">Empatia e compreensão</label>
                            </div>
                        @endif

                        @if(session('answer7')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question7" id="b" value="b" checked /><label for="b">Força e determinação</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question7" id="b" value="b" required /><label for="b">Força e determinação</label>
                            </div>
                        @endif

                        @if(session('answer7')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question7" id="c" value="c" checked /><label for="c">Lealdade e apoio</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question7" id="c" value="c" required /><label for="c">Lealdade e apoio</label>
                            </div>
                        @endif

                        @if(session('answer7')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question7" id="d" value="d" checked /><label for="d">Aventura e novidade</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question7" id="d" value="d" required /><label for="d">Aventura e novidade</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question6" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>7 - 48</span>
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
