@extends('layouts.head')

@section('title', 'Questão 3')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question3" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Em um conflito, você tende a:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer3')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question3" id="a" value="a" checked /><label for="a">Buscar uma solução pacífica</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question3" id="a" value="a" required /><label for="a">Buscar uma solução pacífica</label>
                            </div>
                        @endif

                        @if(session('answer3')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question3" id="b" value="b" checked /><label for="b">Defender seus interesses com firmeza</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question3" id="b" value="b" required /><label for="b">Defender seus interesses com firmeza</label>
                            </div>
                        @endif

                        @if(session('answer3')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question3" id="c" value="c" checked /><label for="c">Ajudar os outros a encontrar uma solução</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question3" id="c" value="c" required /><label for="c">Ajudar os outros a encontrar uma solução</label>
                            </div>
                        @endif

                        @if(session('answer3')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question3" id="d" value="d" checked /><label for="d">Explorar todas as opções antes de tomar uma decisão</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question3" id="d" value="d" required /><label for="d">Explorar todas as opções antes de tomar uma decisão</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question2" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>3 - 48</span>
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
