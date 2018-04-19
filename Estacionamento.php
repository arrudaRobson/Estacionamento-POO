<?php

require_once 'Veiculo.php';

class Estacionamento
{
    private $vagasMoto;
    private $vagasCompacta;
    private $veiculos = [];

    public function __construct($vagasMoto, $vagasCompacta)
    {
        $this->vagasMoto = $vagasMoto;
        $this->vagasCompacta = $vagasCompacta;
    }

    public function getVagasMoto()
    {
        return $this->vagasMoto;
    }

    public function setVagasMoto($vagasMoto)
    {
        return $this->vagasMoto = $vagasMoto;
    }

     public function getVagasCompacta()
    {
        return $this->vagasCompacta;
    }

    public function setVagasCompacta($vagasCompacta)
    {
        return $this->vagasCompacta = $vagasCompacta;
    }

    public function posicionarMoto($veiculo)
    {
        if ($veiculo->getTipo() == 1 && $this->vagasMoto > 0) {
                $this->veiculos[] = $veiculo;
                $this->vagasMoto --;

            } else if ($this->vagasCompacta > 0) {
                $this->veiculos[] = $veiculo;
                $this->vagasCompacta --;

            } else {
                echo "Não temos vagas!";
            }
    }

    public function posicionarCarro($veiculo)
    {
        if ($veiculo->getTipo() == 2 && $this->vagasCompacta > 0) {
                $this->veiculos[] = $veiculo;
                $this->vagasCompacta --;

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
