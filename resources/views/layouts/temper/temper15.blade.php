@extends('layouts.head')

@section('title', 'Temperamentos - Questão 15')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/temper16" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Como você lida com críticas pessoais ou feedback negativo?</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer')=='a')
                            <div class="questions checked">
                                <input type="radio" name="temper" id="a" value="a" checked /><label for="a">Com sensibilidade, buscando melhorar sem perder a autenticidade</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="temper" id="a" value="a" required/><label for="a">Com sensibilidade, buscando melhorar sem perder a autenticidade</label>
                            </div>
                        @endif

                        @if(session('answer')=='b')
                            <div class="questions checked">
                                <input type="radio" name="temper" id="b" value="b" checked /><label for="b">Preferindo evitar situações que possam gerar críticas</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="temper" id="b" value="b" required/><label for="b">Preferindo evitar situações que possam gerar críticas</label>
                            </div>
                        @endif

                        @if(session('answer')=='c')
                            <div class="questions checked">
                                <input type="radio" name="temper" id="c" value="c" checked /><label for="c">Avaliando cuidadosamente a validade das críticas antes de responder</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="temper" id="c" value="c" required/><label for="c">Avaliando cuidadosamente a validade das críticas antes de responder</label>
                            </div>
                        @endif

                        @if(session('answer')=='d')
                            <div class="questions checked">
                                <input type="radio" name="temper" id="d" value="d" checked /><label for="d">Com interesse em entender os motivos por trás das críticas</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="temper" id="d" value="d" required/><label for="d">Com interesse em entender os motivos por trás das críticas</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/temper14" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>15 - 20</span>
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
