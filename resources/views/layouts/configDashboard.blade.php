@extends('layouts.head')

@section('title', 'Usuário - Dashboard')

@section('content')
    <div class="content">
        <div class="contentHome">
                @auth
                    <div class="logout">
                        <form action="/dashboard" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-danger"> <i class="fa-solid fa-circle-left" style="margin: 0 8px 0 0;"></i>Voltar</button>
                        </form>
                    </div>
                @endauth

            <div class="logo">
                <img src="src/assets/img/logo.svg" />
            </div>

            <div class="formulario">
                <form action="#" method="POST" onsubmit="buscando()">
                    @csrf
                    <div class="formUser">
                        {{-- <div class="addUser">
                            {{-- Buscar usuário --}
                            <i class="fa-solid fa-magnifying-glass searchUsers"></i>

                            {{-- Adicionar usuário --}
                            <i class="fa-solid fa-user-plus"></i>
                        </div> --}}

                        <div class="addUser">
                            {{-- Buscar usuário --}}
                            <i class="fa-solid fa-magnifying-glass searchUsers" onclick="openPopup()"></i>

                            {{-- Adicionar usuário --}}
                            <i class="fa-solid fa-user-plus"></i>
                        </div>

                        <div id="userSearchPopup" class="popup">
                            <div class="popup-content">
                                <span class="close-button" onclick="closePopup()">&times;</span>
                                <h2>Buscar Usuários</h2>
                                <input type="text" id="searchInput" placeholder="Digite o nome do usuário">
                                <button onclick="searchUsers()">Buscar</button>
                                <div id="searchResults"></div>
                            </div>
                        </div>

                        <div class="searchUser">
                            {{-- <fieldset>
                                <legend>Buscar usuário</legend>
                                <i class="fa-regular fa-envelope" style="font-size:17px;margin: 0 8px 0 0;border-right: 1px solid;padding: 0 8px 0 0;"></i>
                                <input type="text" id="email" name="email" placeholder="Informe o e-mail do usuário" required />
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </fieldset> --}}
                            <h2>Usuários</h2>
                            <ul>
                                <li>Alexandre</li>
                                <li>Samuel</li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
