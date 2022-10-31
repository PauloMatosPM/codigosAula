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
    echo date ('d/m/Y'); // retorna a data com o padrao desejado
    // d - dia // m - mes // Y - ano
    echo "<br>";

    date_default_timezone_set("America/Fortaleza");
    echo date ('H:i:s');
    echo"<br>";
    $amanha = strtotime("+3 Months");
    echo date("d-m-Y H:i:s", $amanha)

    ?>

    <div class="rodape">
    &copy; 2010-<?php echo date('Y'); ?>
</body>
</html>