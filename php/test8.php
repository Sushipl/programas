<?php
    setcookie('nome','Dimitri', time()+(86400*30));
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <?php 
    if (isset($_COOKIE['nome'])){
        $nome=$_COOKIE['nome'];
        echo "O nome é $nome";
    }else{
        echo "Não há nenhum cookie";
    }
    ?>

</head>
<body>
    
</body>
</html>