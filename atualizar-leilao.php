<?php

use Alura\Leilao\Dao\Leilao as LeilaoDao;
use Alura\Leilao\Model\Leilao;


require_once __DIR__ . '/vendor/autoload.php';

$pdo = new \PDO('sqlite::memory:');
$pdo->exec('create table leiloes ( id ... );');

$leilao = new Leilao('Brasilia Amarela');
$leilaoDao = new LeilaoDao($pdo);
$leilao = $leilaoDao->salva($leilao);

$leilao->finaliza();
$leilaoDao->atualiza($leilao);