@extends('layouts.head')

@section('title', 'Dashboard')

@section('content')
    <div class="content">
        <div class="contentHome">
            @auth
                <div class="logout">
                    <form action="/dashboard" method="GET">
                        @csrf
                        {{-- <button type="submit" class="btn btn-danger">Voltar</button> --}}
                        <button type="submit"> <i class="fa-solid fa-circle-left" style="margin: 0 8px 0 0;"></i>Voltar</button>
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
                            Seu Arquétipo é: {{ session('resultadoFinal') }}
                        </div>
                    </div>
                </div>

                <div class="divResultadoFinal">
                    <p>Nome do Arquétipo <span class="resultadoFinal"> {{ session('resultadoFinal') }} </span></p>
                    <p class="avisoResultado">Enviamos o PDF com o resultado detalhado para seu e-mail, favor consultar a caixa de entrada, caixa de spam e outros!</p>
                </div>

                <x-suporte />

            </div>
        </div>
    </div>
@endsection
