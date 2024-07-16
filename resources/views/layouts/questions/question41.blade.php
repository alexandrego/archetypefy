@extends('layouts.head')

@section('title', 'Questão 41')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question41" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Quando enfrenta um desafio, você:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer41')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question41" id="a" value="a" checked /><label for="a">Procura soluções inovadoras</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question41" id="a" value="a" required/><label for="a">Procura soluções inovadoras</label>
                            </div>
                        @endif

                        @if(session('answer41')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question41" id="b" value="b" checked /><label for="b">Ajuda os outros a superarem</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question41" id="b" value="b" required/><label for="b">Ajuda os outros a superarem</label>
                            </div>
                        @endif

                        @if(session('answer41')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question41" id="c" value="c" checked /><label for="c">Enfrenta com força e determinação</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question41" id="c" value="c" required/><label for="c">Enfrenta com força e determinação</label>
                            </div>
                        @endif

                        @if(session('answer41')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question41" id="d" value="d" checked /><label for="d">Explora todas as opções disponíveis</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question41" id="d" value="d" required/><label for="d">Explora todas as opções disponíveis</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question40" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>41 - 48</span>
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
