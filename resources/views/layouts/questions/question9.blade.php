@extends('layouts.head')

@section('title', 'Questão 9')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question9" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Em uma equipe, você prefere:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer9')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question9" id="a" value="a" checked /><label for="a">Liderar e tomar decisões</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question9" id="a" value="a" /><label for="a">Liderar e tomar decisões</label>
                            </div>
                        @endif

                        @if(session('answer9')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question9" id="b" value="b" checked /><label for="b">Apoiar e ajudar os outros</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question9" id="b" value="b" /><label for="b">Apoiar e ajudar os outros</label>
                            </div>
                        @endif

                        @if(session('answer9')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question9" id="c" value="c" checked /><label for="c">Explorar novas ideias e estratégias</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question9" id="c" value="c" /><label for="c">Explorar novas ideias e estratégias</label>
                            </div>
                        @endif

                        @if(session('answer9')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question9" id="d" value="d" checked /><label for="d">Promover a paz e a harmonia</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question9" id="d" value="d" /><label for="d">Promover a paz e a harmonia</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question8" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <spam>9 - 48</span>
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
