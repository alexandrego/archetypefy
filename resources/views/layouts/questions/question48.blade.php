@extends('layouts.head')

@section('title', 'Questão 48')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question48" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Seu foco principal na vida é:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer48')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question48" id="a" value="a" checked /><label for="a">Controlar e liderar</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question48" id="a" value="a" required/><label for="a">Controlar e liderar</label>
                            </div>
                        @endif

                        @if(session('answer48')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question48" id="b" value="b" checked /><label for="b">Cuidar e ajudar dos outros</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question48" id="b" value="b" required/><label for="b">Cuidar e ajudar dos outros</label>
                            </div>
                        @endif

                        @if(session('answer48')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question48" id="c" value="c" checked /><label for="c">Descobrir e Explorar</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question48" id="c" value="c" required/><label for="c">Descobrir e Explorar</label>
                            </div>
                        @endif

                        @if(session('answer48')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question48" id="d" value="d" checked /><label for="d">Levar Harmonia e paz às pessoas</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question48" id="d" value="d" required/><label for="d">Levar Harmonia e paz às pessoas</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question47" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>48 - 48</span>
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
