<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Super Gestão - Adicionar Fornecedor</title>
    <meta charset="utf-8">
    <style>
        /* Seu estilo CSS aqui */
    </style>
</head>
<body>
    <div class="topo">
        <!-- Seu cabeçalho aqui -->
    </div>

    <div class="conteudo-pagina">
        <div class="titulo pagina">
            <p>Fornecedor - Adicionar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <!-- Exibição de mensagens de sucesso ou erro aqui -->
            @if(session('msg'))
                <p>{{ session('msg') }}</p>
            @endif

            <div style="width:30%">
                <form action="{{ route('app.adicionarFornecedor') }}" method="post">
                    @csrf
                    <input type="text" name="nome" value="{{ old('nome') }}" class="borda-preta" placeholder="Nome">
                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}

                    <input type="text" name="site" value="{{ old('site') }}" class="borda-preta" placeholder="Site">
                    {{ $errors->has('site') ? $errors->first('site') : '' }}

                    <input type="text" name="UF" value="{{ old('UF') }}" class="borda-preta" placeholder="UF">
                    {{ $errors->has('UF') ? $errors->first('UF') : '' }}

                    <input type="text" name="email" value="{{ old('email') }}" class="borda-preta" placeholder="E-mail">
                    {{ $errors->has('email') ? $errors->first('email') : '' }}

                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
