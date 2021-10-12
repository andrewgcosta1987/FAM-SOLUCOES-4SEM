<?php

class Produto{
    protected $codigo;
    protected $nome;
    protected $estoque;
    protected $categoria;
    protected $quantidade;

    public function __construct($codigo, $nome, $estoque, $categoria, $quantidade){
        $this->setCodigo($codigo);
        $this->setNome($nome);
        $this->setEstoque($estoque);
        $this->setCategoria($categoria);
        $this->setQuantidade($quantidade);
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    public function getCodigo(){
        return $this->codigo;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setEstoque($estoque){
        $this->estoque = $estoque;
    }
    public function getEstoque(){
        return $this->estoque;
    }
    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }

    public function apresentarProduto(){
        echo "O produto que vc deseja é ".$this->nome;
    }
}

$produto1 = new Produto("001", "Hamburguer Artesanal", "disponível", "Hamburguer", "Feito na hora");
$produto1->apresentarProduto();
echo '<br>';
echo $produto1->getCodigo();
echo $produto1->getNome();
echo $produto1->getEstoque();
echo $produto1->getCategoria();
echo $produto1->getQuantidade();

?>