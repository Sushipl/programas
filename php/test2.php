<?php 
    function getTemplate( $template, $folder = "template/" ) 
    {
        $arqTemp = $folder.$template; // criando var com caminho do arquivo
        $content = '';
    
        if ( is_file( $arqTemp ) ) // verificando se o arq existe
            $content = file_get_contents( $arqTemp ); // retornando conteúdo do arquivo
        else 
            echo "Erro";
        return $content;
    }
    function parseTemplate( $template, $array ) 
    {
        foreach ($array as $a => $b)// recebemos um array com as tags
            $template = str_replace( '{'.$a.'}', $b, $template );

        return $template; // retorno o html com conteúdo final
    }

    $arrTags = array(
        'titulo'=>'Documento',
        'body'=>''
    );

    $template 		= getTemplate('dicas.html');
    $templateFinal 	= parseTemplate( $template, $arrTags );

    echo $templateFinal; // output do código
?>
<?php?>