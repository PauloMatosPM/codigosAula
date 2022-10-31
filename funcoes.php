
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  // declare(strict_types=1);  modo estrito
    function falaComigo($nome){

        echo "OI $nome <br>";
    }
        
    falaComigo("Fellipe");
    $nome = "João";
    falaComigo($nome);

    function adiciona(int $a, int $b){
        return $a+$b;
    }
    echo"<br>";
    echo adiciona(5,5);
    echo"<br>";

    function configAltura(int $alturaMin = 50){
        echo "a altura é: $alturaMin <br>";
    }
    
    configAltura(150);
    configAltura();
    
    function adiciona5(int &$i){
        return $i = $i + 5;
    }
    echo"<br>";
    $num = 2;
    echo "variavel num declara com valor: $num";
    echo"<br>";
    adiciona5($num);
    echo "variavel num apos o adiciona 5: $num";
    echo"<br>";

    $carros = array("bmw", "toyota", "fusca");
    echo $carros[0];
    echo"<br>";

    echo count($carros);
    echo"<br>";
    $carros[0] = "vw";


    for($i = 0; $i < count($carros); $i++){
        echo "$carros[$i] <br>";

    }

    $idades = array("fellipe"=>"29", "joao"=>"15");
    foreach($idades as $chave => $valor){
        echo "Chave = $chave // Valor = $valor <br>";
    }

    sort($carros); // ordena  crescente e tem o oposto rsort()
    for($i = 0; $i < count($carros); $i++){
        echo "$carros[$i] <br>";

    }
    
    asort($idades); // ordena crescente e o contrario arsort()
    foreach($idades as $chave => $valor){
        echo "Chave = $chave // Valor = $valor <br>";
    }

    ksort($idades); // ordena crescente pela chave e o contrario é krsort()
    foreach($idades as $chave => $valor){
        echo "Chave = $chave // Valor = $valor <br>";
    }



    ?>
</body>
</html>