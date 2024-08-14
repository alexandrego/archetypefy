@extends('layouts.head')

@section('title', 'Atenção Teste')

@section('content')
  <div class="content">
    <div class="contentHome">
            @auth
                <div class="logout">
                    <form action="/dashboard" method="GET">
                        @csrf
                        <!-- <button type="submit" class="btn btn-danger"> <img src="src/assets/img/back.svg" class="btnBackStartTest" />Voltar</button> -->
                        <button type="submit" class="btn btn-danger"> <i class="fa-solid fa-circle-left" style="margin: 0 8px 0 0;"></i>Voltar</button>
                    </form>
                </div>
            @endauth

      <div class="logo">
        <img src="src/assets/img/logo.svg" />
      </div>

      <div class="formulario">
        <form action="/startTest" method="GET">
            <div class="message roboto-thin">
                Após a conclusão do teste, o documento estará disponível diretamente na sua caixa de entrada de e-mail, no endereço que você cadastrou na plataforma.
                Se surgirem dúvidas ou se precisar de assistência adicional, estamos à disposição para ajudar.
                Não hesite em entrar em contato conosco caso necessite de algum suporte adicional.
            </div>

            <div class="buttonCadastrar">
            <button>Próximo <i class="fa-solid fa-circle-right btnGo"></i></button>
            </div>
        </form>
      </div>

      <x-suporte />

    </div>
  </div>
@endsection
