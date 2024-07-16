@extends('layouts.head')

@section('title', 'Questão 32')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question32" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Seu lema de vida é mais próximo de:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer32')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question32" id="a" value="a" checked /><label for="a">"Criar é viver"</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question32" id="a" value="a" required/><label for="a">"Criar é viver"</label>
                            </div>
                        @endif

                        @if(session('answer32')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question32" id="b" value="b" checked /><label for="b">"Ajudar é fundamental"</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question32" id="b" value="b" required/><label for="b">"Ajudar é fundamental"</label>
                            </div>
                        @endif

                        @if(session('answer32')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question32" id="c" value="c" checked /><label for="c">"Vencer é o objetivo"</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question32" id="c" value="c" required/><label for="c">"Vencer é o objetivo"</label>
                            </div>
                        @endif

                        @if(session('answer32')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question32" id="d" value="d" checked /><label for="d">"Explorar é essencial"</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question32" id="d" value="d" required/><label for="d">"Explorar é essencial"</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question31" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>32 - 48</span>
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
