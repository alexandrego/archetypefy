@extends('layouts.head')

@section('title', 'Questão 40')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question40" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>O que você se identifica mais:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer40')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question40" id="a" value="a" checked /><label for="a">"Conhecimento é poder"</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question40" id="a" value="a" /><label for="a">"Conhecimento é poder"</label>
                            </div>
                        @endif

                        @if(session('answer40')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question40" id="b" value="b" checked /><label for="b">"Ajudar é essencial"</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question40" id="b" value="b" /><label for="b">"Ajudar é essencial"</label>
                            </div>
                        @endif

                        @if(session('answer40')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question40" id="c" value="c" checked /><label for="c">"Vencer é tudo"</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question40" id="c" value="c" /><label for="c">"Vencer é tudo"</label>
                            </div>
                        @endif

                        @if(session('answer40')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question40" id="d" value="d" checked /><label for="d">"Explorar é viver"</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question40" id="d" value="d" /><label for="d">"Explorar é viver"</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question39" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <spam>40 - 48</span>
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
