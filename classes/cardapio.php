<?php

class Cardapio{
    protected $codigo;
    protected $tipo;
    protected $produtos;
    protected $precos;
    protected $quantidades;

    public function __construct($codigo, $tipo, $produtos, $precos, $quantidades){
        $this->setCodigo($codigo);
        $this->setTipo($tipo);
        $this->setProdutos($produtos);
        $this->setPrecos($precos);
        $this->setQuantidades($quantidades);
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    public function getCodigo(){
        return $this->codigo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setProdutos($produtos){
        $this->produtos = $produtos;
    }
    public function getProdutos(){
        return $this->produtos;
    }
    public function setPrecos($precos){
        $this->precos = $precos;
    }
    public function getPrecos(){
        return $this->precos;
    }
    public function setQuantidades($quantidades){
        $this->quantidades = $quantidades;
    }
    public function getQuantidades(){
        return $this->quantidades;
    }

    public function apresentarCardapio(){
        echo "O cardápio ".$this->tipo;
    }
}

$cardapio1 = new Cardapio("001", "Digital", "Refrigerante Coca-cola 2 litros ", "10,00", "1");
$cardapio1->apresentarCardapio();
echo '; Código do Cardápio: ';
echo $cardapio1->getCodigo();
echo '; Produto escolhido: ';
echo $cardapio1->getProdutos();
echo '; Valor: R$ ';
echo $cardapio1->getPrecos();
echo '; Quantidade solicitada: ';
echo $cardapio1->getQuantidades();

?>