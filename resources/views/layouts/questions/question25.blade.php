@extends('layouts.head')

@section('title', 'Questão 25')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question25" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Você se sente mais completo(a) quando:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer25')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question25" id="a" value="a" checked /><label for="a">Está em um relacionamento amoroso profundo</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question25" id="a" value="a" /><label for="a">Está em um relacionamento amoroso profundo</label>
                            </div>
                        @endif

                        @if(session('answer25')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question25" id="b" value="b" checked /><label for="b">Está ajudando os outros a se sentirem amados</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question25" id="b" value="b" /><label for="b">Está ajudando os outros a se sentirem amados</label>
                            </div>
                        @endif

                        @if(session('answer25')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question25" id="c" value="c" checked /><label for="c">Está superando desafios pessoais</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question25" id="c" value="c" /><label for="c">Está superando desafios pessoais</label>
                            </div>
                        @endif

                        @if(session('answer25')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question25" id="d" value="d" checked /><label for="d">Está explorando novos sentimentos</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question25" id="d" value="d" /><label for="d">Está explorando novos sentimentos</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question24" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>25 - 48</span>
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
