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
                    $userID = session('userID');
                    $firstName = session('firstName');

                    $firstNullColumn = session('firstNullColumn');
                    $firstNullColumnTemper = session('firstNullColumnTemper');
                    $firstNullColumnComportamento = session('firstNullColumnComportamento');

                    $permiteArquetipos = session('permiteArquetipos');
                    $permiteTemperamentos = session('permiteTemperamentos');
                    $permiteComportamental = session('permiteComportamental');
                @endphp
            <div class="guestConfig">
                @if($userID && in_array($userID, $allowedUserIds))
                    <div class="iconsConfig">
                        <a href="/configDashboard">
                            <i class="fa-solid fa-users-gear btnOut"></i>
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

            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif

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

                        <hr class="hrArc">

                        <div class="suasCompras">
                            Aqui estão suas compras
                        </div>
                    </div>
                </div>

                <div class="compras">
                    <!-- Verifica se tem permissão para o teste de arquetipos -->
                        @if($permiteArquetipos == 1)
                            <!-- Se tiver acesso -->
                                @if($firstNullColumn == 0)
                                    <a href="/atention" class="links">
                                        <div class="cardArc" title="Clique para começar o teste!">
                                            <div class="cardImgAr">
                                                <img src="src/assets/img/identidade-de-arquetipo.svg" />
                                            </div>
                                            <div class="cardDesc">
                                                Identidade de Arquétipo
                                            </div>
                                            <div class="cardDesc">
                                                <a href="../atention" class="links">Iniciar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                            </div>
                                        </div>
                                    </a>
                                @elseif($firstNullColumn == 'result')
                                    <a href="/result" class="links">
                                        <div class="cardArc" title="Clique para ver o resultado!">
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
                                                <a href="../result" class="links">Ver resultado <i class="fa-solid fa-circle-right btnGo"></i></a>
                                            </div>
                                        </div>
                                    </a>
                                @else
                                    {{-- <a href="/atention"> --}}
                                        <div class="cardArc" title="Clique para continuar o teste!">
                                            <div class="cardImgAr">
                                                <img src="src/assets/img/identidade-de-arquetipo.svg" />
                                            </div>
                                            <div class="cardDesc">
                                                Identidade de Arquétipo
                                            </div>

                                            @if($firstNullColumn == 'question_2')
                                                <div class="cardDesc">
                                                    <a href="../question2" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_3')
                                                <div class="cardDesc">
                                                    <a href="../question3" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_4')
                                                <div class="cardDesc">
                                                    <a href="../question4" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_5')
                                                <div class="cardDesc">
                                                    <a href="../question5" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_6')
                                                <div class="cardDesc">
                                                    <a href="../question6" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_7')
                                                <div class="cardDesc">
                                                    <a href="../question7" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_8')
                                                <div class="cardDesc">
                                                    <a href="../question8" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_9')
                                                <div class="cardDesc">
                                                    <a href="../question9" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_10')
                                                <div class="cardDesc">
                                                    <a href="../question10" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_11')
                                                <div class="cardDesc">
                                                    <a href="../question11" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_12')
                                                <div class="cardDesc">
                                                    <a href="../question12" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_13')
                                                <div class="cardDesc">
                                                    <a href="../question13" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_14')
                                                <div class="cardDesc">
                                                    <a href="../question14" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_15')
                                                <div class="cardDesc">
                                                    <a href="../question15" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_16')
                                                <div class="cardDesc">
                                                    <a href="../question16" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_17')
                                                <div class="cardDesc">
                                                    <a href="../question17" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_18')
                                                <div class="cardDesc">
                                                    <a href="../question18" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_19')
                                                <div class="cardDesc">
                                                    <a href="../question19" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_20')
                                                <div class="cardDesc">
                                                    <a href="../question20" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_21')
                                                <div class="cardDesc">
                                                    <a href="../question21" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_22')
                                                <div class="cardDesc">
                                                    <a href="../question22" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_23')
                                                <div class="cardDesc">
                                                    <a href="../question23" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_24')
                                                <div class="cardDesc">
                                                    <a href="../question24" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_25')
                                                <div class="cardDesc">
                                                    <a href="../question25" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_26')
                                                <div class="cardDesc">
                                                    <a href="../question26" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_27')
                                                <div class="cardDesc">
                                                    <a href="../question27" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_28')
                                                <div class="cardDesc">
                                                    <a href="../question28" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_29')
                                                <div class="cardDesc">
                                                    <a href="../question29" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_30')
                                                <div class="cardDesc">
                                                    <a href="../question30" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_31')
                                                <div class="cardDesc">
                                                    <a href="../question31" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_32')
                                                <div class="cardDesc">
                                                    <a href="../question32" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_33')
                                                <div class="cardDesc">
                                                    <a href="../question33" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_34')
                                                <div class="cardDesc">
                                                    <a href="../question34" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_35')
                                                <div class="cardDesc">
                                                    <a href="../question35" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_36')
                                                <div class="cardDesc">
                                                    <a href="../question36" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_37')
                                                <div class="cardDesc">
                                                    <a href="../question37" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_38')
                                                <div class="cardDesc">
                                                    <a href="../question38" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_39')
                                                <div class="cardDesc">
                                                    <a href="../question39" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_40')
                                                <div class="cardDesc">
                                                    <a href="../question40" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_41')
                                                <div class="cardDesc">
                                                    <a href="../question41" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_42')
                                                <div class="cardDesc">
                                                    <a href="../question42" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_43')
                                                <div class="cardDesc">
                                                    <a href="../question43" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_44')
                                                <div class="cardDesc">
                                                    <a href="../question44" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_45')
                                                <div class="cardDesc">
                                                    <a href="../question45" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_46')
                                                <div class="cardDesc">
                                                    <a href="../question46" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_47')
                                                <div class="cardDesc">
                                                    <a href="../question47" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'question_48')
                                                <div class="cardDesc">
                                                    <a href="../question48" class="links">Continuar <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @elseif($firstNullColumn == 'result')
                                                <div class="cardDesc">
                                                    <a href="../result" class="links">Ver resultado <img src="src/assets/img/back.svg" class="btnGo" /></a>
                                                </div>
                                            @endif
                                        </div>
                                    {{-- </a> --}}
                                @endif
                            <!-- Se tiver acesso -->
                        @else
                            <!-- Se não tiver acesso -->
                                <a href="https://pay.kiwify.com.br/yd54E7h" class="links">
                                    <div class="cardArc" title="Clique para comprar o teste!">
                                        <div class="cardImgAr">
                                            <img src="src/assets/img/identidade-de-arquetipo.svg" />
                                        </div>
                                        <div class="cardDesc">
                                            Identidade de Arquétipo
                                        </div>
                                        <div class="cardDesc">
                                            <a href="https://pay.kiwify.com.br/yd54E7h" class="links">Compre seu teste <i class="fa-solid fa-store fa-fade" style="margin:0 0 0 15px;font-size:20px;background-color:transparent;color:rgba(187, 129, 53, 1);"></i></a>
                                        </div>
                                    </div>
                                </a>
                            <!-- Se não tiver acesso -->
                        @endif
                    <!-- Verifica se tem permissão para o teste de arquetipos -->

                    <!-- Verifica se tem permissão para o teste comportamental -->
                        @if($permiteComportamental == 1)
                            <!-- Se tiver acesso -->
                                @if($firstNullColumnComportamento == 0)
                                    <a href="/comportamento1" class="links">
                                        <div class="cardArc" title="Clique para começar o teste!">
                                            <div class="cardImg">
                                                <img src="src/assets/img/perfil-comportamental.svg" />
                                            </div>
                                            <div class="cardDesc">
                                                Perfil Comportamental
                                            </div>
                                            <div class="cardDesc">
                                                <a href="/comportamento1" class="links">Iniciar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                            </div>
                                        </div>
                                    </a>
                                @elseif($firstNullColumnComportamento == 'resultComp')
                                    <!-- <a href="/comportamento1" class="links"> -->
                                        <div class="cardArc" title="Clique para ver o resultado!">
                                            <div class="testeOk">
                                                <img src="src/assets/img/ok.svg"/>
                                            </div>
                                            <div class="cardImg">
                                                <img src="src/assets/img/perfil-comportamental.svg" />
                                            </div>
                                            <div class="cardDesc">
                                                Perfil Comportamental
                                            </div>
                                            <div class="cardDesc">
                                                <a href="/resultComportamento" class="links">Ver resultado  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                            </div>
                                        </div>
                                    <!-- </a> -->
                                @else
                                    <!-- <a href="/comportamento1" class="links"> -->
                                        <div class="cardArc" title="Clique para continuar o teste!">
                                            <div class="cardImg">
                                                <img src="src/assets/img/perfil-comportamental.svg" />
                                            </div>
                                            <div class="cardDesc">
                                                Perfil Comportamental
                                            </div>
                                            @if(isset($firstNullColumnComportamento))
                                                @if($firstNullColumnComportamento == 'comportamento2')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento2" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento3')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento3" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento4')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento4" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento5')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento5" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento6')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento6" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento7')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento7" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento8')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento8" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento9')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento9" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento10')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento10" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento11')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento11" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento12')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento12" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento13')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento13" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento14')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento14" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento15')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento15" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento16')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento16" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento17')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento17" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento18')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento18" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento19')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento19" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento20')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento20" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento21')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento21" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento22')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento22" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento23')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento23" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento24')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento24" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento25')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento25" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento26')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento26" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento27')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento27" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento28')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento28" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento29')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento29" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento30')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento30" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento31')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento31" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento32')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento32" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento33')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento33" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento34')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento34" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento35')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento35" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento36')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento36" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento37')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento37" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento38')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento38" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento39')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento39" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'comportamento40')
                                                    <div class="cardDesc">
                                                        <a href="../comportamento40" class="links">Continuar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @elseif($firstNullColumnComportamento == 'resultComp')
                                                    <div class="cardDesc">
                                                        <a href="../resultComportamento" class="links">Ver resultado  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                    </div>
                                                @endif
                                            @endif
                                        </div>
                                    <!-- </a> -->
                                @endif
                            <!-- Se tiver acesso -->
                        @else
                            <!-- Se não tiver acesso -->
                                <a href="https://pay.kiwify.com.br/ZMEFoFc" class="links">
                                    <div class="cardArc" title="Clique para comprar o teste!">
                                        <div class="cardImg">
                                            <img src="src/assets/img/perfil-comportamental.svg" />
                                        </div>
                                        <div class="cardDesc">
                                            Perfil Comportamental
                                        </div>
                                        <div class="cardDesc">
                                            <a href="https://pay.kiwify.com.br/ZMEFoFc" class="links">Compre seu teste <i class="fa-solid fa-store fa-fade" style="margin:0 0 0 15px;font-size:20px;background-color:transparent;color:rgba(187, 129, 53, 1);"></i></a>
                                        </div>
                                    </div>
                                </a>
                            <!-- Se não tiver acesso -->
                        @endif
                    <!-- Verifica se tem permissão para o teste comportamental -->

                    <!-- Verifica se tem permissão para o teste de temperamentos -->
                        @if($permiteTemperamentos == 1)
                            <!-- Se tiver acesso -->
                                @if($firstNullColumnTemper == 0)
                                    <a href="/temper1" class="links">
                                        <div class="cardArc" title="Clique para começar o teste!">
                                            <div class="cardImg">
                                                <img src="src/assets/img/identidade-de-temperamento.svg" />
                                            </div>
                                            <div class="cardDesc">
                                                Identidade de Temperamentos
                                            </div>
                                            <div class="cardDesc">
                                                <a href="/temper1" class="links">Iniciar  <i class="fa-solid fa-circle-right btnGo"></i></a>
                                            </div>
                                        </div>
                                    </a>
                                @elseif($firstNullColumnTemper == 'resultTemper')
                                    <a href="/resultTemper" class="links">
                                        <div class="cardArc" title="Clique para ver o resultado!">
                                            <div class="testeOk">
                                                <img src="src/assets/img/ok.svg"/>
                                            </div>
                                            <div class="cardImg">
                                                <img src="src/assets/img/identidade-de-temperamento.svg" />
                                            </div>
                                            <div class="cardDesc">
                                                Identidade de Temperamentos
                                            </div>
                                            <div class="cardDesc">
                                                <a href="../resultTemper" class="links">Ver resultado <i class="fa-solid fa-circle-right btnGo"></i></a>
                                            </div>
                                        </div>
                                    </a>
                                @else
                                    <!-- <a href="/temper1" class="links"> -->
                                        <div class="cardArc" title="Clique para continuar o teste!">
                                            <div class="cardImg">
                                                <img src="src/assets/img/identidade-de-temperamento.svg" />
                                            </div>
                                            <div class="cardDesc">
                                                Identidade de Temperamentos
                                            </div>
                                            @if(isset($firstNullColumnTemper))
                                                    @if($firstNullColumnTemper == 'temper2')
                                                        <div class="cardDesc">
                                                            <a href="../temper2" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                        </div>
                                                    @elseif($firstNullColumnTemper == 'temper3')
                                                        <div class="cardDesc">
                                                            <a href="../temper3" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                        </div>
                                                    @elseif($firstNullColumnTemper == 'temper4')
                                                        <div class="cardDesc">
                                                            <a href="../temper4" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                        </div>
                                                    @elseif($firstNullColumnTemper == 'temper5')
                                                        <div class="cardDesc">
                                                            <a href="../temper5" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                        </div>
                                                    @elseif($firstNullColumnTemper == 'temper6')
                                                        <div class="cardDesc">
                                                            <a href="../temper6" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                        </div>
                                                    @elseif($firstNullColumnTemper == 'temper7')
                                                        <div class="cardDesc">
                                                            <a href="../temper7" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                        </div>
                                                    @elseif($firstNullColumnTemper == 'temper8')
                                                        <div class="cardDesc">
                                                            <a href="../temper8" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                        </div>
                                                    @elseif($firstNullColumnTemper == 'temper9')
                                                        <div class="cardDesc">
                                                            <a href="../temper9" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                        </div>
                                                    @elseif($firstNullColumnTemper == 'temper10')
                                                        <div class="cardDesc">
                                                            <a href="../temper10" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                        </div>
                                                    @elseif($firstNullColumnTemper == 'temper11')
                                                        <div class="cardDesc">
                                                            <a href="../temper11" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                        </div>
                                                    @elseif($firstNullColumnTemper == 'temper12')
                                                        <div class="cardDesc">
                                                            <a href="../temper12" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                        </div>
                                                    @elseif($firstNullColumnTemper == 'temper13')
                                                        <div class="cardDesc">
                                                            <a href="../temper13" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                        </div>
                                                    @elseif($firstNullColumnTemper == 'temper14')
                                                        <div class="cardDesc">
                                                            <a href="../temper14" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                        </div>
                                                    @elseif($firstNullColumnTemper == 'temper15')
                                                        <div class="cardDesc">
                                                            <a href="../temper15" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                        </div>
                                                    @elseif($firstNullColumnTemper == 'temper16')
                                                        <div class="cardDesc">
                                                            <a href="../temper16" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                        </div>
                                                    @elseif($firstNullColumnTemper == 'temper17')
                                                        <div class="cardDesc">
                                                            <a href="../temper17" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                        </div>
                                                    @elseif($firstNullColumnTemper == 'temper18')
                                                        <div class="cardDesc">
                                                            <a href="../temper18" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                        </div>
                                                    @elseif($firstNullColumnTemper == 'temper19')
                                                        <div class="cardDesc">
                                                            <a href="../temper19" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                        </div>
                                                    @elseif($firstNullColumnTemper == 'temper20')
                                                        <div class="cardDesc">
                                                            <a href="../temper20" class="links">Continuar <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                        </div>
                                                    @elseif($firstNullColumnTemper == 'resultTemper')
                                                        <div class="cardDesc">
                                                            <a href="../resultTemper" class="links">Ver resultado <i class="fa-solid fa-circle-right btnGo"></i></a>
                                                        </div>
                                                    @endif
                                                @endif
                                        </div>
                                    <!-- </a> -->
                                @endif
                            <!-- Se tiver acesso -->
                        @else
                            <!-- Se não tiver acesso -->
                                <a href="https://pay.kiwify.com.br/zXiO5B7" class="links">
                                    <div class="cardArc" title="Clique para comprar o teste!">
                                        <div class="cardImg">
                                            <img src="src/assets/img/identidade-de-temperamento.svg" />
                                        </div>
                                        <div class="cardDesc">
                                            Identidade de Temperamentos
                                        </div>
                                        <div class="cardDesc">
                                            <a href="https://pay.kiwify.com.br/zXiO5B7" class="links">Compre seu teste <i class="fa-solid fa-store fa-fade" style="margin:0 0 0 15px;font-size:20px;background-color:transparent;color:rgba(187, 129, 53, 1);"></i></a>
                                        </div>
                                    </div>
                                </a>
                            <!-- Se não tiver acesso -->
                        @endif
                    <!-- Verifica se tem permissão para o teste de temperamentos -->
                </div>

                <x-suporte />

            </div>
        </div>
    </div>
@endsection
