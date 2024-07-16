@extends('layouts.head')

@section('title', 'Questão 21')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question21" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Quando vê injustiça, você:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer21')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question21" id="a" value="a" checked /><label for="a">Luta contra ela com todas as forças</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question21" id="a" value="a" required/><label for="a">Luta contra ela com todas as forças</label>
                            </div>
                        @endif

                        @if(session('answer21')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question21" id="b" value="b" checked /><label for="b">Procura maneiras de ajudar as vítimas</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question21" id="b" value="b" required/><label for="b">Procura maneiras de ajudar as vítimas</label>
                            </div>
                        @endif

                        @if(session('answer21')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question21" id="c" value="c" checked /><label for="c">Busca uma nova abordagem para resolver</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question21" id="c" value="c" required/><label for="c">Busca uma nova abordagem para resolver</label>
                            </div>
                        @endif

                        @if(session('answer21')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question21" id="d" value="d" checked /><label for="d">Tenta trazer paz e calma à situação</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question21" id="d" value="d" required/><label for="d">Tenta trazer paz e calma à situação</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question20" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>21 - 48</span>
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
