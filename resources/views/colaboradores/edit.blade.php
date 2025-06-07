@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Colaborador</h1>

    <form action="{{ route('colaboradores.update', $colaborador->id) }}" method="POST">
    @csrf
    @method('PUT')

        <div class="mb-3">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control" value="{{ $colaborador->nome }}" required>
        </div>

        <div class="mb-3">
            <label>Setor:</label>
            <select name="setor" class="form-control" required>
                @foreach($setores as $setor)
                    <option value="{{ $setor }}" {{ $colaborador->setor == $setor ? 'selected' : '' }}>{{ $setor }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Cidade:</label>
            <select name="cidade" class="form-control" required>
                @foreach($cidades as $cidade)
                    <option value="{{ $cidade }}" {{ $colaborador->cidade == $cidade ? 'selected' : '' }}>{{ $cidade }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Data Check-in:</label>
            <input type="datetime-local" name="data_checkin" class="form-control" value="{{ $colaborador->data_checkin->format('Y-m-d\TH:i') }}" required>
        </div>

        <button class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
