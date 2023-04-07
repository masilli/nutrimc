<?php 

class User{

    //atributos
    public $nome, $username, $password, $idade, $peso, $altura;

    //construtor
    function __construct($nome, $username, $password, $idade, $peso, $altura){
        $this->nome = $nome;
        $this->username = $username;
        $this->password = $password;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
    }

}

?>