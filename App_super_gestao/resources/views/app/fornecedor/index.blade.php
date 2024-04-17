<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Super Gestão - Sobre Nós</title>
    <meta charset="utf-8">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }

        p, span {
            color: #ffffff;
        }

        h1 {
            color: #ffffff;
            font-size: 28px;
        }

        h2 {
            color: #333333;
            font-size: 22px;
        }

        input, select, textarea, button {
            width: 100%;
            padding: 10px 15px;
            margin: 10px 0px 10px 0px;
            box-sizing: border-box;
            border-radius: 3px;
            background-color: transparent;
            color: #333;
        }

        .texto-branco {
            color: #ffffff;
        }

        .borda-branca {
            border: solid 1px #fff;
        }

        .borda-preta {
            border: solid 1px #333;
            margin-left: auto;
            margin-right: auto;
        }

        button {
            background-color: #7ab829;
            cursor: pointer;
            color: #fff;
        }

        button:hover {
            background-color: #6ea22c;
        }

        ::placeholder {
            color: #333333;
            opacity: 1;
        }

        :-ms-input-placeholder {
            color: #333333;
        }

        ::-ms-input-placeholder {
            color: #333333;
        }

        .topo {
            width: 100%;
            background-color: #f8f8f8;
            position: absolute;
            padding: 20px 0px 10px 0px;
        }

        .logo {
            width: 50px;
            float: left;
            margin-left: 40px;
        }

        .menu {
            float: right;
            margin-right: 40px;
        }

        .menu li {
            display: inline;
            float: left;
        }

        .menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .menu a {
            text-decoration: none;
            padding: 14px 16px;
            color: #333;
        }

        .menu a:hover {
            color: #268fd0;
        }

        .conteudo-pagina {
            width: 100%;
            height: 100%;
            text-align: center;
            margin-bottom: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .titulo-pagina {
            padding: 70px 0px 10px 0px;
            margin-bottom: 10px;
            background-color: #2a9ee2;
            text-align: center;
        }

        .informacao-pagina {
        text-align: center;
        margin-top: 30px;
        display: flex;
        justify-content: center;
}


        .informacao-pagina p{
            color: #333;
        }
    </style>
</head>

<body>
<div class="topo">
    <div class="logo">
        <img src="{{ asset('img/logo.svg') }}">
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.home') }}">Home</a></li>
            <li><a href="{{ route('app.cliente') }}">Cliente</a></li>
            <li><a href="{{ route('app.fornecedor') }}">Fornecedor</a></li>
            <li><a href="{{ route('app.produto') }}">Produto</a></li>
            <li><a href="{{ route('app.sair') }}">Sair</a></li>
        </ul>
    </div>
</div>
<div class="conteudo-pagina">
    <div class="titulo pagina">
        <p>Fornecedor</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
            <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
        </ul>
    </div>
    <div class="informacao-pagina">
        <div style="width:30%">
            <form action="{{ route('app.fornecedor.listar') }}" method="post">
                @csrf
                <input type="text" name="nome" class="borda-preta" placeholder="Nome">
                <input type="text" name="site" class="borda-preta" placeholder="Site">
                <input type="text" name="UF" class="borda-preta" placeholder="UF">
                <input type="text" name="email" class="borda-preta" placeholder="E-mail">
                <button type="submit" class="borda-preta">Pesquisar</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
