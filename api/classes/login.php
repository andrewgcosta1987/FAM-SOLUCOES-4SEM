<?php

class Login{
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome){
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }

    public function setEmail($email){
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function getSenha(){
        return $this->senha;
    }

    public function Logar(){
        if($this->email == "teste@teste.com" and $this->senha == "123456789"):
            echo "Logado com sucesso";
        else:
            echo "Dados invalidos";
        endif;
    }
}

$logar = new Login("teste@teste.com", "123456789", "Andrew Costa");
$logar->Logar();
echo "<br>";
echo $logar->getNome();
echo $logar->getEmail();
echo $logar->getSenha();