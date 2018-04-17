<?php

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

    public function posicionarVeiculo($veiculo)
    {
        $this->veiculos[] = $veiculo;
    }

    public function getVeiculosPlacas()
    {

    }
}
