<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Fornecedor</title>
</head>
<body>
    <h1>Editar Fornecedor</h1>
    
    <!-- Formulário para edição do fornecedor -->
    <form action="{{ route('app.fornecedor.atualizar', ['id' => $fornecedor->id]) }}" method="POST">
        @csrf
        <!-- Campo de nome -->
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" value="{{ $fornecedor->nome }}"><br><br>

        <!-- Campo de site -->
        <label for="site">Site:</label><br>
        <input type="text" id="site" name="site" value="{{ $fornecedor->site }}"><br><br>

        <!-- Campo de UF -->
        <label for="UF">UF:</label><br>
        <input type="text" id="UF" name="UF" value="{{ $fornecedor->UF }}"><br><br>

        <!-- Campo de e-mail -->
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" value="{{ $fornecedor->email }}"><br><br>

        <!-- Botão de enviar -->
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
