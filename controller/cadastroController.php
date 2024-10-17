<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../model/moradorModel.php';
require_once '../database.php';

$morador = new Morador($db);


if($_POST){
    $dados = [
        'nome' => $_POST['nome'],
        'numeroAp' => $_POST['numeroAp'],
        'fone' => $_POST['fone']
    ];
    $morador->inserirDados($dados);
    header('location:../view/gerenciamento/cadastro.php');
    
}
