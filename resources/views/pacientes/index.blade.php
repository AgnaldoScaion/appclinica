@extends('layout')

@section('title', 'Pacientes Cadastrados')

@section('content')
    <h1>Pacientes Cadastrados</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="action-buttons">
        <a href="{{ route('pacientes.create') }}" class="btn btn-primary">Novo Paciente</a>
    </div>

    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Idade</th>
            <th>Foto</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pacientes as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->nome }}</td>
                <td>{{ $p->cpf }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->idade }}</td>
                <td>
                    @if($p->foto)
                        <img src="{{ asset('storage/' . $p->foto) }}" width="60" class="img-preview">
                    @else
                        Sem foto
                    @endif
                </td>
                <td class="action-cell">
                    <div class="action-buttons">
                        <a href="{{ route('pacientes.edit', $p) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('pacientes.destroy', $p) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza?')">Excluir</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
