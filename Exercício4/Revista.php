<?php 
require_once 'Publicacao.php';

class Revista extends Publicacao{
    private string $edicao;

    public function __construct($titulo, $anoPublicacao, $edicao){
        parent::__construct($titulo, $anoPublicacao);
        $this->edicao = $edicao;
    }
    public function mostrarRevista(){
        echo "Edição: " . $this->edicao . "<br>";
    }
}
?>