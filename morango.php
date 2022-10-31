<?php
require_once 'fruta.php';
class Morango extends Fruta{
    // extends = herança da classe 
    public $peso;
    // uma classe filha pode ter propriedades proprias
    // herda todas as propriedades e metodos do pai

    function __construct($nome, $cor, $peso)
    //sobrescrever metodos da classe pai possivel
    // com seus proprios argumentos
    
    {
        $this->nome = $nome;
        $this->cor = $cor;
        $this->peso = $peso;

    }

    function intro() //sobrescrever metodos da classe pai possivel
    {
        echo "Eu sou um $this->nome";
    }


    public function mensagem(){
        echo"Sei la";
    }
}



 











?>