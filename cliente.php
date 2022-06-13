<?php
    function HttpRequest($url){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);   
        $data = curl_exec($curl);
        curl_close($curl);
        return $data;

    }

    $data = json_decode(HttpRequest("http://127.0.0.1:8889/api.php",true));

    echo "<h1>Cliente de API </h1>";
    foreach($data as $p){
        echo "ID: " . $p -> id . " <br />";
        echo "Nombre: " . $p -> nombre . " <br />";
        echo "Apellido: " . $p -> apellido . " <br />";
        echo "Telefono: " . $p -> telefono . " <br />";
        echo "<br /><br />";
    }