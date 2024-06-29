@extends('layouts.head')

@section('title', 'Questão 39')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question39" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Em grupo você tende à:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer39')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question39" id="a" value="a" checked /><label for="a">Ser a fonte de conhecimento e orientação</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question39" id="a" value="a" /><label for="a">Ser a fonte de conhecimento e orientação</label>
                            </div>
                        @endif

                        @if(session('answer39')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question39" id="b" value="b" checked /><label for="b">Ajudar os outros a entenderem as coisas</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question39" id="b" value="b" /><label for="b">Ajudar os outros a entenderem as coisas</label>
                            </div>
                        @endif

                        @if(session('answer39')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question39" id="c" value="c" checked /><label for="c">Liderar e tomar decisões</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question39" id="c" value="c" /><label for="c">Liderar e tomar decisões</label>
                            </div>
                        @endif

                        @if(session('answer39')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question39" id="d" value="d" checked /><label for="d">Explorar novas ideias e abordagens</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question39" id="d" value="d" /><label for="d">Explorar novas ideias e abordagens</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question38" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <spam>39 - 48</span>
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
