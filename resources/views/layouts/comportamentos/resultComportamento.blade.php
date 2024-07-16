@extends('layouts.head')

@section('title', 'Resultado - Teste De Comportamentos')

@section('content')
    <div class="content">
        <div class="contentHome">
            @auth
                <div class="logout">
                    <form action="/dashboard" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-danger">Voltar</button>
                    </form>
                </div>
            @endauth

            <div class="logo">
                <img src="src/assets/img/logo.svg" />
            </div>

            <div class="formulario">
                <div class="infoProfile">
                    <div class="bemVindo roboto-thin">
                        <div class="sejaBemVindo">
                            Olá <span class="wordOrange">
                                <span class="wordBlue">
                                {{ session('fullName') }}
                                </span>
                            </span>
                            </span>
                        </div>

                        <hr>

                        <div class="suasCompras">
                            Seu Comportamento é: {{ session('resultadoFinalComportamento') }}
                        </div>
                    </div>
                </div>

                <div class="divResultadoFinal">
                    <p>Nome do Comportamento <span class="resultadoFinal"> {{ session('resultadoFinalComportamento') }} </span></p>
                    <p class="avisoResultado">Enviamos o PDF com o resultado detalhado para seu e-mail, favor consultar a caixa de entrada, caixa de spam e outros!</p>
                </div>
                <div class="suporte">
                    <div class="suporteName">
                        Suporte
                    </div>
                    <div class="suportePhoto">
                        <img src="src/assets/img/suporte.svg" />
                    </div>
                    <div class="suporteAction">
                        Conversar via WhatsApp
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
