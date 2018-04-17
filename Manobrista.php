<?php
require_once 'Estacionamento.php';
require_once 'Moto.php';

class Manobrista
{
    public function estacionar(Estacionamento $vagas, Moto $moto)
    {
        if ($vagas->getVagas() > 0) {
            $vagas->setVagas(($vagas->getVagas()) - 1);

            echo "OK";
        } else {
            echo "Não temos vagas!";
        }
    }
}
