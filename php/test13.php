<?php
    require('db/conec.php');
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
    $nome="Joaquin";
    $email="joaquin@teste.com";
    $id=1;    

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
        .oculto{
            display: none;
        }
    </style>
</head>
<body>
    <h1>Inserindo dados no servidor</h1>
    <form id="form_salva" method="POST">
        <input type="text" name="nome" placeholder="Dígite seu nome" required>
        <input type="email" name="email" placeholder="Dígite seu email" required>
        <button type="submit" name="salvar">Enviar</button><br><br>
    </form>
    <form class="oculto" id="form_atualiza" method="POST">
        <input type="hidden" id="id_ed" name="id_ed" placeholder="ID" required>
        <input type="text" id="nome_ed" name="nome_ed" placeholder="Edite seu nome" required>
        <input type="email" id="email_ed" name="email_ed" placeholder="Edite seu email" required>
        <button type="submit" name="atualizar">Atualizar</button>
        <button type="button" name="cancelar" id="canc">Cancelar</button>
        <br><br>
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
    if(isset($_POST['atualizar']) && isset($_POST['id_ed']) && isset($_POST['nome_ed']) && isset($_POST['email_ed'])){
        $me=array();
        $id=limpPost($_POST['id_ed']);
        $nome=limpPost($_POST['nome_ed']);
        $email=limpPost($_POST['email_ed']);
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
        $sql = $pdo->prepare("UPDATE cliente SET nome=?, email=? WHERE id=?");
        $sql->execute(array($nome,$email,$id));

        alertS("Atualizado ".$sql->rowCount()." registros!") ;
    }
    
    ?>
    <?php
    $sql= $pdo->prepare("SELECT * FROM cliente");
    $sql->execute();
    $dados=$sql->fetchAll();
    if (isset($dados) && count($dados) > 0){ 
    
        echo "<table>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>  
                <th>Ações</th>  
            </tr>
        ";
        foreach ($dados as $chave => $valor){
            echo "<tr>
                <th>".$valor['id']."</th>
                <th>".$valor['nome']."</th>
                <th>".$valor['email']."</th>  
                <th><a href='#' class='btn-atualizar' data-id='".$valor['id']."' data-nome='".$valor['nome']."' data-email='".$valor['email']."'>Atualizar</a></th>  
            </tr>";
        }
        echo "</table>";
    
    } else {
        echo "<p>nenhum cliente cadastrado</p>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(".btn-atualizar").click(function(){
            var id = $(this).attr('data-id');
            var nome = $(this).attr('data-nome');
            var email = $(this).attr('data-email');

            $('#form_salva').addClass('oculto');
            $('#form_atualiza').removeClass('oculto');

            $("#id_ed").val(id);
            $("#nome_ed").val(nome);
            $("#email_ed").val(email);
        });
        $('#canc').click(function(){
            $('#form_salva').removeClass('oculto');
            $('#form_atualiza').addClass('oculto');         
        });
    </script>
</body>
</html>