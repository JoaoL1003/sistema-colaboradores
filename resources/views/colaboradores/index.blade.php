@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Lista de Colaboradores</h1>

    <a href="{{ route('colaboradores.create') }}" class="btn btn-success mb-3">
        + Novo Colaborador
    </a>

    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Setor</th>
                    <th>Cidade</th>
                    <th>Check-in</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($colaboradores as $colaborador)
                    <tr>
                        <td>{{ $colaborador->nome }}</td>
                        <td>{{ $colaborador->setor }}</td>
                        <td>{{ $colaborador->cidade }}</td>
                        <td>{{ \Carbon\Carbon::parse($colaborador->data_checkin)->format('d/m/Y H:i') }}</td>
                        <td>
                            <a href="{{ route('colaboradores.edit', $colaborador->id) }}" class="btn btn-sm btn-primary">
                                ✏️ Editar
                            </a>

                            <form action="{{ route('colaboradores.destroy', $colaborador->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">
                                    🗑️ Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Nenhum colaborador cadastrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

