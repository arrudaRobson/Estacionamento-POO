<?php
require_once 'Manobrista.php';

$park = new Estacionamento(10);
$vagasPark = $park->getVagas();

$pcx = new Moto("aaa-1234");
$ze = new Manobrista();
$ze->estacionar($park, $pcx);
$vagasPark = $park->getVagas();
echo $vagasPark;

