<?php

    $dbHost = 'Localhost';
    $dbUserName = 'root';
    $dbPassword = '@robodoido13';
    $dbName = 'owllibrary';

    $conexao = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);

    if ($conexao->connect_error){
        echo "erro";
    } else {
        echo "conectado";
    }
 
?>