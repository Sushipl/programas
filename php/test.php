<?php 
    $testo="<h1>Olá mundo!</h1>";
    $js="<script>window.alert('isso foi feito em php')</script>";
    $carros = array("Fusca",2021,"Chevette");
    class carro {
        public $cor;
        public $modelo;
        public function __construct($cor,$modelo){
            $this->cor = $cor;
            $this->modelo = $modelo;
        }
        public function mensagem(){
            return "O carro é $this->cor e o modelo é $this->modelo";
        }
    }
    $car = array("Branco", "Fusca");
    $carro1 = new carro($car[0],$car[1]);
    $mob = array("m1"=>"moto","m2"=>"carro","m3"=>"caminhão");
    $v = $mob["m1"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = "Dimitri"; 
        echo $testo;
    ?>
    <?php $ativado="sim";?>
    <?php if ($ativado == "si"){?>
        <h2> Está ativado </h2>
    <?php }else{ ?>
        <h2>Não está respondendo</h2>
    <?php } 
        echo str_replace("Fusca",$carros[2],$carro1->mensagem());
        echo "<br>";
        foreach ($mob as $mob){
            echo $mob."<br> ";
        }
    ?>
    <?php 
        
        echo $v; 
    ?>
    <h1>    
        
    </h1>
</body>

</html>