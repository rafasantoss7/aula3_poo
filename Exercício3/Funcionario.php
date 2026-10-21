<?php 
class Funcionario{
    protected string $nome;
    private int $salario;

    public function getSalario(){
        return $this->salario;
    }
    public function __construct($nome, $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }
    public function apresentarFuncionario(){
        echo "Nome: " . $this->nome . "<br>";
        echo "Salário: R$" . $this->salario . "<br>";
    }
}
?>