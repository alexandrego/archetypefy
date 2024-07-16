@extends('layouts.head')

@section('title', 'Questão 8')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question8" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Quando enfrenta um problema, você:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer8')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question8" id="a" value="a" checked /><label for="a">Sente-se vulnerável e procura apoio</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question8" id="a" value="a" required /><label for="a">Sente-se vulnerável e procura apoio</label>
                            </div>
                        @endif

                        @if(session('answer8')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question8" id="b" value="b" checked /><label for="b">Enfrenta de frente e busca resolver</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question8" id="b" value="b" required /><label for="b">Enfrenta de frente e busca resolver</label>
                            </div>
                        @endif

                        @if(session('answer8')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question8" id="c" value="c" checked /><label for="c">Oferece ajuda aos outros</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question8" id="c" value="c" required /><label for="c">Oferece ajuda aos outros</label>
                            </div>
                        @endif

                        @if(session('answer8')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question8" id="d" value="d" checked /><label for="d">Procura alternativas criativas</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question8" id="d" value="d" required /><label for="d">Procura alternativas criativas</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question7" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>8 - 48</span>
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
