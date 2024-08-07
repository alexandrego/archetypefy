@extends('layouts.head')

@section('title', 'Questão 38')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question38" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Você se identifica melhor com:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer38')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question38" id="a" value="a" checked /><label for="a">Conhecimento e sabedoria</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question38" id="a" value="a" required/><label for="a">Conhecimento e sabedoria</label>
                            </div>
                        @endif

                        @if(session('answer38')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question38" id="b" value="b" checked /><label for="b">Empatia e compaixão</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question38" id="b" value="b" required/><label for="b">Empatia e compaixão</label>
                            </div>
                        @endif

                        @if(session('answer38')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question38" id="c" value="c" checked /><label for="c">Determinação e coragem</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question38" id="c" value="c" required/><label for="c">Determinação e coragem</label>
                            </div>
                        @endif

                        @if(session('answer38')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question38" id="d" value="d" checked /><label for="d">Curiosidade e exploração</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question38" id="d" value="d" required/><label for="d">Curiosidade e exploração</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question37" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>38 - 48</span>
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
