<?php
require_once "ContaCorrente.php";
require_once "ContaPoupanca.php";

$conta = new ContaCorrente("Rafaela", 1000, "123456");

$conta->depositar(500);
$conta->sacar(200);

echo "Saldo Final: R$" . $conta->getSaldo();
echo "<br>";

$poupanca = new ContaPoupanca ("Rafaela", 1000, "Comprar uma casa");

echo "Objetivo da poupança: " . $poupanca->mostrarObjetivo();
?>