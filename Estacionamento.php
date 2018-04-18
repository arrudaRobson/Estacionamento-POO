<?php

require_once 'Moto.php';

class Estacionamento
{
    private $vagas;
    private $veiculos = [];

    public function __construct($vagas)
    {
        $this->vagas = $vagas;
    }

    public function getVagas()
    {
        return $this->vagas;
    }

    public function setVagas($vagas)
    {
        return $this->vagas = $vagas;
    }

    public function posicionarVeiculo($veiculo, $vagas)
    {
        $this->veiculos[] = $veiculo;

        if ($vagas->getVagas() > 0) {
            $vagas->setVagas(($vagas->getVagas()) - 1);

        } else {
            echo "Não temos vagas!";
        }
    }

    public function getVeiculosPlacas()
    {
        $placas = "";
        for ($i=0; $i < count($this->veiculos) ; $i++) {
            $placas .= $this->veiculos[$i]->getPlaca() . "<br>";
        }
        return $placas;
    }
}
