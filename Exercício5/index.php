<?php
require_once 'Cachorro.php';
require_once 'Gato.php';

$cachorro= new Cachorro('Lua', 7, 'Border Collie');
$cachorro->mostrarNome();  // Classe pai
$cachorro->latir();

echo "<br>";

$gato = new Gato('Celeste', 4, 'Preto');
$gato->mostrarNome(); // Classe pai
$gato->miar();
?>