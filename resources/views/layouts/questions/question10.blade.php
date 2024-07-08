@extends('layouts.head')

@section('title', 'Questão 10')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question10" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Você se sente mais satisfeito(a) quando:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer10')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question10" id="a" value="a" checked /><label for="a">Vence um desafio difícil</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question10" id="a" value="a" /><label for="a">Vence um desafio difícil</label>
                            </div>
                        @endif

                        @if(session('answer10')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question10" id="b" value="b" checked /><label for="b">Ajuda alguém em necessidade</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question10" id="b" value="b" /><label for="b">Ajuda alguém em necessidade</label>
                            </div>
                        @endif

                        @if(session('answer10')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question10" id="c" value="c" checked /><label for="c">Descobre algo novo</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question10" id="c" value="c" /><label for="c">Descobre algo novo</label>
                            </div>
                        @endif

                        @if(session('answer10')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question10" id="d" value="d" checked /><label for="d">Sente-se em paz consigo mesmo(a)</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question10" id="d" value="d" /><label for="d">Sente-se em paz consigo mesmo(a)</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question9" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>10 - 48</span>
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
