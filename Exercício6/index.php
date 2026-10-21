<?php
require_once 'ProdutoFisico.php';
require_once 'ProdutoDigital.php';

$pFisico= new ProdutoFisico('Notebook', 3000.00, 1.7);
$pFisico->mostrarProduto();  // Classe pai
$pFisico->mostrarPeso();

echo "<br>";

$pDigital = new ProdutoDigital('Software', 450, 1.2);
$pDigital->mostrarProduto(); // Classe pai
$pDigital->mostrarTamanho();
?>