<?php
require_once '../model/moradorModel.php';
require_once '../database.php';

header('Content-Type: application/json');
$morador = new Morador($db);


    $query = $morador->BuscarTodos();
    $moradores = [];
    while ($row = $query->fetch_assoc()) {
        $moradores[] = $row;
    }

    echo json_encode($moradores);
    