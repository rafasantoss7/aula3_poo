<?php
require_once 'Gerente.php';
require_once 'Desenvolvedor.php';

$gerente= new Gerente('Ana', 5600, 'Engenharia de Software');
$gerente->apresentarFuncionario();  // Classe pai
$gerente->gerenciarEquipe();

echo "<br>";

$desenvolvedor = new Desenvolvedor('Ana', 5600, 'Python');
$desenvolvedor->apresentarFuncionario(); // Classe pai
$desenvolvedor->programar();
?>