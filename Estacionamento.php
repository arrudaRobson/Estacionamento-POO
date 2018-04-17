<?php

class Estacionamento
{
    private $vagas;

    function __construct($vagas)
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
}
