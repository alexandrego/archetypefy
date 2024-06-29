@extends('layouts.head')

@section('title', 'Questão 23')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question23" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Em um grupo, você tende a:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer23')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question23" id="a" value="a" checked /><label for="a">Questionar as regras e normas</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question23" id="a" value="a" /><label for="a">Questionar as regras e normas</label>
                            </div>
                        @endif

                        @if(session('answer23')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question23" id="b" value="b" checked /><label for="b">Oferecer apoio e compreensão</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question23" id="b" value="b" /><label for="b">Oferecer apoio e compreensão</label>
                            </div>
                        @endif

                        @if(session('answer23')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question23" id="c" value="c" checked /><label for="c">Liderar com força e determinação</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question23" id="c" value="c" /><label for="c">Liderar com força e determinação</label>
                            </div>
                        @endif

                        @if(session('answer23')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question23" id="d" value="d" checked /><label for="d">Procurar harmonia e equilíbrio</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question23" id="d" value="d" /><label for="d">Procurar harmonia e equilíbrio</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question22" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <spam>23 - 48</span>
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
