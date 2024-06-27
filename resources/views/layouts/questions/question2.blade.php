@extends('layouts.head')

@section('title', 'Questão 2')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

      <div class="formularioQuestions">
        <form action="/question2" method="POST">
            @csrf
            <div class="message roboto-thin messageStartTest">
                <!-- Pergunta -->
                <div class="questionsTitle roboto-thin">
                    <span>Você acredita que a vida:</span>
                </div>

                <div class="respostas">
                    <div class="questions">
                        <input type="radio" name="question2" id="a" value="a" /><label for="a">É uma jornada cheia de descobertas</label>
                    </div>
                    <div class="questions">
                        <input type="radio" name="question2" id="b" value="b" /><label for="b">É um campo de batalha onde os fortes vencem</label>
                    </div>
                    <div class="questions">
                        <input type="radio" name="question2" id="c" value="c" /><label for="c">Deve ser vivida de maneira simples e honesta</label>
                    </div>
                    <div class="questions">
                        <input type="radio" name="question2" id="d" value="d" /><label for="d">É um lugar onde devemos ajudar e cuidar dos outros</label>
                    </div>
                </div>
            </div>

            <div class="voltarAvancar">
                <div class="btnQuestion">
                    <a href="/question1" class="btnS">Voltar</a>
                </div>
                <div class="btnQuestion">
                    <spam>2 - 48</span>
                </div>
                <div class="btnQuestion">
                    <input type="submit" value="Avançar" class="btnS"/>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection
