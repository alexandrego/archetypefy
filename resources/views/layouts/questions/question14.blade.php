@extends('layouts.head')

@section('title', 'Questão 14')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question14" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Sua maior satisfação vem de:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer14')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question14" id="a" value="a" checked /><label for="a">Cuidar e proteger os outros</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question14" id="a" value="a" required/><label for="a">Cuidar e proteger os outros</label>
                            </div>
                        @endif

                        @if(session('answer14')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question14" id="b" value="b" checked /><label for="b">Resolver problemas complexos</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question14" id="b" value="b" required/><label for="b">Resolver problemas complexos</label>
                            </div>
                        @endif

                        @if(session('answer14')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question14" id="c" value="c" checked /><label for="c">Explorar novas possibilidades</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question14" id="c" value="c" required/><label for="c">Explorar novas possibilidades</label>
                            </div>
                        @endif

                        @if(session('answer14')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question14" id="d" value="d" checked /><label for="d">Encontrar paz e serenidade</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question14" id="d" value="d" required/><label for="d">Encontrar paz e serenidade</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question13" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>14 - 48</span>
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
