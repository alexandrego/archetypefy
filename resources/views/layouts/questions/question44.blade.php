@extends('layouts.head')

@section('title', 'Questão 44')

@section('content')
  <div class="content">
    <div class="contentHome">

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

        <div id="formularioQuestions" class="formularioQuestions">
            <form action="/question44" method="POST" onsubmit="avancando()">
                @csrf
                <div class="message roboto-thin messageStartTest">
                    <!-- Pergunta -->
                    <div class="questionsTitle roboto-thin">
                        <span>Seu objetivo principal é:</span>
                    </div>

                    <div class="respostas">
                        @if(session('answer44')=='a')
                            <div class="questions checked">
                                <input type="radio" name="question44" id="a" value="a" checked /><label for="a">Transformar e melhorar o mundo</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question44" id="a" value="a" /><label for="a">Transformar e melhorar o mundo</label>
                            </div>
                        @endif

                        @if(session('answer44')=='b')
                            <div class="questions checked">
                                <input type="radio" name="question44" id="b" value="b" checked /><label for="b">Ajudar os outros a se transformarem</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question44" id="b" value="b" /><label for="b">Ajudar os outros a se transformarem</label>
                            </div>
                        @endif

                        @if(session('answer44')=='c')
                            <div class="questions checked">
                                <input type="radio" name="question44" id="c" value="c" checked /><label for="c">Superar grandes desafios</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question44" id="c" value="c" /><label for="c">Superar grandes desafios</label>
                            </div>
                        @endif

                        @if(session('answer44')=='d')
                            <div class="questions checked">
                                <input type="radio" name="question44" id="d" value="d" checked /><label for="d">Descobrir novas possibilidades</label>
                            </div>
                        @else
                            <div class="questions">
                                <input type="radio" name="question44" id="d" value="d" /><label for="d">Descobrir novas possibilidades</label>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="voltarAvancar">
                    <div class="btnQuestion">
                        <a href="/question43" id="btnVoltar" onclick="btnVoltar()" class="btnS">Voltar</a>
                    </div>
                    <div class="btnQuestion">
                        <span>44 - 48</span>
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
