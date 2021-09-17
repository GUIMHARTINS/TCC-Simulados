<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUESTEST</title>
    <link rel="stylesheet" href="/layout.css">
</head>

<body>
    <header id="cabecalho">
        <img src="/LOGO.png" alt="">
        <input id="campopesquisa" type="text" placeholder="Pesquisar Simulados...">
    </header>
    <section id="conteudo">
    @for($i = 1; $i <=10; $i++)
        <div class="boxsimulado">
            <div class="nome">ENEM 2019</div>
            <div class="quantidade">20 questoes</div>
        </div>
        @endfor
    </section>

    <footer id="rodape">
        QUESTEST SIMULADOR 2021
    </footer>
</body>

</html>
