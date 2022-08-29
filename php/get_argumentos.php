<?php 
    session_start();
    if (isset($_POST['nome']) && isset($_POST['idade'])){
        $nome=limp($_POST['nome']);
        $idade=limp($_POST['idade']);
        echo "<h1>O nome é $nome e a idade é $idade</h1>";
    }else{
        echo "<h1>Não foi cadastrado</h1>";
    }
    print_r($_SESSION);
    function limp($valor){
        $valor = trim($valor);
        $valor = stripslashes($valor);
        $valor =htmlspecialchars($valor);
        return $valor;
    }

?>