<?php
require_once 'Manobrista.php';

$park = new Estacionamento(10);
$vagasPark = $park->getVagas();

$pcx = new Veiculo(1, "Honda", "pcx", "preta", "abc-1234");
$ze = new Manobrista();
$ze->estacionar($park, $pcx);

$imprenza = new Veiculo(2, "Subaru", "Imprenza", "verde", "aaa-1111");
$ze->estacionar($park, $imprenza);

echo "Vagas disponíveis: " . $park->getVagas();
$vagasPark = $park->getVagas();
echo "<br>Placas dos veículos estacionados: <br>" . $park->getVeiculos();

