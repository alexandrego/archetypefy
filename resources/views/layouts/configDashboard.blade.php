@extends('layouts.head')

@section('title', 'Usuário - Dashboard')

@section('content')
    <div class="content">
        <div class="contentHome">
                @auth
                    <div class="logout">
                        <form action="/dashboard" method="GET">
                            @csrf
                            <button type="submit"> <i class="fa-solid fa-circle-left" style="margin: 0 8px 0 0;"></i>Voltar</button>
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
                        <div class="addUser">
                            {{-- Buscar usuário --}}
                            <i class="fa-solid fa-magnifying-glass fa-archetypefy searchUsers" data-toggle="modal" data-target="#modalExemplo"></i>

                            {{-- Adicionar usuário --}}
                            <i class="fa-solid fa-user-plus fa-archetypefy"></i>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                ...
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-primary">Salvar mudanças</button>
                                </div>
                            </div>
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
