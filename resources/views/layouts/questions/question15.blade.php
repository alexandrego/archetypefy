@extends('layouts.head')

@section('title', 'Questão 15')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question15" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Em situações de conflito, você tende a:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question15" id="a" value="a" checked /><label for="a">Mediar e ajudar a resolver</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question15" id="a" value="a" /><label for="a">Mediar e ajudar a resolver</label>
                            </div>
                        @endif

                        @if(session('answer')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question15" id="b" value="b" checked /><label for="b">Lutar pelos seus direitos</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question15" id="b" value="b" /><label for="b">Lutar pelos seus direitos</label>
                            </div>
                        @endif

                        @if(session('answer')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question15" id="c" value="c" checked /><label for="c">Manter a calma e buscar entendimento</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question15" id="c" value="c" /><label for="c">Manter a calma e buscar entendimento</label>
                            </div>
                        @endif

                        @if(session('answer')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question15" id="d" value="d" checked /><label for="d">Procurar alternativas criativas</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question15" id="d" value="d" /><label for="d">Procurar alternativas criativas</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question14" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <spam>15 - 48</span>
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
