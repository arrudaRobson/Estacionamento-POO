<?php

class Moto
{
    private $placa;

    public function __construct($placa)
    {
        $this->placa = $placa;
    }

    public function getPlaca()
    {
        return $this->placa;
    }

    public function setPlaca($placa)
    {
        return $this->placa = $placa;
    }
}
