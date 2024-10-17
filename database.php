<?php

function abrirConexao()
{
    $local = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'SP3';


    return new mysqli($local, $user, $password, $dbname);
}

$db = abrirConexao();

//comentario