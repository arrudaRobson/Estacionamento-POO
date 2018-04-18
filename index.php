<?php
require_once 'Manobrista.php';

$park = new Estacionamento(10);
$vagasPark = $park->getVagas();

$pcx = new Moto("aaa-1234");
$ze = new Manobrista();
$ze->estacionar($park, $pcx);

$cg = new Moto("abc-1004");
$ze->estacionar($park, $cg);

echo "Vagas disponíveis: " . $park->getVagas();
$vagasPark = $park->getVagas();
echo "<br>Placas dos veículos estacionados: <br>" . $park->getVeiculosPlacas();

