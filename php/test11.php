<?php
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,"https://viacep.com.br/ws/01001000/json/?callback=callback_name");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,
        "postvar1=value1&postvar2=value2&postvar3=value3");

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec($ch);

    curl_close ($ch);

    echo $server_output;
?>