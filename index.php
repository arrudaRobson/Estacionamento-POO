<?php
require_once 'Manobrista.php';

$park = new Estacionamento(1, 1);
$parkVagasMoto = $park->getVagasMoto();
$parkVagasCompacta = $park->getVagasCompacta();

$pcx = new Veiculo(1, "Honda", "pcx", "preta", "abc-1234");
$ze = new Manobrista();
$ze->estacionar($park, $pcx);

$imprenza = new Veiculo(2, "Subaru", "Imprenza", "verde", "aaa-1111");
$ze->estacionar($park, $imprenza);

echo "<br>Vagas disponíveis para motos: " . $park->getVagasMoto();
echo "<br>Vagas disponíveis para carros: " . $park->getVagasCompacta();
echo "<br><br>Placas dos veículos estacionados: <br>" . $park->getVeiculos();

