<?php 

abstract class Animal{
    // class abstrata que deve ser herdada
    // indica metodos abstratos que obrigatoriamente 
    // deverao ser implementados pelas classes filhas 


    public $cor;
    // classes abstratas podem ter propriedades 

    abstract public function fazBarulho();
}














?>