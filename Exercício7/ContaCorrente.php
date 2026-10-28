<?php
require_once "ContaBancaria.php";

class ContaCorrente extends ContaBancaria{
    private string $numeroCartao;

    public function __construct($titular, $saldoInicial, $numeroCartao){
        parent::__construct($titular, $saldoInicial);
        $this->numeroCartao = $numeroCartao;
    }
    public function mostrarCartao(){
        return $this->numeroCartao;
    }
}
?>