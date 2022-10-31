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
    class Carro{
        public $cor;
        public $modelo;

        public function __construct($cor, $modelo)
        {
            $this -> cor = $cor;
            $this -> modelo = $modelo;
        }


        public function mensagem(){
            return "Meu carro é um " . $this->modelo . " " . $this->cor;
        }
    }

        $meuCarro = new Carro("preto", "bmw");
        echo $meuCarro -> mensagem();
        echo"<br>";
        $meuCarro2 = new Carro("branco", "toyota");
        echo $meuCarro2 -> mensagem();


         // $meuCarro = null; atribuição de null, limpa os valores da variavel
         //echo"<br>";
         //echo $meuCarro -> cor; 


    ?>
</body>
</html>