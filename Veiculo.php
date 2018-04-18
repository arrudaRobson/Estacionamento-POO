<?php

class Veiculo
{
    private $tipo;
    private $marca;
    private $modelo;
    private $cor;
    private $placa;

    public function __construct($tipo, $marca, $modelo, $cor, $placa)
    {
        $this->tipo = $tipo;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->placa = $placa;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        return $this->tipo = $tipo;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        return $this->marca = $marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        return $this->modelo = $modelo;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor)
    {
        return $this->cor = $cor;
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
