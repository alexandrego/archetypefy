@extends('layouts.head')

@section('title', 'Questão 46')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question46" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Você se sente bem melhor quando:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question46" id="a" value="a" checked /><label for="a">Está no controle de uma situação</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question46" id="a" value="a" /><label for="a">Está no controle de uma situação</label>
                            </div>
                        @endif

                        @if(session('answer')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question46" id="b" value="b" checked /><label for="b">Está ajudando alguém a se organizar</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question46" id="b" value="b" /><label for="b">Está ajudando alguém a se organizar</label>
                            </div>
                        @endif

                        @if(session('answer')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question46" id="c" value="c" checked /><label for="c">Está explorando novas estratégias</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question46" id="c" value="c" /><label for="c">Está explorando novas estratégias</label>
                            </div>
                        @endif

                        @if(session('answer')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question46" id="d" value="d" checked /><label for="d">Está promovendo a paz e o entendimento</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question46" id="d" value="d" /><label for="d">Está promovendo a paz e o entendimento</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question45" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <spam>46 - 48</span>
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
