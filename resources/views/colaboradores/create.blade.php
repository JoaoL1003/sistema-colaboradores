@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Colaborador</h1>

    <form action="{{ route('colaboradores.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Setor:</label>
            <select name="setor" class="form-control" required>
                @foreach($setores as $setor)
                    <option value="{{ $setor }}">{{ $setor }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Cidade:</label>
            <select name="cidade" class="form-control" required>
                @foreach($cidades as $cidade)
                    <option value="{{ $cidade }}">{{ $cidade }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Data Check-in:</label>
            <input type="datetime-local" name="data_checkin" class="form-control" required>
        </div>

        <button class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection

