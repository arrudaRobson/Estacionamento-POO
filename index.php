<?php
require 'Estacionamento.php';
require 'EstacionaVeiculo.php';
require_once 'Moto.php';

$park = new Estacionamento(10);
$vagasPark = $park->getVagas();

$pcx = new EstacionaVeiculo();
$pcx->ocupaVaga($park);
$vagasPark = $park->getVagas();
