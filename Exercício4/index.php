<?php
require_once 'Livro.php';
require_once 'Revista.php';

$livro= new Livro('O Senhor dos Anéis: A Sociedade do Anel', 1954, 'J.R.R. Tolkien');
$livro->mostrarTitulo();  // Classe pai
$livro->mostrarLivro();

echo "<br>";

$livro1= new Livro('Dom Casmurro', 1899, 'Machado de Assis');
$livro1->mostrarTitulo();  // Classe pai
$livro1->mostrarLivro();

echo "<br>";

$revista = new Revista('Superinteressante', 2026, 'Edição nº 460');
$revista->mostrarTitulo(); // Classe pai
$revista->mostrarRevista();
?>