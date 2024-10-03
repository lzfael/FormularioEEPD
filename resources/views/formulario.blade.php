<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Laravel</title>
</head>
<body>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<form action="{{ route('formulario.store') }}" method="POST">
    @csrf

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" value="{{ old('nome') }}">
    @error('nome')
    <p>{{ $message }}</p>
    @enderror

    <br><br>

    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" value="{{ old('cpf') }}">
    @error('cpf')
    <p>{{ $message }}</p>
    @enderror

    <br><br>

    <label for="rg">RG:</label>
    <input type="text" id="rg" name="rg" value="{{ old('rg') }}">
    @error('rg')
    <p>{{ $message }}</p>
    @enderror

    <br><br>

    <label for="data_expedicao">Data de Expedição:</label>
    <input type="date" id="data_expedicao" name="data_expedicao" value="{{ old('data_expedicao') }}">
    @error('data_expedicao')
    <p>{{ $message }}</p>
    @enderror

    <br><br>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha">
    @error('senha')
    <p>{{ $message }}</p>
    @enderror

    <br><br>

    <label for="senha_confirmation">Confirmar Senha:</label>
    <input type="password" id="senha_confirmation" name="senha_confirmation">

    <br><br>

    <button type="submit">Enviar</button>
</form>
</body>
</html>
