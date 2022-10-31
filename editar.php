<?php
$nome_servidor = "localhost";
$usuario = "root";
$senha = "";
$nome_banco = "meuPDO";
$id_pessoa = $_GET['id_pessoa'];


try{
    $conn = new PDO("mysql:host=$nome_servidor; dbname=$nome_banco", $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM pessoas WHERE id_pessoa = $id_pessoa LIMIT 1";
    $resultado = $conn->query($query);
    $lista = $resultado->fetchAll();
    echo "Lista de pessoas criada com sucesso";
}catch (PDOException $e) {
    echo $sql. "<br>" . $e->getMessage();
}
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
    <form action="editar_post.php" method="post">
        <?php foreach($lista as $item): ?>
        <label for="id_pessoa">ID</label>
        <input type="number" id="id_pessoa" name="id_pessoa" value="<?=$item['id_pessoa']?>" readonly>

        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="<?=$item['nome']?>">

        <label for="idade">Idade</label>
        <input type="number" name="idade" id="idade" value="<?=$item['idade']?>">

        <label for="data">Data</label>
        <input type="date" id="data" name="data" value="">
            <?php endforeach?>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>