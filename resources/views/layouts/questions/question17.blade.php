@extends('layouts.head')

@section('title', 'Questão 17')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question17" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Você se sente mais vivo(a) quando:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer17')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question17" id="a" value="a" checked /><label for="a">Está descobrindo novos lugares e culturas</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question17" id="a" value="a" /><label for="a">Está descobrindo novos lugares e culturas</label>
                            </div>
                        @endif

                        @if(session('answer17')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question17" id="b" value="b" checked /><label for="b">Está ajudando alguém em necessidade</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question17" id="b" value="b" /><label for="b">Está ajudando alguém em necessidade</label>
                            </div>
                        @endif

                        @if(session('answer17')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question17" id="c" value="c" checked /><label for="c">Está ganhando uma competição</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question17" id="c" value="c" /><label for="c">Está ganhando uma competição</label>
                            </div>
                        @endif

                        @if(session('answer17')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question17" id="d" value="d" checked /><label for="d">Está meditando ou relaxando</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question17" id="d" value="d" /><label for="d">Está meditando ou relaxando</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question16" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>17 - 48</span>
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
