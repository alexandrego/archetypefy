@extends('layouts.head')

@section('title', 'Dashboard')

@section('content')
    <div class="content">
        <div class="contentHome">
            @auth
                <div class="logout">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Sair</button>
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
                                    {{explode(' ', $fullName)[0];}}
                                </span>
                            </span>
                            </span>
                        </div>

                        <hr>

                        <div class="suasCompras">
                            Seu Arquétipo é:
                        </div>
                    </div>
                </div>

                <div class="compras">
                    Nome do Arquetipo
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
