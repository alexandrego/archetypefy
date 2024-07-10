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
                                    {{$firstName}}
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
                                Identidade de Arquétipo
                            </div>
                                @if(isset($firstNullColumn))
                                    @if($firstNullColumn == 'question_2')
                                        <div class="cardDesc">
                                            <a href="../question2">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_3')
                                        <div class="cardDesc">
                                            <a href="../question3">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_4')
                                        <div class="cardDesc">
                                            <a href="../question4">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_5')
                                        <div class="cardDesc">
                                            <a href="../question5">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_6')
                                        <div class="cardDesc">
                                            <a href="../question6">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_7')
                                        <div class="cardDesc">
                                            <a href="../question7">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_8')
                                        <div class="cardDesc">
                                            <a href="../question8">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_9')
                                        <div class="cardDesc">
                                            <a href="../question9">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_10')
                                        <div class="cardDesc">
                                            <a href="../question10">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_11')
                                        <div class="cardDesc">
                                            <a href="../question11">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_12')
                                        <div class="cardDesc">
                                            <a href="../question12">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_13')
                                        <div class="cardDesc">
                                            <a href="../question13">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_14')
                                        <div class="cardDesc">
                                            <a href="../question14">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_15')
                                        <div class="cardDesc">
                                            <a href="../question15">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_16')
                                        <div class="cardDesc">
                                            <a href="../question16">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_17')
                                        <div class="cardDesc">
                                            <a href="../question17">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_18')
                                        <div class="cardDesc">
                                            <a href="../question18">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_19')
                                        <div class="cardDesc">
                                            <a href="../question19">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_20')
                                        <div class="cardDesc">
                                            <a href="../question20">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_21')
                                        <div class="cardDesc">
                                            <a href="../question21">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_22')
                                        <div class="cardDesc">
                                            <a href="../question22">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_23')
                                        <div class="cardDesc">
                                            <a href="../question23">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_24')
                                        <div class="cardDesc">
                                            <a href="../question24">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_25')
                                        <div class="cardDesc">
                                            <a href="../question25">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_26')
                                        <div class="cardDesc">
                                            <a href="../question26">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_27')
                                        <div class="cardDesc">
                                            <a href="../question27">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_28')
                                        <div class="cardDesc">
                                            <a href="../question28">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_29')
                                        <div class="cardDesc">
                                            <a href="../question29">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_30')
                                        <div class="cardDesc">
                                            <a href="../question30">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_31')
                                        <div class="cardDesc">
                                            <a href="../question31">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_32')
                                        <div class="cardDesc">
                                            <a href="../question32">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_33')
                                        <div class="cardDesc">
                                            <a href="../question33">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_34')
                                        <div class="cardDesc">
                                            <a href="../question34">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_35')
                                        <div class="cardDesc">
                                            <a href="../question35">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_36')
                                        <div class="cardDesc">
                                            <a href="../question36">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_37')
                                        <div class="cardDesc">
                                            <a href="../question37">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_38')
                                        <div class="cardDesc">
                                            <a href="../question38">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_39')
                                        <div class="cardDesc">
                                            <a href="../question39">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_40')
                                        <div class="cardDesc">
                                            <a href="../question40">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_41')
                                        <div class="cardDesc">
                                            <a href="../question41">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_42')
                                        <div class="cardDesc">
                                            <a href="../question42">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_43')
                                        <div class="cardDesc">
                                            <a href="../question43">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_44')
                                        <div class="cardDesc">
                                            <a href="../question44">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_45')
                                        <div class="cardDesc">
                                            <a href="../question45">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_46')
                                        <div class="cardDesc">
                                            <a href="../question46">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_47')
                                        <div class="cardDesc">
                                            <a href="../question47">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'question_48')
                                        <div class="cardDesc">
                                            <a href="../question48">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumn == 'result')
                                        <div class="cardDesc">
                                            <a href="../result">Ver resultado</a>
                                        </div>
                                    @endif
                                @endif
                        </div>
                    </a>

                    <a href="/comportamento1">
                        <div class="card" title="Clique para começar o teste!">
                            <div class="cardImg">
                                <img src="src/assets/img/cardEnabled.svg" />
                            </div>
                            <div class="cardDesc">
                                Perfil Comportamental
                            </div>
                        </div>
                    </a>

                    <a href="/temper1">
                        <div class="card" title="Clique para começar o teste!">
                            <div class="cardImg">
                                <img src="src/assets/img/cardEnabled.svg" />
                            </div>
                            <div class="cardDesc">
                                Identidade de Temperamentos
                            </div>
                        </div>
                    </a>
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
