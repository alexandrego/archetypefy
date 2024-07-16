@extends('layouts.head')

@section('title', 'Questão 33')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question33" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Quando está em grupo, você prefere:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer33')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question33" id="a" value="a" checked /><label for="a">Fazer os outros rirem</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question33" id="a" value="a" required/><label for="a">Fazer os outros rirem</label>
                            </div>
                        @endif

                        @if(session('answer33')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question33" id="b" value="b" checked /><label for="b">Ajudar os outros a se sentirem bem</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question33" id="b" value="b" required/><label for="b">Ajudar os outros a se sentirem bem</label>
                            </div>
                        @endif

                        @if(session('answer33')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question33" id="c" value="c" checked /><label for="c">Liderar o grupo</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question33" id="c" value="c" required/><label for="c">Liderar o grupo</label>
                            </div>
                        @endif

                        @if(session('answer33')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question33" id="d" value="d" checked /><label for="d">Explorar novas ideias e atividades</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question33" id="d" value="d" required/><label for="d">Explorar novas ideias e atividades</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question32" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>33 - 48</span>
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
