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
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .titulo-pagina {
            display: flex;
            
            padding: 15px 5px 5px 5px;
            margin-bottom: 10px;
            background-color: #c4c4c4;
            text-align: center;
            margin-bottom: 50px;
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

        .menu2 {
            margin-top: 50px;
            float: right;
            margin-right: 40px;
            margin-bottom: 20px;

        }

        .menu2 li {
            display: inline;
            float: left;
        }

        .menu2 ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .menu2 a {
            text-decoration: none;
            padding: 14px 16px;
            color: #333;
        }

        .menu2 a:hover {
            color: #268fd0;
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
    <div class="menu2">
        <ul>
            <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
            <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
        </ul>
    </div>
    <div class="titulo-pagina">
      <table border="1" width="100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Site</th>
                <th>UF</th>
                <th>E-mail</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fornecedores as $fornecedor )
           <tr>
               <td>{{ $fornecedor->nome }}</td>
               <td>{{ $fornecedor->site }}</td>
               <td>{{ $fornecedor->UF }}</td>
               <td>{{ $fornecedor->email }}</td>
               <td><a href="{{ route('app.fornecedor.excluir', $fornecedor->id) }}">Apagar</a></td>
               <td><a href="{{ route('app.fornecedor.editar', $fornecedor->id) }}">Editar</a></td>
           </tr>
            @endforeach
        </tbody>
      </table>
    </div>
</div>
</body>
</html>
