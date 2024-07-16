@extends('layouts.head')

@section('title', 'Questão 16')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question16" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Seu objetivo na vida é:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer16')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question16" id="a" value="a" checked /><label for="a">Ajudar e cuidar dos outros</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question16" id="a" value="a" required/><label for="a">Ajudar e cuidar dos outros</label>
                            </div>
                        @endif

                        @if(session('answer16')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question16" id="b" value="b" checked /><label for="b">Superar desafios e obstáculos</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question16" id="b" value="b" required/><label for="b">Superar desafios e obstáculos</label>
                            </div>
                        @endif

                        @if(session('answer16')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question16" id="c" value="c" checked /><label for="c">Descobrir novas experiências</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question16" id="c" value="c" required/><label for="c">Descobrir novas experiências</label>
                            </div>
                        @endif

                        @if(session('answer16')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question16" id="d" value="d" checked /><label for="d">Viver em harmonia e tranquilidade</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question16" id="d" value="d" required/><label for="d">Viver em harmonia e tranquilidade</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question15" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>16 - 48</span>
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
