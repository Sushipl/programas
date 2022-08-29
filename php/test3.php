<?php 
    if (isset($_GET['nome'])){
        $nome= htmlspecialchars($_GET['nome']);
    }else{
        $nome="Mundo";
    }
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
    <h1>Olá, <?php echo $nome; ?>!</h1>
    <a href="test3.php?nome=Marta">Marta</a>
    <form method="get" action="get_argumentos.php">
        <input type="text" name="nome" placeholder="dígite seu nome"></input><br>
        <input type="text" name="idade" placeholder="dígite sua idade"></input><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>