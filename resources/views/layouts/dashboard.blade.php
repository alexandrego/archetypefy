@extends('layouts.head')

@section('title', 'Dashboard')

@section('content')
    <!-- Lista os usuarios que podem acessar as configurações -->
    @php
        $allowedUserIds = [1, 2, 5, 8]; // IDs dos usuários permitidos
    @endphp

    <div class="content">
        <div class="contentHome">
            @auth
                @php
                    // $userID = Auth::id();
                    // $fullName = Auth::user();
                    // $firstName = strtok($fullName, " ");
                    $userID = session('userID');
                    $firstName = session('firstName');
                    $firstNullColumn = session('firstNullColumn');
                @endphp
            <div class="guestConfig">
                @if($userID && in_array($userID, $allowedUserIds))
                    <div class="iconsConfig">
                        <a href="/configDashboard">
                            <i class="fa-solid fa-gear btnOut"></i>
                        </a>
                    </div>
                @endif

                <div class="iconsConfig">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit">
                            <i class="fa-solid fa-arrow-right-from-bracket btnOut" alt="Sair"></i>
                        </button>
                    </form>
                </div>
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
                    @if($firstNullColumn == 0)
                        <a href="/atention">
                            <div class="card" title="Clique para começar o teste!">
                                <div class="cardImgAr">
                                    <img src="src/assets/img/identidade-de-arquetipo.svg" />
                                </div>
                                <div class="cardDesc">
                                    Identidade de Arquétipo
                                </div>
                                <div class="cardDesc">
                                    <a href="../atention">Iniciar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                </div>
                            </div>
                        </a>
                    @elseif($firstNullColumn == 'result')
                        <a href="/result">
                            <div class="card" title="Clique para ver o resultado!">
                                <div class="testeOk">
                                    <img src="src/assets/img/ok.svg"/>
                                </div>
                                <div class="cardImg">
                                    <img src="src/assets/img/identidade-de-arquetipo.svg" />
                                </div>
                                <div class="cardDesc">
                                    Identidade de Arquétipo
                                </div>
                                <div class="cardDesc">
                                    <a href="../result">Ver resultado <i class="fa-solid fa-circle-right btnGo"></i></a>
                                </div>
                            </div>
                        </a>
                    @else
                        {{-- <a href="/atention"> --}}
                            <div class="card" title="Clique para continuar o teste!">
                                <div class="cardImgAr">
                                    <img src="src/assets/img/identidade-de-arquetipo.svg" />
                                </div>
                                <div class="cardDesc">
                                    Identidade de Arquétipo
                                </div>

                                @if($firstNullColumn == 'question_2')
                                    <div class="cardDesc">
                                        <a href="../question2">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_3')
                                    <div class="cardDesc">
                                        <a href="../question3">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_4')
                                    <div class="cardDesc">
                                        <a href="../question4">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_5')
                                    <div class="cardDesc">
                                        <a href="../question5">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_6')
                                    <div class="cardDesc">
                                        <a href="../question6">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_7')
                                    <div class="cardDesc">
                                        <a href="../question7">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_8')
                                    <div class="cardDesc">
                                        <a href="../question8">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_9')
                                    <div class="cardDesc">
                                        <a href="../question9">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_10')
                                    <div class="cardDesc">
                                        <a href="../question10">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_11')
                                    <div class="cardDesc">
                                        <a href="../question11">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_12')
                                    <div class="cardDesc">
                                        <a href="../question12">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_13')
                                    <div class="cardDesc">
                                        <a href="../question13">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_14')
                                    <div class="cardDesc">
                                        <a href="../question14">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_15')
                                    <div class="cardDesc">
                                        <a href="../question15">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_16')
                                    <div class="cardDesc">
                                        <a href="../question16">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_17')
                                    <div class="cardDesc">
                                        <a href="../question17">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_18')
                                    <div class="cardDesc">
                                        <a href="../question18">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_19')
                                    <div class="cardDesc">
                                        <a href="../question19">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_20')
                                    <div class="cardDesc">
                                        <a href="../question20">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_21')
                                    <div class="cardDesc">
                                        <a href="../question21">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_22')
                                    <div class="cardDesc">
                                        <a href="../question22">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_23')
                                    <div class="cardDesc">
                                        <a href="../question23">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_24')
                                    <div class="cardDesc">
                                        <a href="../question24">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_25')
                                    <div class="cardDesc">
                                        <a href="../question25">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_26')
                                    <div class="cardDesc">
                                        <a href="../question26">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_27')
                                    <div class="cardDesc">
                                        <a href="../question27">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_28')
                                    <div class="cardDesc">
                                        <a href="../question28">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_29')
                                    <div class="cardDesc">
                                        <a href="../question29">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_30')
                                    <div class="cardDesc">
                                        <a href="../question30">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_31')
                                    <div class="cardDesc">
                                        <a href="../question31">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_32')
                                    <div class="cardDesc">
                                        <a href="../question32">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_33')
                                    <div class="cardDesc">
                                        <a href="../question33">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_34')
                                    <div class="cardDesc">
                                        <a href="../question34">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_35')
                                    <div class="cardDesc">
                                        <a href="../question35">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_36')
                                    <div class="cardDesc">
                                        <a href="../question36">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_37')
                                    <div class="cardDesc">
                                        <a href="../question37">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_38')
                                    <div class="cardDesc">
                                        <a href="../question38">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_39')
                                    <div class="cardDesc">
                                        <a href="../question39">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_40')
                                    <div class="cardDesc">
                                        <a href="../question40">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_41')
                                    <div class="cardDesc">
                                        <a href="../question41">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_42')
                                    <div class="cardDesc">
                                        <a href="../question42">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_43')
                                    <div class="cardDesc">
                                        <a href="../question43">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_44')
                                    <div class="cardDesc">
                                        <a href="../question44">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_45')
                                    <div class="cardDesc">
                                        <a href="../question45">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_46')
                                    <div class="cardDesc">
                                        <a href="../question46">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_47')
                                    <div class="cardDesc">
                                        <a href="../question47">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'question_48')
                                    <div class="cardDesc">
                                        <a href="../question48">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @elseif($firstNullColumn == 'result')
                                    <div class="cardDesc">
                                        <a href="../result">Ver resultado <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                    </div>
                                @endif
                            </div>
                        {{-- </a> --}}
                    @endif

                    {{-- <a href="/comportamento1"> --}}
                        <div class="cardDisabled" title="Em breve ...">
                            <div class="cardImg">
                                <img src="src/assets/img/perfil-comportamental.svg" />
                            </div>
                            <div class="cardDesc">
                                Perfil Comportamental
                            </div>
                            <div class="cardDesc">
                                <a href="#">Comprar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                            </div>
                            @if(isset($firstNullColumnComportamento))
                                @if($firstNullColumnComportamento == 'comportamento2')
                                    <div class="cardDesc">
                                        <a href="../comportamento2">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento3')
                                    <div class="cardDesc">
                                        <a href="../comportamento3">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento4')
                                    <div class="cardDesc">
                                        <a href="../comportamento4">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento5')
                                    <div class="cardDesc">
                                        <a href="../comportamento5">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento6')
                                    <div class="cardDesc">
                                        <a href="../comportamento6">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento7')
                                    <div class="cardDesc">
                                        <a href="../comportamento7">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento8')
                                    <div class="cardDesc">
                                        <a href="../comportamento8">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento9')
                                    <div class="cardDesc">
                                        <a href="../comportamento9">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento10')
                                    <div class="cardDesc">
                                        <a href="../comportamento10">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento11')
                                    <div class="cardDesc">
                                        <a href="../comportamento11">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento12')
                                    <div class="cardDesc">
                                        <a href="../comportamento12">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento13')
                                    <div class="cardDesc">
                                        <a href="../comportamento13">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento14')
                                    <div class="cardDesc">
                                        <a href="../comportamento14">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento15')
                                    <div class="cardDesc">
                                        <a href="../comportamento15">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento16')
                                    <div class="cardDesc">
                                        <a href="../comportamento16">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento17')
                                    <div class="cardDesc">
                                        <a href="../comportamento17">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento18')
                                    <div class="cardDesc">
                                        <a href="../comportamento18">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento19')
                                    <div class="cardDesc">
                                        <a href="../comportamento19">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento20')
                                    <div class="cardDesc">
                                        <a href="../comportamento20">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento21')
                                    <div class="cardDesc">
                                        <a href="../comportamento21">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento22')
                                    <div class="cardDesc">
                                        <a href="../comportamento22">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento23')
                                    <div class="cardDesc">
                                        <a href="../comportamento23">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento24')
                                    <div class="cardDesc">
                                        <a href="../comportamento24">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento25')
                                    <div class="cardDesc">
                                        <a href="../comportamento25">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento26')
                                    <div class="cardDesc">
                                        <a href="../comportamento26">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento27')
                                    <div class="cardDesc">
                                        <a href="../comportamento27">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento28')
                                    <div class="cardDesc">
                                        <a href="../comportamento28">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento29')
                                    <div class="cardDesc">
                                        <a href="../comportamento29">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento30')
                                    <div class="cardDesc">
                                        <a href="../comportamento30">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento31')
                                    <div class="cardDesc">
                                        <a href="../comportamento31">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento32')
                                    <div class="cardDesc">
                                        <a href="../comportamento32">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento33')
                                    <div class="cardDesc">
                                        <a href="../comportamento33">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento34')
                                    <div class="cardDesc">
                                        <a href="../comportamento34">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento35')
                                    <div class="cardDesc">
                                        <a href="../comportamento35">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento36')
                                    <div class="cardDesc">
                                        <a href="../comportamento36">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento37')
                                    <div class="cardDesc">
                                        <a href="../comportamento37">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento38')
                                    <div class="cardDesc">
                                        <a href="../comportamento38">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento39')
                                    <div class="cardDesc">
                                        <a href="../comportamento39">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'comportamento40')
                                    <div class="cardDesc">
                                        <a href="../comportamento40">Continuar</a>
                                    </div>
                                @elseif($firstNullColumnComportamento == 'resultComportamento')
                                    <div class="cardDesc">
                                        <a href="../resultComportamento">Ver resultado</a>
                                    </div>
                                @endif
                                @endif
                        </div>
                    {{-- </a> --}}

                    {{-- <a href="/temper1"> --}}
                        <div class="cardDisabled" title="Em breve ...">
                            <div class="cardImg">
                                <img src="src/assets/img/identidade-de-temperamento.svg" />
                            </div>
                            <div class="cardDesc">
                                Identidade de Temperamentos
                            </div>
                            <div class="cardDesc">
                                <a href="#">Comprar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                            </div>
                            @if(isset($firstNullColumnTemper))
                                    @if($firstNullColumnTemper == 'temper2')
                                        <div class="cardDesc">
                                            <a href="../temper2">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumnTemper == 'temper3')
                                        <div class="cardDesc">
                                            <a href="../temper3">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumnTemper == 'temper4')
                                        <div class="cardDesc">
                                            <a href="../temper4">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumnTemper == 'temper5')
                                        <div class="cardDesc">
                                            <a href="../temper5">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumnTemper == 'temper6')
                                        <div class="cardDesc">
                                            <a href="../temper6">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumnTemper == 'temper7')
                                        <div class="cardDesc">
                                            <a href="../temper7">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumnTemper == 'temper8')
                                        <div class="cardDesc">
                                            <a href="../temper8">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumnTemper == 'temper9')
                                        <div class="cardDesc">
                                            <a href="../temper9">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumnTemper == 'temper10')
                                        <div class="cardDesc">
                                            <a href="../temper10">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumnTemper == 'temper11')
                                        <div class="cardDesc">
                                            <a href="../temper11">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumnTemper == 'temper12')
                                        <div class="cardDesc">
                                            <a href="../temper12">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumnTemper == 'temper13')
                                        <div class="cardDesc">
                                            <a href="../temper13">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumnTemper == 'temper14')
                                        <div class="cardDesc">
                                            <a href="../temper14">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumnTemper == 'temper15')
                                        <div class="cardDesc">
                                            <a href="../temper15">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumnTemper == 'temper16')
                                        <div class="cardDesc">
                                            <a href="../temper16">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumnTemper == 'temper17')
                                        <div class="cardDesc">
                                            <a href="../temper17">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumnTemper == 'temper18')
                                        <div class="cardDesc">
                                            <a href="../temper18">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumnTemper == 'temper19')
                                        <div class="cardDesc">
                                            <a href="../temper19">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumnTemper == 'temper20')
                                        <div class="cardDesc">
                                            <a href="../temper20">Continuar</a>
                                        </div>
                                    @elseif($firstNullColumnTemper == 'resultTemper')
                                        <div class="cardDesc">
                                            <a href="../resultTemper">Ver resultado</a>
                                        </div>
                                    @endif
                                @endif
                        </div>
                    {{-- </a> --}}
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
