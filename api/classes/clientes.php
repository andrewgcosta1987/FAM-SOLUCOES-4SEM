<?php

class Cliente{
    protected $nome;
    protected $endereco;
    protected $email;
    protected $idade;
    protected $telefone;

    public function __construct ($nome, $endereco, $email, $idade, $telefone){
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->idade = $idade;
        $this->telefone = $telefone;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function getEndereco(){
        return $this->endereco;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function getIdade(){
        return $this->idade;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getTelefone(){
        return $this->telefone;
    }

    public function apresentarCliente(){
        echo "O cliente ".$this->nome;
    }
}

$cliente1 = new Cliente("Adasmastor Pitaco", "Av. das Flores, 1070 Jardim", "adasmastor@humor.com", 45, 9632841112);
$cliente1->apresentarCliente();
echo ' reside no(a) ';
echo $cliente1->getEndereco();
echo ', email: ';
echo $cliente1->getEmail();
echo ', idade: ';
echo $cliente1->getIdade();
echo ', telefone: ';
echo $cliente1->getTelefone();
echo ' está ativo.';

?>