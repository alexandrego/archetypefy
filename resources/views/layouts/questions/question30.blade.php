@extends('layouts.head')

@section('title', 'Questão 30')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question30" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Sua maior força é:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer30')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question30" id="a" value="a" checked /><label for="a">Criatividade e inovação</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question30" id="a" value="a" /><label for="a">Criatividade e inovação</label>
                            </div>
                        @endif

                        @if(session('answer30')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question30" id="b" value="b" checked /><label for="b">Compaixão e empatia</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question30" id="b" value="b" /><label for="b">Compaixão e empatia</label>
                            </div>
                        @endif

                        @if(session('answer30')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question30" id="c" value="c" checked /><label for="c">Determinação e resiliência</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question30" id="c" value="c" /><label for="c">Determinação e resiliência</label>
                            </div>
                        @endif

                        @if(session('answer30')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question30" id="d" value="d" checked /><label for="d">Curiosidade e exploração</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question30" id="d" value="d" /><label for="d">Curiosidade e exploração</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question29" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <spam>30 - 48</span>
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
