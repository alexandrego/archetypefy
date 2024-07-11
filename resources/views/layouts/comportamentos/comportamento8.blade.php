@extends('layouts.head')

@section('title', 'Comportamentos - Questão 8')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/comportamento9" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Escolha a alternativa que mais se aproxima de QUEM VOCE É.</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer')=='a')
                            <div class="questions checked">
                                <input type="radio" name="temper" id="a" value="a" checked /><label for="a">OTIMISTA</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="temper" id="a" value="a" required/><label for="a">OTIMISTA</label>
                            </div>
                        @endif

                        @if(session('answer')=='b')
                            <div class="questions checked">
                                <input type="radio" name="temper" id="b" value="b" checked /><label for="b">FRANCO</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="temper" id="b" value="b" required/><label for="b">FRANCO</label>
                            </div>
                        @endif

                        @if(session('answer')=='c')
                            <div class="questions checked">
                                <input type="radio" name="temper" id="c" value="c" checked /><label for="c">ORGANIZADO</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="temper" id="c" value="c" required/><label for="c">ORGANIZADO</label>
                            </div>
                        @endif

                        @if(session('answer')=='d')
                            <div class="questions checked">
                                <input type="radio" name="temper" id="d" value="d" checked /><label for="d">PRESTATIVO</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="temper" id="d" value="d" required/><label for="d">PRESTATIVO</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/comportamento7" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>8 - 40</span>
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
