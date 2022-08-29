<?php 
    $pasta = "nova-pasta/";
    if (!is_dir($pasta)){
        mkdir($pasta, 0755, true);
    }
    $nome_arquivo=date('y-m-d-H-i-s').".txt";
    $cam=$pasta.$nome_arquivo;
    $arquivo=fopen($cam, "a+");
    fwrite($arquivo, 'Uma linha injetada pelo PHP' .PHP_EOL);
    fwrite($arquivo, 'Uma linha injetada 2' .PHP_EOL);
    fwrite($arquivo, 'Uma linha injetada 3' .PHP_EOL);
    fclose($arquivo);
    
    if (file_exists($cam) && is_file($cam)){
        $abrirArq = fopen($cam, 'r');
        while(!feof($abrirArq)){
            echo fgets($abrirArq)."<br>";
        }
        fclose($abrirArq);
    }
    
    if(is_dir($pasta)){
        foreach(scandir($pasta) as $arq){
            $cami=$pasta.$arq;
            if (is_file($cami)){
                unlink($cami);
            }
        }
        rmdir($pasta);
    } 
?>