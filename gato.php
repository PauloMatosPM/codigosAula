<?php
require_once 'animal.php';
require_once 'terrestre.php';

// indicar qual o arquivo que contem a classe que sera utilizada para heranca 
class Gato extends Animal{
    public function fazBarulho()
    // implementar obrigatoriamente o metodo vindo da classe pai
    {
        echo "Miau";
    }

    public function locomove()
    // implementar obragatoriamente o metodo vindo da interface
    {
        echo "Andando";
    }
}






?>