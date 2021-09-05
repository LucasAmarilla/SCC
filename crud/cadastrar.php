<?php

use \App\Entity\Movimento;

//Validar o POST

if (isset($_POST['data'], $_POST['tipo'], $_POST['motivo'], $_POST['moeda'], $_POST['valor'])) {
    $obMovimento = new Movimento;
    $obMovimento -> data = $_POST['data'];
    $obMovimento -> tipo = $_POST['tipo'];
    $obMovimento -> motivo = $_POST['motivo'];
    $obMovimento -> moeda = $_POST['moeda'];
    $obMovimento -> valor = $_POST['valor'];
    $obMovimento -> cadastrar();

} 