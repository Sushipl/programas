<?php
    function alertE($text){
        echo "<div class='alert alert-danger' role='alert'>
            $text        
        </div>";
    }
    function alertS($text){
        echo "<div class='alert alert-success' role='alert'>
            $text        
        </div>";
    }
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-5 text-center">Upload de arquivos</h1>
        <form class="m-3" action="" enctype="multipart/form-data" method="post">
            <div class="input-group">
                <input type="file" class="form-control" id="arq" name="arq[]" multiple aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                <button class="btn btn-outline-secondary" type="submit" id="env" name="env" >Enviar</button>
            </div>
        </form>
    </div>
    <?php 
        function reArrayFiles(&$file_post) {

            $file_ary = array();
            $file_count = count($file_post['name']);
            $file_keys = array_keys($file_post);
        
            for ($i=0; $i<$file_count; $i++) {
                foreach ($file_keys as $key) {
                    $file_ary[$i][$key] = $file_post[$key][$i];
                }
            }
        
            return $file_ary;
        }
        if(isset($_POST['env'])){
            $arqArray = reArrayFiles($_FILES['arq']);
            foreach ($arqArray as $arq){
            //var_dump($_FILES);
            $tamanhoMax= 2097152; //2MB
            $perm=array("jpg","png","jpeg","gif","mp4");
            $ext=pathinfo($arq['name'], PATHINFO_EXTENSION);


            if ($arq['size'] >= $tamanhoMax){
                alertE($arq['name']."Tamanho máximo de 2MB. Não foi possivél fazer upload.");     
            }else{
                if(in_array($ext, $perm)){
                    alertS("Permitido");
                    $pasta="imagens/";
                    if(!is_dir($pasta)){
                        mkdir($pasta,0755);        
                    }
                    $tmp= $arq['tmp_name'];
                    $nName=uniqid().".$ext";
                    if(move_uploaded_file($tmp, $pasta.$nName)){
                        alertS($arq['name']."Upload realizado com sucesso!");
                    }else{
                        alertE($arq['name']."Erro: não foi possível realizar o upload!");
                    }
                }else{
                    alertE($arq['name']."Formato de arquivo não permitido: ".$ext);
                }
            }
            }
        }
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>