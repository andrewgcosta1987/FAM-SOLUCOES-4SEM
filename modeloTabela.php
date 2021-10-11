<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estiloModeloTabela.css">
    <title>Modelo com Tabela</title>
</head>
<?php
  require_once('./view/topo.php');
  require_once('./view/menu.php');
?>
<body>
    <main>
        <h1>Modelo para aplicar na exibição de Cardápios</h1>
        <h2>A estrutura em tabelas não é adequada para aplicações mobile</h2>
        <section>
            <article id="lado-e">
                <table>
                    <caption>Imagens dos Produtos</caption>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Descrição</th>
                            <th>Valor</th>
                            <th>Imagem</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th colspan="4">Apresentação dos Produtos em Estoque</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Grade de cerveja</td>
                            <td>100.00</td>
                            <td><a href="#grade-cerveja"><img src="./control/img/produtos/grade_de_cerveja-640x360.jpg"></a></td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Pizza Família</td>
                            <td>30.00</td>
                            <td><a href="#pizza"><img src="./control/img/produtos/pizza-640x480.jpg"></a></td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Big-Hamburguer</td>
                            <td>15.00</td>
                            <td><a href="#hamburguer"><img src="./control/img/produtos/hamburguer-640x754.jpg"></a></td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>Coca de 2 litros</td>
                            <td>7.00</td>
                            <td><a href="#coca"><img src="./control/img/produtos/coca_cola-640x960.jpg"></a></td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>Tábua de Frios</td>
                            <td>20.00</td>
                            <td><a href="#frios"><img src="./control/img/produtos/tabua_de_frios-640x426.jpg"></a></td>
                        </tr>
                        <tr>
                            <td>06</td>
                            <td>Litrão de Skol</td>
                            <td>10.00</td>
                            <td><a href="#skol"><img src="./control/img/produtos/litrao-640x960.jpg"></a></td>
                        </tr>
                    </tbody>
                </table>
            </article>
            <article id="lado-d">
                <h3 id="grade-cerveja"><em>Grade de Cerveja</em></h3>
                <h4>Valor: <em>R$ 100,00</em></h4>
                <h5>Marca: <em>Skol e Kaiser</em>
                    <a href="#grade-cerveja-link">Ampliar Imagem</a></h5></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        
                <hr><br><br><br><br><br><br><br><br>
        
                <h3 id="pizza"><em>Pizza Família</em></h3>
                <h4>Valor: <em>R$ 30,00</em></h4>
                <h5>Tamanho: <em>Família (12 pedaços)</em>
                    <a href="#pizza-link">Ampliar Imagem</a></h5></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                
                <hr><br><br><br><br><br><br><br><br>
        
                <h3 id="hamburguer"><em>Big-Hamburguer</em></h3>
                <h4>Valor: <em>R$ 15,00</em></h4>
                <h5>Tamanho: <em>Big para duas pessoas</em>
                    <a href="#hamburguer-link">Ampliar Imagem</a></h5></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        
                <hr><br><br><br><br><br><br><br><br>
        
                <h3 id="coca"><em>Refrigerante Coca-cola</em></h3>
                <h4>Valor: <em>R$ 7,00</em></h4>
                <h5>Tamanho: <em>2 litros</em>
                    <a href="#coca-link">Ampliar Imagem</a></h5></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        
                <hr><br><br><br><br><br><br><br><br>
        
                <h3 id="frios"><em>Tábua de Frios</em></h3>
                <h4>Valor: <em>R$ 20,00</em></h4>
                <h5>Tamanho: <em>300 ml</em>
                    <a href="#frios-link">Ampliar Imagem</a></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        
                <hr><br><br><br><br><br><br><br><br>
        
                <h3 id="skol"><em>Cerveja em Garrafa</em></h3>
                <h4>Valor: <em>R$ 10,00</em></h4>
                <h5>Tamanho: <em>1 litro</em>
                    <a href="#skol-link">Ampliar Imagem</a></h5></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        
                <hr><br><br><br><br><br><br><br><br>
        
                <figure>
                    <span id="grade-cerveja-link">Grade de Cerveja</span>
                    <img src="./control/img/produtos/grade_de_cerveja-1920x1080.jpg">
                    <br><br><br><br>
        
                    <span id="pizza-link">Pizza</span>
                    <img src="./control/img/produtos/pizza-1920x1440.jpg">
                    <br><br><br><br>
        
                    <span id="hamburguer-link">Hamburguer</span>
                    <img src="./control/img/produtos/hamburguer-1920x2264.jpg">
                    <br><br><br><br>
        
                    <span id="coca-link">Coca-cola</span>
                    <img src="./control/img/produtos/coca_cola-1920x2881.jpg">
                    <br><br><br><br>
                    
                    <span id="frios-link">Tábua de Frios</span>
                    <img src="./control/img/produtos/tabua_de_frios-1920x1280.jpg">
                    <br><br><br><br>
        
                    <span id="skol-link">Litrão</span>
                    <img src="./control/img/produtos/litrao-1920x2880.jpg">
                    <br><br><br><br>
                </figure>
            </article>
        </section>
        <footer style="clear: both; text-align: center">Andrew TI & FAM-Soluções © <?= date('Y'); ?></footer>
    </main>
</body>
</html>