@extends('layouts.head')

@section('title', 'Temperamentos - Questão 2')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/temper3" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>O que geralmente te motiva a participar de eventos sociais?</span>
                    </div>

                    <div class="respostas">

                        <!-- @if(session('answer'))
                            <p>Resposta selecionada: {{ session('answer') }}</p>
                        @endif -->

                        @if(session('answer')=='a')
                            <div class="questions checked">
                                <input type="radio" name="temper" id="a" value="a" checked /><label for="a">A oportunidade de fazer novos amigos</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="temper" id="a" value="a" /><label for="a">A oportunidade de fazer novos amigos</label>
                            </div>
                        @endif

                        @if(session('answer')=='b')
                            <div class="questions checked">
                                <input type="radio" name="temper" id="b" value="b" checked /><label for="b">A curiosidade sobre diferentes perspectivas</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="temper" id="b" value="b" /><label for="b">A curiosidade sobre diferentes perspectivas</label>
                            </div>
                        @endif

                        @if(session('answer')=='c')
                            <div class="questions checked">
                                <input type="radio" name="temper" id="c" value="c" checked /><label for="c">O desejo de compartilhar experiências e histórias</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="temper" id="c" value="c" /><label for="c">O desejo de compartilhar experiências e histórias</label>
                            </div>
                        @endif

                        @if(session('answer')=='d')
                            <div class="questions checked">
                                <input type="radio" name="temper" id="d" value="d" checked /><label for="d">A chance de relaxar e aproveitar o momento</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="temper" id="d" value="d" /><label for="d">A chance de relaxar e aproveitar o momento</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/temper1" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>2 - 20</span>
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
