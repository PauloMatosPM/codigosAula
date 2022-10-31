<?php
class Fruta{
    protected $nome; // private e protected
    // public - acessivel em qualquer lugar
    // protected - pode ser acessado apenas dentro
    // da classe e por classes derivadas (filhas)
    // private - so pode ser acessado dentro da classe 
    protected $cor;

    function __construct($nome, $cor)
    // construtor é chamado quando se faz uma nova instancia da classe 
    {

        $this->nome = $nome;
        // a palavra this refere-se a propriedade da propria classe
        $this->cor = $cor;
    }

    public function intro(){
        echo "Eu sou uma $this->nome";
    }

    final function qualquer(){
        //a palavra-chave final, evita q esse metodo seja 
        // reescrito nas clases filhas
        // se utiliza na classe, evita que a classe seja honrada 

        
        
        echo 'qualquer';
    }


    function set_nome($nome){
        // funcoes/metodos setters sao usados para atribuir valores
        $this->nome = $nome;
    }

    function get_nome(){
        // funcoes/metodos getters sao usados para retornar um valor 
        return $this->nome;
    }

    function set_cor($cor){
        $this->cor = $cor;
    }

    function get_cor(){
        return $this->cor;
    }

    const AGRADECER = "Obrigado";






}



?>