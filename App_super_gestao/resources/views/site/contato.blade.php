<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - Contato</title>
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

            .chamada img {
                width: 20px;
                float: left;
                margin-right: 10px;
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

            .conteudo-destaque {
                width: 100%;
                height: 100%;
                min-height: 800px; 
            }

            .esquerda {
                float:left;
                background-color: #268fd0;
                width: 60%;
                height: 100%;
            }

            .direita {
                float:right;
                background-color: #2a9ee2;
                width: 40%;
                height: 100%;
            }

            .informacoes, .contato {
                margin: 100px 40px 40px 40px;
            }

            .contato-principal {
                margin: 0px 60px 60px 40px;
            }

            .chamada {
                margin-top: 30px;
                margin-left: 20px;
            }

            .video {
                margin: 40px;
            }

            .video img {
                width: 60px;
                float: left;
                margin-right: 10px;
            }

            .conteudo-pagina {
                width: 100%;
                height: 100%;
                text-align: center;
                margin-bottom: 100px;
            }

            .titulo-pagina {
                padding: 100px 0px 60px 0px;
                background-color: #2a9ee2;
                text-align: center;
            }

            .informacao-pagina {
                text-align: center;
                margin-top: 30px;
            }

            .informacao-pagina p{
                color: #333;
            }

            .rodape {
                width: 100%;
            }

            .redes-sociais, .area-contato, .localizacao {
                width: 33.333%;
                border-top:solid 1px #ccc;
                float: left;
                text-align: center;
                background-color: #f8f8f8;
                height: 250px;
            }

            .redes-sociais, .area-contato, .localizacao p, span {
                color: #333333;
            }

            .redes-sociais img {
                margin: 0px 15px 0px 15px;
                width: 20px;
                float: left;
                margin-right: 10px;
            }

            .localizacao img {
                width: 20px;
                float: left;
                margin-right: 50px;
            }

        </style>
    </head>

    <body>
        <div class="topo">

            <div class="logo">
                <img src="img/logo.svg">
            </div>

            <div class="menu">
                <ul>
                    <li><a href="{{ route('site.index') }}">Principal</a></li>
                    <li><a href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
                    <li><a href="{{ route('site.contato') }}">Contato</a></li>
                </ul>
            </div>
        </div>

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Entre em contato conosco</h1>
            </div>

            <div class="informacao-pagina">
                <div class="contato-principal">
                    <form action={{ route('site.contato') }} method="post">
                        @csrf
                        <input type="text" name="nome" value="{{ old('nome') }}" placeholder="Nome" class="borda-preta">
                        @if($errors->has('nome'))
                        {{ $errors->first('nome') }}
                        @endif
                        <br>
                        <input type="text" name="telefone" value="{{ old('telefone') }}"placeholder="Telefone" class="borda-preta">
                        @if($errors->has('telefone'))
                        {{ $errors->first('telefone') }}
                        @endif
                        <br>
                        <input type="text" name="email" value="{{ old('email') }}" placeholder="E-mail" class="borda-preta">
                        @if($errors->has('email'))
                        {{ $errors->first('email') }}
                        @endif
                        <br>
                        <select class="borda-preta" name="motivo_contato">
                            <option value="">Qual o motivo do contato?</option>
                            <option value="1" {{ old('motivo_contato') == 1 ? 'selected' : '' }}>Dúvida</option>
                            <option value="2" {{ old('motivo_contato') == 2 ? 'selected' : '' }}>Elogio</option>
                            <option value="3" {{ old('motivo_contato') == 3 ? 'selected' : '' }}>Reclamação</option>
                        </select>
                        <br>
                        <textarea class="borda-preta" name="mensagem">
                            @if(old('mensagem') != '')
                            {{ old('mensagem') }}
                            @else 
                            Preencha aqui a sua mensagem
                            @endif
                        </textarea>
                        <br>
                        <button type="submit" class="borda-preta">ENVIAR</button>
                    </form>
                </div>
            </div>  
        </div>

        <div class="rodape">
            <div class="redes-sociais">
                <h2>Redes sociais</h2>
                <img src="img/facebook.svg">
                <img src="img/linkedin.svg">
                <img src="img/youtube.svg">
            </div>
            <div class="area-contato">
                <h2>Contato</h2>
                <span>(11) 3333-4444</span>
                <br>
                <span>supergestao@dominio.com.br</span>
            </div>
            <div class="localizacao">
                <h2>Localização</h2>
                <img src="img/mapa.svg">
            </div>
        </div>
    </body>
</html>