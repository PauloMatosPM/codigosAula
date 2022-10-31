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

$texto = "Hello World";

echo strlen($texto); // retorna o tamanho da string
echo"<br>";
echo str_word_count($texto); //retorna contagem de palavras
echo"<br>";
echo strrev($texto); // inverte a string   
echo"<br>";
echo strpos($texto, "World"); // retorna a posição de uma substring
echo"<br>";
echo str_replace("Hello", "Olá", $texto); // substitui uma string por outra
echo"<hr>";


$numero = 10;
echo is_int($numero);
$numero = "Dez";
echo"<hr>";
$numero = "Dez";
echo is_string($numero); // retorna 1 para string


$numero = 2.8;
echo $numero;
echo"<br>";
echo (int)$numero; // casting para valor INTEIRO
echo"<br>";


echo pi();
echo"<br>";
echo min(1,25, 2); // retorna o menor valo e tem o oposto max()
echo"<br>";
echo abs(-1829);
echo"<br>";
echo sqrt(64); // retorna o valor da raiz quadrada 
echo"<br>";
echo round(0.8); // arrendonda um valor
echo rand(); // gera um numero aleatorio 
// pode se configurado limites rand(menor, maior)
echo"<hr>";
define("PI", 3.14);
echo PI;
echo"<hr>"
// atitimetco 
// + adição, - subtração, * multiplicação, / divisão, % modulo ou resto, ** exponeciação
//comparativos
// == igual, === indentico(valor e tipo), != diferente <>
// !== nao indentico, > maior que, < menor que 
// >= maior igual, <= menor igual
// logicos 
// and && e 
// para ser onrigado vc tem que ter entre 18 e 70
// pessoa com 50 anos... testes: 50 > 18 T e 50 < 70 T, logo obrigado a votar T
// pessoa com 90 anos... testes: 90 > 18 T e 90 < 70 F, logo obrigado a votar F
// pessoas de 15 anos... teste: 15 > 18 F e 15 < 70 T, logo obrigado a votar F
// or || ou
// para entrar em um determinado clube vc tem que ou ter mais de 18 anos
// ou se chamar "Maria"
// "João" de 19 anos...testes: 19 > 18 T ou "Maria" == "João" F
// logo Joao pode entrar por ter passado no teste da idade
// "Maria" de 15 anos...testes: 15 > 18 F ou "Maria" == "Maria" T
// logo Joao pode entrar por ter passado no teste da idade
// "Pedro" de 10 anos...testes: 10 > 18 F ou "Maria" == "Pedro" F
// logo Pedro não pode entrar por ter não passado em nenhum teste




?>






</body>
</html>