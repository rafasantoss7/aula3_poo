<?php 
class Publicacao{
    protected string $titulo;
    private int $anoPublicacao;

    public function getAnoPublicacao(){
        return $this->anoPublicacao;
    }
    public function __construct($titulo, $anoPublicacao){
        $this->titulo = $titulo;
        $this->anoPublicacao = $anoPublicacao;
    }
    public function mostrarTitulo(){
        echo "Título: " . $this->titulo . "<br>";
        echo "Ano de Publicação: " . $this->anoPublicacao . "<br>";
    }
}
?>