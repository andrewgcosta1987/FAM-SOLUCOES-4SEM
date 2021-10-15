<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./control/css/bares&restaurantes.css">
    <link rel="stylesheet" href="./control/css/estilo.css">
    <title>Orçamento</title>
</head>
<body>
<?php
  require_once('./view/topo.php');
  require_once('./view/menu.php');
?>
<header class="cabecalho">
    <h1>Orçamentos FAM-Soluções</h1>
    <h2>Índice dos Cardápios</h2>
</header>
<nav class="navegacao">
    <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php"?> class="verde">Sem formatação</a>
    <a href="index.php" class="vermelho">Voltar</a>
</nav>
<main class="principal">
    <section class="conteudo">
        <nav class="modulos">
            <article class="modulo laranja">
                <h3>Modelos de Cardápios</h3>
                <ul>
                    <li>
                        <a href="./CARDAF/PaginaExemplo.php">Modelo Principal</a>
                    </li>
                    <li>
                        <a href="./modeloTabela.php">Modelo Tabelado</a>
                    </li>
                    <li>
                        <a href="./modeloCards.php">Modelo Cards</a>
                    </li>
                </ul>
            </article>
        </nav>
        <?php
             include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
        ?>
    </section>
</main>    
</body>
</html>
