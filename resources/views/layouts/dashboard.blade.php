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
                            Seja bem vindo <span class="wordOrange">
                                <span class="wordBlue">
                                    {{-- {{explode(' ', $fullName)[0];}} --}}
                                    {{$stringFirstName}}
                                </span>
                            </span>
                            </span>
                        </div>

                        <hr>

                        <div class="suasCompras">
                            Aqui estão suas compras
                        </div>
                    </div>
                </div>

                <div class="compras">
                    <a href="/atention">
                        <div class="card" title="Clique para começar o teste!">
                            <div class="cardImg">
                                <img src="src/assets/img/cardEnabled.svg" />
                            </div>
                            <div class="cardDesc">
                                Identidade de Arquetipo
                            </div>
                            <div class="cardDesc">
                                @if(isset($firstNullColumn))
                                    @if($firstNullColumn == 'question_2')
                                        {{$firstNullColumn}}
                                        @elseif($firstNullColumn == 'question_3')
                                            {{$firstNullColumn}}
                                            @elseif($firstNullColumn == 'question_4')
                                                {{$firstNullColumn}}
                                                @elseif($firstNullColumn == 'question_5')
                                                    {{$firstNullColumn}}
                                                    @endif
                                @endif
                            </div>
                        </div>
                    </a>
                    <div class="card" title="Clique para comprar!">
                        <div class="cardImg">
                            <img src="src/assets/img/cardDisabled.svg" />
                        </div>
                        <div class="cardDesc">
                            Perfil Comportamental
                        </div>
                    </div>
                    <div class="card" title="Clique para comprar!">
                        <div class="cardImg">
                            <img src="src/assets/img/cardDisabled.svg" />
                        </div>
                        <div class="cardDesc">
                            Identidade Completa
                        </div>
                    </div>
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
