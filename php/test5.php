<?php
$erroNome="";
$erroEmail="";
$erroSenha="";
$erroSenha2="";
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        if (empty($_POST['nome'])){
            $erroNome="Por favor, preencha o nome";
        }else{
            $nome=limp($_POST['nome']);
            if(!preg_match("/^[a-zA-Z-' ]*$/", $nome)){
                $erroNome="Apenas aceitamos letras e espaços";
            }
        }
        if (empty($_POST['email'])){
            $erroEmail="Por favor, preencha o e-mail";
        }else{
            $email=limp($_POST['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $erroEmail="E-mail inválido";
            }
        }
        if (empty($_POST['senha'])){
            $erroSenha="Por favor, preencha a senha";
        }else{
            $senha=limp($_POST['senha']);
            if(strlen($senha)<6){
                $erroSenha="A senha precisa ter no mínimo 6 dígitos";
            }
        }
        if (empty($_POST['senha2'])){
            $erroSenha2="Por favor, preencha a repetição de senha";
        }else{
            $senha2=limp($_POST['senha2']);
            if($senha2 != $senha){
                $erroSenha="A senha precisa ser igual a repetição";
            }
        }
        if(($erroNome=="")&&($erroEmail=="")&&($erroSenha=="")&&($erroSenha2=="")){
            header('Location: obrigado.php');
        }
    }
    function limp($valor){
        $valor= trim($valor);
        $valor= stripslashes($valor);
        $valor= htmlspecialchars($valor);
        return $valor;
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
    <form method="post">
        <label>Nome</label>
        <input name="nome" <?php if(isset($_POST['senha2'])){echo "value='".$_POST['nome']."'";} ?>>
        <br><span class="erro"><?php echo $erroNome ?></span><br>
        <label>E-mail</label>
        <input name="email" <?php if(isset($_POST['senha2'])){echo "value='".$_POST['email']."'";} ?>>
        <br><span class="erro"><?php echo $erroEmail ?></span><br>
        <label>Senha</label>
        <input name="senha" <?php if(isset($_POST['senha'])){echo "value='".$_POST['senha']."'";} ?>>
        <br><span class="erro"><?php echo $erroSenha ?></span><br>
        <label>Confirme a senha</label>
        <input name="senha2" <?php if(isset($_POST['senha2'])){echo "value='".$_POST['senha2']."'";} ?>>
        <br><span class="erro"><?php echo $erroSenha2 ?></span><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>