<?php

function abrirConexao()
{
    $local = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'SP3';
    $port = 3306;
    $websock = '/opt/lampp/var/mysql/mysql.sock';



    return new mysqli($local, $user, $password, $dbname,$port, $websock);
}

$db = abrirConexao();

//comentario