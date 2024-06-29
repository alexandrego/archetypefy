@extends('layouts.head')

@section('title', 'Questão 6')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question6" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Você acredita que as pessoas são:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer6')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question6" id="a" value="a" checked /><label for="a">Injustas e egoístas</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question6" id="a" value="a" /><label for="a">Injustas e egoístas</label>
                            </div>
                        @endif

                        @if(session('answer6')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question6" id="b" value="b" checked /><label for="b">Capazes de grandes feitos</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question6" id="b" value="b" /><label for="b">Capazes de grandes feitos</label>
                            </div>
                        @endif

                        @if(session('answer6')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question6" id="c" value="c" checked /><label for="c">Dignas de compaixão e ajuda</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question6" id="c" value="c" /><label for="c">Dignas de compaixão e ajuda</label>
                            </div>
                        @endif

                        @if(session('answer6')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question6" id="d" value="d" checked /><label for="d">Cheias de potencial inexplorado</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question6" id="d" value="d" /><label for="d">Cheias de potencial inexplorado</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question5" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <spam>6 - 48</span>
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
