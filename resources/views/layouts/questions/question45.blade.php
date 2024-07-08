@extends('layouts.head')

@section('title', 'Questão 45')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question45" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Em uma equipe, você prefere:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer45')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question45" id="a" value="a" checked /><label for="a">Liderar e tomar decisões</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question45" id="a" value="a" /><label for="a">Liderar e tomar decisões</label>
                            </div>
                        @endif

                        @if(session('answer45')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question45" id="b" value="b" checked /><label for="b">Ajudar os outros a se organizarem</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question45" id="b" value="b" /><label for="b">Ajudar os outros a se organizarem</label>
                            </div>
                        @endif

                        @if(session('answer45')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question45" id="c" value="c" checked /><label for="c">Buscar novas abordagens e ideias</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question45" id="c" value="c" /><label for="c">Buscar novas abordagens e ideias</label>
                            </div>
                        @endif

                        @if(session('answer45')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question45" id="d" value="d" checked /><label for="d">Trazer paz e harmonia para o grupo</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question45" id="d" value="d" /><label for="d">Trazer paz e harmonia para o grupo</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question44" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>45 - 48</span>
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
