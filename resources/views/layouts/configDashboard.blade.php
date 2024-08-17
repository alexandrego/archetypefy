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
                    <div class="formUser">
                        <div class="addUser">
                            {{-- Buscar usuário --}}
                            <i class="fa-solid fa-magnifying-glass fa-archetypefy searchUsers" data-toggle="modal" data-target="#modalExemplo"></i>

                            {{-- Adicionar usuário --}}
                            <i class="fa-solid fa-user-plus fa-archetypefy" data-toggle="modal" data-target="#modalExemploAdicionar"></i>
                        </div>

                        <!-- Modal Buscar -->
                        <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Buscar Usuário</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form action="#" method="POST" onsubmit="buscando()">
                                    @csrf
                                    <div class="modal-body">
                                        <fieldset class="fieldsetArch">
                                            <legend>E-mail</legend>
                                            <i class="fa-regular fa-envelope" style="font-size:17px;margin: 0 8px 0 0;border-right: 1px solid;padding: 0 8px 0 0;"></i>
                                            <input type="text" id="email" name="email" placeholder="Informe o e-mail do usuário" />
                                        </fieldset>

                                        <fieldset class="fieldsetArch">
                                            <legend>CPF</legend>
                                            <i class="fa-regular fa-envelope" style="font-size:17px;margin: 0 8px 0 0;border-right: 1px solid;padding: 0 8px 0 0;"></i>
                                            <input type="text" id="cpf" name="cpf" placeholder="Informe o CPF do usuário" />
                                        </fieldset>
                                    </div>
                                    <div class="modal-footer">
                                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button> --}}
                                    <button type="button" class="btn btn-primary">Buscar</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>

                        <!-- Modal Adicionar -->
                        <div class="modal fade" id="modalExemploAdicionar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Usuário</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <fieldset>
                                        <legend>Nome</legend>
                                        <i class="fa-regular fa-envelope" style="font-size:17px;margin: 0 8px 0 0;border-right: 1px solid;padding: 0 8px 0 0;"></i>
                                        <input type="text" id="email" name="email" placeholder="Informe o e-mail do usuário" />
                                    </fieldset>

                                    <fieldset>
                                        <legend>CPF</legend>
                                        <i class="fa-regular fa-envelope" style="font-size:17px;margin: 0 8px 0 0;border-right: 1px solid;padding: 0 8px 0 0;"></i>
                                        <input type="text" id="cpf" name="cpf" placeholder="Informe o do usuário" />
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button> --}}
                                <button type="button" class="btn btn-primary">Cadastrar</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="searchUser">
                            <div class="userTitle">
                                <span>Usuários</span>
                            </div>

                            <div class="userList">
                                <div class="orderUserTags">
                                    <div class="userName">Nome</div>
                                    <div class="viewDetaill">Ação</div>
                                </div>

                                <div class="showNameUserAndAction">
                                    @foreach($customers as $customer)
                                    <div class="showEvery">
                                        <div class="showNameUser">
                                            {{ $customer->full_name }}
                                        </div>

                                        <div class="viewDetail" data-toggle="modal" data-target="#user{{ $customer->id }}">
                                            Detalhes
                                            <i class="fa-solid fa-info-circle"></i>
                                        </div>
                                    </div>
                                    <!-- Mostrar modal para cada usuario -->
                                        <!-- Modal -->
                                        <div class="modal fade" id="user{{ $customer->id }}" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="TituloModalCentralizado">Título do modal</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Id do usuário -> {{ $customer->id }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                <button type="button" class="btn btn-primary">Salvar mudanças</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                     <!-- Mostrar modal para cada usuario -->
                                    @endforeach
                                </div>

                                <!-- Links de paginação personalizados -->
                                <div class="pagination">
                                    <div>
                                        {{-- Link para a página anterior --}}
                                        @if ($customers->onFirstPage())
                                            <span class="disabled">« Anterior</span>
                                        @else
                                            <a href="{{ $customers->previousPageUrl() }}">« Anterior</a>
                                        @endif
                                    </div>

                                    <div>
                                        {{-- Links para as páginas --}}
                                        @for ($i = 1; $i <= $customers->lastPage(); $i++)
                                            @if ($i == $customers->currentPage())
                                                <span class="current">{{ $i }}</span> <!-- Página atual -->
                                            @else
                                                <a href="{{ $customers->url($i) }}">{{ $i }}</a> <!-- Link para outras páginas -->
                                            @endif
                                        @endfor
                                    </div>

                                    <div>
                                        {{-- Link para a próxima página --}}
                                        @if ($customers->hasMorePages())
                                            <a href="{{ $customers->nextPageUrl() }}">Próximo »</a>
                                        @else
                                            <span class="disabled">Próximo »</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
