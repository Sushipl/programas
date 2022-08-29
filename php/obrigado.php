<?php
    echo "<h1>Formulário enviado</h1>"; 
    echo date('d/m/Y');
    echo '<br>';
    echo date('H:i:s');
    echo '<br>';

    $hoje = date('Y-m-d');
    $vencimento = '2022-10-15';
    $diferenca = strtotime($vencimento) - strtotime($hoje);
    $dias = floor($diferenca) / (60*60*24);

    $data_hoje = explode('-', $hoje);
    $hoje_form = $data_hoje[2]."/".$data_hoje;[1]."/".$data_hoje[0]

    echo "A diferença é de $dias dias entre as datas";
?>