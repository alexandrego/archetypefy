@extends('layouts.head')

@section('title', 'Iniciar Teste')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

      <div class="formularioQuestions">
        <form>
          <div class="message roboto-thin messageStartTest">
            <!-- Pergunta -->
            <div class="questionsTitle">
                <span>Você se sente mais realizado(a) quando:</span>
            </div>

            <div class="respostas">
                <div class="questions">
                    <label for="a">Ganha uma competição ou um desafio</label>
                    <input type="hidden" name="a" id="question" />
                </div>
                <div class="questions">
                    <label for="b">Explora novos lugares e experiências</label>
                    <input type="hidden" name="b" id="question" />
                </div>
                <div class="questions">
                    <label for="c">Ajuda os outros sem esperar nada em troca</label>
                    <input type="hidden" name="c" id="question" />
                </div>
                <div class="questions">
                    <label for="d">Encontra harmonia e paz interior</label>
                    <input type="hidden" name="d" id="question" />
                </div>
            </div>


          </div>

          <div class="voltarAvancar">
            <div class="btnQuestion">
                <a href="/startTest">Voltar</a>
            </div>
            <div class="btnQuestion">
                <button>Próximo</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
