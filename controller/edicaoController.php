<?php

require_once '../model/moradorModel.php';
require_once '../database.php';

$morador = new Morador($db);
if($_POST){

    $dados = [
        'nome' => $_POST['nome'],
        'numeroAp' => $_POST['numeroAp'],
        'fone' => $_POST['fone']
    ];

    $morador->AtualizarDados($dados);
    header('location:../view/gerenciamento/edicao.php');
}
