<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get_argumentos.php" method="post">
        <input name="nome" placeholder="Dígite seu nome"><br>
        <input name="idade" placeholder="Dígite seu idade"><br>
        <button type="submit">Enviar</button>
    </form>
    <?php 
        if (isset($_POST['nome']) && isset($_POST['idade'])){
            $nome=$_POST['nome'];
            $idade=$_POST['idade'];
            echo "<h2>Nome: $nome<br>Idade: $idade</h2>";
        }
    ?>
</body>
</html>