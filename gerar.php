<?php

$metodoDeRequisicao = $_SERVER['REQUEST_METHOD'];
$site = "http://google.com/";
$conteudo = $_GET['c'];

if (!empty($conteudo)) {
    header('content-type: data:text/plain;charset=utf-8');
    header("content-disposition: attachment; filename=sinais.txt");
    //print_r($conteudo);
    echo($conteudo);

} else {
    header("location: $site");
}

?>