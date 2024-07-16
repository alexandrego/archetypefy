@extends('layouts.head')

@section('title', 'Questão 28')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question28" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Seu objetivo em um relacionamento é:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer28')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question28" id="a" value="a" checked /><label for="a">Construir uma conexão amorosa duradoura</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question28" id="a" value="a" required/><label for="a">Construir uma conexão amorosa duradoura</label>
                            </div>
                        @endif

                        @if(session('answer28')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question28" id="b" value="b" checked /><label for="b">Ajudar o outro a crescer e se desenvolver</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question28" id="b" value="b" required/><label for="b">Ajudar o outro a crescer e se desenvolver</label>
                            </div>
                        @endif

                        @if(session('answer28')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question28" id="c" value="c" checked /><label for="c">Superar obstáculos juntos</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question28" id="c" value="c" required/><label for="c">Superar obstáculos juntos</label>
                            </div>
                        @endif

                        @if(session('answer28')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question28" id="d" value="d" checked /><label for="d">Explorar novas experiências juntos</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question28" id="d" value="d" required/><label for="d">Explorar novas experiências juntos</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question27" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>28 - 48</span>
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
