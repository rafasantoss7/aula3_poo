<?php
require_once "ContaBancaria.php";

class ContaPoupanca extends ContaBancaria{
    private string $objetivoPoupanca;

    public function __construct($titular, $saldoInicial, $objetivoPoupanca){
        parent::__construct($titular, $saldoInicial);
        $this->objetivoPoupanca = $objetivoPoupanca;
    }
    public function mostrarObjetivo(){
        return $this-> objetivoPoupanca;
    }
}
?>