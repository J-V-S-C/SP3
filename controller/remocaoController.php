<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once '../model/moradorModel.php';
require_once '../database.php';

$morador = new Morador($db);
if($_POST){

    $numeroAp =  $_POST['numeroAp'];
    $morador->RemoverDados($numeroAp);
    header('location:../view/gerenciamento/edicao.php');
}
