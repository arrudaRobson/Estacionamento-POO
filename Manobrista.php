<?php

require_once 'Estacionamento.php';

class Manobrista
{
    public function estacionar(Estacionamento $vaga, Moto $moto)
    {
        $vaga->posicionarVeiculo($moto, $vaga);
        echo "Veículo placa: " . $moto->getPlaca() . " estacionado.";
        echo "<br>";
    }
}
