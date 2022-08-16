<?php

    include_once 'contas.php';


    $valor = new Contas();

    $valor->numAge = 18;

    $valor->numConta = 01466;

    $valor->nome = 'ketsa';

    $valor->saldo = 10000;

    $valor->imprimiretiqueta();

?>