<?php

class Clientes{
    public $nome;
    public $endereco;
    public $email;
    public $idade;
    public $telefone;

    public function __construct ($nome, $endereco, $email, $idade, $telefone){
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->idade = $idade;
        $this->telefone = $telefone;
    }
}

?>