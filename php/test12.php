<?php
    require('db/conec.php');

    /*$sql=$pdo->prepare("INSERT INTO cliente VALUES (null,'Dimitri','teste@teste.com','1-9-2021')");
    $sql->execute();*/
    function alertS($mensagem){
        echo "<div class='alert alert-success' role='alert'>
        $mensagem!
        </div>";
    }
    function alertE($mensagem){
        echo "<div class='alert alert-warning' role='alert'>
            $mensagem!
        </div>";
    }
    $sql= $pdo->prepare("SELECT * FROM cliente WHERE email = ?");
    $sql->execute();
    $dados=$sql->fetchAll();
    /* $sql= $pdo->prepare("SELECT * FROM cliente WHERE email = ?");
    $email='teste@teste.com';
    $sql->execute(array($email));*/
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserindo dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        table{
            border-collapse: collapse;
            width:100%;
        }
        th,td{
            padding:10px;
            text-align:center;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <h1>Inserindo dados no servidor</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Dígite seu nome" required>
        <input type="email" name="email" placeholder="Dígite seu email" required>
        <button type="submit" name="salvar">Enviar</button><br><br>
    </form>
    <?php
        if (isset($_POST['salvar']) && isset($_POST['nome']) && isset($_POST['email'])){
            $me=array();
            $nome=limpPost($_POST['nome']);
            $email=limpPost($_POST['email']);
            $date=date('d-m-Y');
            if($nome=="" || $nome==null){
                $me[]="Preencha o campo nome";             
            }
            if($email=="" || $email==null){
                $me[]="Preencha o campo email";
            
            }
    
            if (!preg_match("/^[a-zA-Z-' ]*$/",$nome)) {
                $me[]="Somente permitido letras e espaços em branco no nome";
                
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $me[]="Formato de email inválido";
                
            }

            if (count($me)!=0) {
                foreach ($me as $i){
                    alertE($i);    
                }
                exit();
            }
            $sql=$pdo->prepare("INSERT INTO cliente VALUES (null,?,?,?)");
            $sql->execute(array($nome,$email,$date));

            alertS("Cliente inserido com sucesso!");
        }
    ?>
    <?php 
    if(count($dados) > 0){
        echo "<table>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>    
            </tr>
        ";
        foreach ($dados as $chave => $valor){
            echo "<tr>
                <th>".$valor['id']."</th>
                <th>".$valor['nome']."</th>
                <th>".$valor['email']."</th>    
            </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>nenhum cliente cadastrado</p>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>