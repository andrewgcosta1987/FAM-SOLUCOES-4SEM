<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bares & Restaurantes</title>
    <link rel="stylesheet" href="../projeto-3sem-2021-1-main/control/css/bares&restaurantes.css">
</head>
<body>
<?php
  require_once('view/topo.php');
  require_once('view/menu.php');
?>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Login</h3>
                    <ul>
                        <li>
                            <a href="?modulo=dashboard&acao=ver"> DASHBOARD</a>
                        </li>
                        <li>
                            <a href="?modulo=cliente&acao=adicionar">ADICIONAR CLIENTE</a>
                        </li>
                        <li>
                            <a href="?modulo=cliente&acao=listar">LISTAR CLIENTES</a>
                        </li>
                        <li>
                            <a href="?modulo=produto&acao=adicionar">ADICIONAR PRODUTO</a>
                        </li>
                        <li>
                            <a href="?modulo=produto&acao=listar">LISTAR PRODUTOS</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <?php
            if(isset($_GET['modulo'])){ $modulo = $_GET['modulo'];}else{ $modulo = "dashboard"; }
            if(isset($_GET['acao'])){ $acao = $_GET['acao'];}else{ $acao = "ver"; }

            include("modulos/".$modulo."/".$acao.".php");
                    
            ?>
        </div>
    </main>
<?php
  require_once('view/base.php');
?>
<footer class="rodape">
Andrew TI & FAM-Soluções © <?= date('Y'); ?>
</footer>    
</body>
</html>
