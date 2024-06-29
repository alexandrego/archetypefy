@extends('layouts.head')

@section('title', 'Questão 24')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question24" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Sua maior realização seria:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer24')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question24" id="a" value="a" checked /><label for="a">Derrubar uma grande injustiça</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question24" id="a" value="a" /><label for="a">Derrubar uma grande injustiça</label>
                            </div>
                        @endif

                        @if(session('answer24')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question24" id="b" value="b" checked /><label for="b">Ajudar um grande número de pessoas</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question24" id="b" value="b" /><label for="b">Ajudar um grande número de pessoas</label>
                            </div>
                        @endif

                        @if(session('answer24')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question24" id="c" value="c" checked /><label for="c">Ganhar uma competição importante</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question24" id="c" value="c" /><label for="c">Ganhar uma competição importante</label>
                            </div>
                        @endif

                        @if(session('answer24')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question24" id="d" value="d" checked /><label for="d">Encontrar paz interior</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question24" id="d" value="d" /><label for="d">Encontrar paz interior</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question23" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <spam>24 - 48</span>
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
