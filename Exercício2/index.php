<?php
require_once 'Carro.php';
require_once 'Moto.php';

$carro= new Carro('Volkswagen', 2015, 4);
$carro->apresentarVeiculo();  // Classe pai
$carro->mostrarCarro();

echo "<br>";

$moto = new Moto('Honda', 2022, 160);
$moto->apresentarVeiculo(); // Classe pai
$moto->mostrarMoto();
?>