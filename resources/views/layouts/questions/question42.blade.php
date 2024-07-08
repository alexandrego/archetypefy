@extends('layouts.head')

@section('title', 'Questão 42')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question42" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Você se sente mais realizado(a) quando:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer42')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question42" id="a" value="a" checked /><label for="a">Está transformando algo para melhor</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question42" id="a" value="a" /><label for="a">Está transformando algo para melhor</label>
                            </div>
                        @endif

                        @if(session('answer42')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question42" id="b" value="b" checked /><label for="b">Está ajudando alguém a mudar sua vida</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question42" id="b" value="b" /><label for="b">Está ajudando alguém a mudar sua vida</label>
                            </div>
                        @endif

                        @if(session('answer42')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question42" id="c" value="c" checked /><label for="c">Está vencendo um grande desafio</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question42" id="c" value="c" /><label for="c">Está vencendo um grande desafio</label>
                            </div>
                        @endif

                        @if(session('answer42')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question42" id="d" value="d" checked /><label for="d">Está descobrindo algo novo</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question42" id="d" value="d" /><label for="d">Está descobrindo algo novo</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question41" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>42 - 48</span>
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
