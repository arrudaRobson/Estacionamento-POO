<?php

require_once 'Estacionamento.php';

class Manobrista
{
    public function estacionar(Estacionamento $vaga, Veiculo $veiculo)
    {
        if ($veiculo->getTipo() == 1) {
            $vaga->posicionarVeiculo($veiculo, $vaga);
            echo $veiculo->getMarca() . ", " . $veiculo->getModelo() . ", placa: " .
            $veiculo->getPlaca() . ", estacionado.";
            echo "<br>";
        } else if ($veiculo->getTipo() == 2) {
            $vaga->posicionarVeiculo($veiculo, $vaga);
            echo $veiculo->getMarca() . ", " . $veiculo->getModelo() . ", placa: " .
            $veiculo->getPlaca() . ", estacionado.";
            echo "<br>";
        }
    }
}
