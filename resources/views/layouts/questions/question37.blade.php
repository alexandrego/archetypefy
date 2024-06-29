@extends('layouts.head')

@section('title', 'Questão 37')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question37" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Você se sente bem quando:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question37" id="a" value="a" checked /><label for="a">Está aprendendo algo novo</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question37" id="a" value="a" /><label for="a">Está aprendendo algo novo</label>
                            </div>
                        @endif

                        @if(session('answer')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question37" id="b" value="b" checked /><label for="b">Está ajudando alguém a entender algo</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question37" id="b" value="b" /><label for="b">Está ajudando alguém a entender algo</label>
                            </div>
                        @endif

                        @if(session('answer')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question37" id="c" value="c" checked /><label for="c">Está vencendo um debate ou discussão</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question37" id="c" value="c" /><label for="c">Está vencendo um debate ou discussão</label>
                            </div>
                        @endif

                        @if(session('answer')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question37" id="d" value="d" checked /><label for="d">Está explorando novas ideias</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question37" id="d" value="d" /><label for="d">Está explorando novas ideias</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question36" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <spam>37 - 48</span>
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
