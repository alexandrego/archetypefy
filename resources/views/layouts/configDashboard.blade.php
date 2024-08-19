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
                                <form action="/buscaUser" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">Email</span>
                                            </div>
                                            <input type="text" class="form-control" id="basic-url" name="email" aria-describedby="basic-addon3">
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">CPF</span>
                                            </div>
                                            <input type="text" class="form-control" id="cpf" name="CPF" aria-describedby="basic-addon3" oninput="mascaraCPF(this)" maxlength="14">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-primary">Buscar</button>
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
                                <form action="/saveUser" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">Nome Completo</span>
                                            </div>
                                            <input type="text" class="form-control" id="basic-url" name="full_name" placeholder="Informe o nome completo" aria-describedby="basic-addon3" required>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">Primeiro Nome</span>
                                            </div>
                                            <input type="text" class="form-control" id="basic-url" name="first_name" placeholder="Informe o primeiro nome" aria-describedby="basic-addon3" required>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">Email</span>
                                            </div>
                                            <input type="text" class="form-control" id="basic-url" name="email" placeholder="Informe o email" aria-describedby="basic-addon3" required>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">CPF</span>
                                            </div>
                                            <input type="text" class="form-control" id="basic-url" name="CPF" placeholder="Informe o CPF" aria-describedby="basic-addon3" oninput="mascaraCPF(this)" maxlength="14" required>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">Celular</span>
                                            </div>
                                            <input type="text" class="form-control" id="basic-url" name="mobile" placeholder="Informe o celular" aria-describedby="basic-addon3" oninput="mascaraCelular(this)" maxlength="15"  required>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Teste de Temperamentos</span>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name="temperamentos">
                                            <option value="1">Ativo</option>
                                            <option value="0" selected>Inativo</option>
                                        </select>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Perfil Comportamental</span>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name="comportamental">
                                            <option value="1">Ativo</option>
                                            <option value="0" selected>Inativo</option>
                                        </select>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Teste de Arquétipos</span>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name="arquetipos">
                                            <option value="1">Ativo</option>
                                            <option value="0" selected>Inativo</option>
                                        </select>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>

                        <div class="searchUser">

                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif

                                @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                                @endif


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
                                                    <h5 class="modal-title" id="TituloModalCentralizado">Atualizar Usuário</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="/updateUser" method="POST">
                                                @csrf
                                                    <div class="modal-body">

                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon3">Nome Completo</span>
                                                            </div>
                                                            <input type="text" class="form-control" id="basic-url" name="full_name" value="{{ $customer->full_name }}" aria-describedby="basic-addon3">
                                                        </div>

                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon3">Primeiro Nome</span>
                                                            </div>
                                                            <input type="text" class="form-control" id="basic-url" name="first_name" value="{{ $customer->first_name }}" aria-describedby="basic-addon3">
                                                        </div>

                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon3">Email</span>
                                                            </div>
                                                            <input type="text" class="form-control" id="basic-url" name="email" value="{{ $customer->email }}" aria-describedby="basic-addon3">
                                                        </div>

                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon3">CPF</span>
                                                            </div>
                                                            <input type="text" class="form-control" id="basic-url" name="CPF" value="{{ $customer->CPF }}" aria-describedby="basic-addon3">
                                                        </div>

                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon3">Celular</span>
                                                            </div>
                                                            <input type="text" class="form-control" id="basic-url" name="mobile" value="{{ $customer->mobile }}" aria-describedby="basic-addon3">
                                                        </div>

                                                        <input type="hidden" name="id" value="{{ $customer->id }}" />
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon3">Teste de Temperamentos</span>
                                                        </div>
                                                        <select class="custom-select" id="inputGroupSelect01" name="temperamentos">
                                                            <option value="1" {{ $customer->temperamentos == 1 ? 'selected' : '' }}>Ativo</option>
                                                            <option value="0"  {{ $customer->temperamentos == 0 ? 'selected' : '' }}>Inativo</option>
                                                        </select>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon3">Perfil Comportamental</span>
                                                        </div>
                                                        <select class="custom-select" id="inputGroupSelect01" name="comportamental">
                                                            <option value="1" {{ $customer->comportamental == 1 ? 'selected' : '' }}>Ativo</option>
                                                            <option value="0"  {{ $customer->comportamental == 0 ? 'selected' : '' }}>Inativo</option>
                                                        </select>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon3">Teste de Arquétipos</span>
                                                        </div>
                                                        <select class="custom-select" id="inputGroupSelect01" name="arquetipos">
                                                            <option value="1" {{ $customer->arquetipos == 1 ? 'selected' : '' }}>Ativo</option>
                                                            <option value="0"  {{ $customer->arquetipos == 0 ? 'selected' : '' }}>Inativo</option>
                                                        </select>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                        <button type="submit" class="btn btn-primary">Salvar mudanças</button>
                                                    </div>
                                                </form>
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
