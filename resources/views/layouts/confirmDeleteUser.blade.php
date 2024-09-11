@extends('layouts.head')

@section('title', 'Realmente quer excluir?')

@section('content')
    <div class="content">
        <div class="contentHome">

            <div class="logo">
                <img src="src/assets/img/logo.svg" />
            </div>

            @php
                $customer = session('customerId');
            @endphp

            <div class="formulario">
                <div class="divResultadoFinal">
                    <p>Tem certeza que deseja excluir o usuário <span class="resultadoFinal">{{ $customer->full_name ?? 'Nome não disponível' }}</span>?</p>
                </div>

                <form action="{{ route('okDelete', $customer->id ?? 'ID não disponível') }}" method="POST">
                    @csrf
                    @method('DELETE') <!-- Método DELETE para exclusão -->

                    <div class="form-group">
                        <button type="submit" class="btn btn-danger">Sim, excluir</button>
                        <a href="{{ route('configDashboard') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
