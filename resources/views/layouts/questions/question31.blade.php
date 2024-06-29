@extends('layouts.head')

@section('title', 'Questão 31')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question31" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Em um projeto, você prefere:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question31" id="a" value="a" checked /><label for="a">Inovar e trazer novas ideias</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question31" id="a" value="a" /><label for="a">Inovar e trazer novas ideias</label>
                            </div>
                        @endif

                        @if(session('answer')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question31" id="b" value="b" checked /><label for="b">Ajudar os outros a realizarem suas tarefas</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question31" id="b" value="b" /><label for="b">Ajudar os outros a realizarem suas tarefas</label>
                            </div>
                        @endif

                        @if(session('answer')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question31" id="c" value="c" checked /><label for="c">Liderar e garantir que tudo seja feito corretamente</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question31" id="c" value="c" /><label for="c">Liderar e garantir que tudo seja feito corretamente</label>
                            </div>
                        @endif

                        @if(session('answer')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question31" id="d" value="d" checked /><label for="d">Explorar diferentes possibilidades</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question31" id="d" value="d" /><label for="d">Explorar diferentes possibilidades</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question30" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <spam>31 - 48</span>
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
