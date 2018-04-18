<?php

require_once 'Veiculo.php';

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
        if ($veiculo->getTipo() == 1) {
            if ($vagas->getVagas() > 0) {
                $vagas->setVagas(($vagas->getVagas()) - 1);

            }
        } else if ($veiculo->getTipo() == 2) {
            if ($vagas->getVagas() > 0) {
                $vagas->setVagas(($vagas->getVagas()) - 2);

            }
        } else {
            echo "Não temos vagas!";
        }
    }

    public function getVeiculos()
    {
        $modelo = "";
        $cor = "";
        $placas = "";

        for ($i=0; $i < count($this->veiculos); $i++) {
            $modelo .= $this->veiculos[$i]->getModelo() . ", ";
            $cor .= $this->veiculos[$i]->getCor() . ", ";
            $placas .= $this->veiculos[$i]->getPlaca() . "<br>";
        }

        return $placas;
    }
}
