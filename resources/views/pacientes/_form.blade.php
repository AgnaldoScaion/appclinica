<div class="form-container">
    <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if($method === 'PUT')
            @method('PUT')
        @endif

        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" value="{{ old('nome', $paciente->nome ?? '') }}" required>
            @error('nome') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>CPF:</label>
            <input type="text" name="cpf" value="{{ old('cpf', $paciente->cpf ?? '') }}" required>
            @error('cpf') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email', $paciente->email ?? '') }}" required>
            @error('email') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Idade:</label>
            <input type="number" name="idade" value="{{ old('idade', $paciente->idade ?? '') }}" required>
            @error('idade') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Foto:</label>
            <input type="file" name="foto">
            @error('foto') <div class="error-message">{{ $message }}</div> @enderror
            @if(isset($paciente) && $paciente->foto)
                <img src="{{ asset('storage/' . $paciente->foto) }}" class="img-preview">
            @endif
        </div>

        <div class="action-buttons">
            <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
            <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </form>
</div>
