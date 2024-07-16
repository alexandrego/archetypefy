@extends('layouts.head')

@section('title', 'Questão 22')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question22" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Você se sente mais autêntico(a) quando:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer22')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question22" id="a" value="a" checked /><label for="a">Está desafiando confrontando as regras</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question22" id="a" value="a" required/><label for="a">Está desafiando confrontando as regras</label>
                            </div>
                        @endif

                        @if(session('answer22')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question22" id="b" value="b" checked /><label for="b">Está ajudando alguém em necessidade</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question22" id="b" value="b" required/><label for="b">Está ajudando alguém em necessidade</label>
                            </div>
                        @endif

                        @if(session('answer22')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question22" id="c" value="c" checked /><label for="c">Está ganhando uma disputa</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question22" id="c" value="c" required/><label for="c">Está ganhando uma disputa</label>
                            </div>
                        @endif

                        @if(session('answer22')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question22" id="d" value="d" checked /><label for="d">Está em paz consigo mesmo(a)</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question22" id="d" value="d" required/><label for="d">Está em paz consigo mesmo(a)</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question21" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>22 - 48</span>
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
