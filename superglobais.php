<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method= "post">
        Nome: <input type="text" name="nome" id="nome">
        <input type= "submit" value="Enviar">

    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $nome = htmlspecialchars($_REQUEST['nome']);
        if(empty($nome)){
            echo "Nome esta vazio";
        } else {
            echo $nome;
        }
    }










    ?>
</body>
</html>