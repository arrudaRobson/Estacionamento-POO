<?php

require_once 'Estacionamento.php';

class Manobrista
{
    public function estacionar(Estacionamento $estacionamento, Veiculo $veiculo)
    {
        if ($veiculo->getTipo() == 1) {
            $estacionamento->posicionarMoto($veiculo);
            echo $veiculo->getMarca() . ", " . $veiculo->getModelo() . ", placa: " .
            $veiculo->getPlaca() . ".";
            echo "<br>";

        } else if ($veiculo->getTipo() == 2) {
            $estacionamento->posicionarCarro($veiculo);
            echo $veiculo->getMarca() . ", " . $veiculo->getModelo() . ", placa: " .
            $veiculo->getPlaca() . ".";
            echo "<br>";
        }
    }
}
