@extends('layouts.head')

@section('title', 'Questão 29')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question29" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Você se sente melhor quando:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer29')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question29" id="a" value="a" checked /><label for="a">Está criando algo novo</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question29" id="a" value="a" required/><label for="a">Está criando algo novo</label>
                            </div>
                        @endif

                        @if(session('answer29')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question29" id="b" value="b" checked /><label for="b">Está ajudando alguém a alcançar seus objetivos</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question29" id="b" value="b" required/><label for="b">Está ajudando alguém a alcançar seus objetivos</label>
                            </div>
                        @endif

                        @if(session('answer29')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question29" id="c" value="c" checked /><label for="c">Está vencendo um desafio</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question29" id="c" value="c" required/><label for="c">Está vencendo um desafio</label>
                            </div>
                        @endif

                        @if(session('answer29')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question29" id="d" value="d" checked /><label for="d">Está explorando novas ideias</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question29" id="d" value="d" required/><label for="d">Está explorando novas ideias</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question28" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>29 - 48</span>
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
