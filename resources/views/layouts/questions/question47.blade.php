@extends('layouts.head')

@section('title', 'Questão 47')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question47" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Sua maior aptidão é:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer47')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question47" id="a" value="a" checked /><label for="a">Capacidade de liderar e organizar</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question47" id="a" value="a" required/><label for="a">Capacidade de liderar e organizar</label>
                            </div>
                        @endif

                        @if(session('answer47')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question47" id="b" value="b" checked /><label for="b">Desejo de ajudar os outros</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question47" id="b" value="b" required/><label for="b">Desejo de ajudar os outros</label>
                            </div>
                        @endif

                        @if(session('answer47')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question47" id="c" value="c" checked /><label for="c">Inovação e exploração</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question47" id="c" value="c" required/><label for="c">Inovação e exploração</label>
                            </div>
                        @endif

                        @if(session('answer47')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question47" id="d" value="d" checked /><label for="d">Empatia e compaixão</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question47" id="d" value="d" required/><label for="d">Empatia e compaixão</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question46" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>47 - 48</span>
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
