<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUESTEST</title>
    <link rel="stylesheet" href="/css/layout.css">
</head>

<body>
    <header id="cabecalho">
        <a href="/">
            <img src="/LOGO.png" alt="">
        </a>
        <input id="campopesquisa" type="text" placeholder="Pesquisar Simulados...">
    </header>
    <section id="conteudo">
        @yield('conteudo')
    </section>

    <footer id="rodape">
        QUESTEST SIMULADOR 2021
    </footer>
</body>

</html>