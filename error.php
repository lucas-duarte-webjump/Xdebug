<?php

use \Alura\Leilao\Model\Lance;
use \Alura\Leilao\Model\Leilao;
use \Alura\Leilao\Model\Usuario;

require_once __DIR__ . '/vendor/autoload.php';

$leilao = new Leilao('Um objeto muito legal');

// $leilao->finaliza();

$usuario = new Usuario("Lucas Duarte");


$leilao->recebeLance(new Lance($usuario, 1000));

// $leilao->recebeLance(new Lance($usuario, 1500));