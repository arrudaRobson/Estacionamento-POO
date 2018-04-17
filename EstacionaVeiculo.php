<?php
require_once 'Estacionamento.php';

class EstacionaVeiculo
{
    public function ocupaVaga(Estacionamento $vagas)
    {
        if ($vagas->getVagas() > 0) {
            $test = $vagas->getVagas();
            $test -= 1;
            $vagas->setVagas($test);
            echo "Vagas disponíveis: " . $vagas->getVagas();
        }
        else{
            echo "Não temos vagas!";
        }
    }
}
