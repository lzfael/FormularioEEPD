<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario | Escola Estatual Presidente Dutra</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to bottom left, #80bce4, #0771B8);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
            margin: 0;
            position: relative;
        }

        .header {
            display: flex;
            align-items: center; /* Alinha verticalmente logo e título */
            justify-content: center; /* Centraliza o título */
            width: 100%; /* Largura total para ocupar toda a página */
            position: relative; /* Para a logo */
            padding-top: 20px; /* Espaçamento acima */
            margin-top: 15px;
        }

        .logo {
            position: absolute; /* Para posicionar a logo */
            top: 0; /* No topo */
            left: 20px; /* Distância da esquerda */
        }

        .container {
            padding: 50px;
            background-image: linear-gradient(to bottom left, #0771B8, #72b5e2);
            border-radius: 60px;
            background-color: rgba(255, 255, 255, 0.1);
            width: 784.72px;
            margin-top: 130px; /* Espaço acima do container */
        }

        .title {
            text-align: center;
            color: white;
            font-size: 24px; /* Tamanho do texto do título */
            margin: 0; /* Remove margens */
        }

        .form-group, .form-group-inline {
            margin-bottom: 7px;
        }

        .form-group-inline {
            display: flex;
            justify-content: space-between;
        }

        label {
            color: white;
            font-size: 14px;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: rgba(0, 0, 0, 0.1);
            color: white;
            font-size: 14px;
            outline: none;
        }

        button {
            background-color: #09456D; /* Cor azul escura */
            color: white; /* Cor do texto do botão */
            border: none; /* Remove a borda padrão */
            border-radius: 25px; /* Borda arredondada */
            padding: 10px 40px; /* Espaçamento interno */
            font-size: 16px; /* Tamanho da fonte */
            cursor: pointer; /* Cursor muda ao passar sobre o botão */
            transition: background-color 0.3s ease; /* Transição suave para mudança de cor */
        }
        .botoes{
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            margin-top: 20px;
        }
        button:hover {
            background: linear-gradient(90deg, rgba(14,57,85,1) 0%, rgba(15,55,83,1) 100%);
        }

        .footer {
            margin-top: 10px;
            color: white;
            font-size: 12px;
        }
        .footer a{
            text-decoration: none;
            list-style: none;
            color: #09456D;
        }

        .copyright {
            position: absolute; /* Para fixar no final da página */
            font-size: 15px;
            bottom: 10px; /* Margem do fundo */
            left: 50%; /* Centraliza horizontalmente */
            transform: translateX(-50%); /* Ajusta o centro */
        }
    </style>
</head>
<body>
<div class="header">
    <img src="{{ asset('images/logo.png') }}" alt="Logo da Escola" class="logo" width="100" height="100"> <!-- Ajuste o caminho da imagem e o tamanho conforme necessário -->
    <h1 class="title">ESCOLA ESTADUAL PRESIDENTE DUTRA</h1>
</div>
<div class="container">
    @if (session('success'))
        <script>
            alert('{{ session('success') }}');
        </script>
    @endif
    <form action="{{ route('formulario.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nome">Digite o seu Nome Completo:</label>
            <input type="text" id="nome" name="nome" value="{{ old('nome') }}">
            @error('nome')
            <div class="error-message" style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="cpf">Digite o seu CPF:</label>
            <input type="text" id="cpf" name="cpf" value="{{ old('cpf') }}">
            @error('cpf')
            <div class="error-message" style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group-inline">
            <div class="form-group">
                <label for="rg">Digite o RG (Registro Geral):</label>
                <input type="text" id="rg" name="rg" value="{{ old('rg') }}">
                @error('rg')
                <div class="error-message" style="color: red;">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="data_expedicao">Data de expedição:</label>
                <input type="date" id="data_expedicao" name="data_expedicao" value="{{ old('data_expedicao') }}">
                @error('data_expedicao')
                <div class="error-message" style="color: red;">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha">
            @error('senha')
            <div class="error-message" style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="confirmar_senha">Redefinir Senha:</label>
            <input type="password" id="confirmar_senha" name="senha_confirmation">
            @error('confirmar_senha')
            <div class="error-message" style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <p class="footer">
            Já possui uma conta? <a href="#">Clique aqui para entrar</a>
        </p>

        <div class="botoes">
            <button type="submit">Cadastrar</button>
            <button type="reset">Remover</button>
        </div>


    </form>
</div>
<p class="footer copyright">Copyright © 2024 Escola Estadual Presidente Dutra</p>


</body>
</html>
