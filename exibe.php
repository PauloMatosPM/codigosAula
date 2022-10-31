<?php 
require_once 'fruta.php';
require_once 'morango.php';
require_once 'animal.php';
require_once 'gato.php';
require_once 'terrestre.php';
require_once 'guilherme.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $banana = new Fruta('banana', 'amarela');
    echo $banana->get_nome();
    echo"<br>";
    $maca = new Fruta('maçã', 'vermelha');
    echo $maca->get_nome();
    echo"<br>";
    echo $maca->get_cor();

    echo"<br>";
        $morango = new Morango('morango', 'vermelho', 'amarelo');
        $morango->get_nome();
        echo"<br>";
        echo $morango->intro();
        echo"<br>";
        echo $morango->mensagem();
        echo"<br>";
        echo Fruta::AGRADECER;
        echo"<br>";
        $gato = new Gato();
        echo $gato->fazBarulho();
        echo"<br>";
        echo $gato->locomove();
        echo"<br>";
        echo Guilherme::atrapalha();
    ?>
</body>
</html>