<?php 
class ContaBancaria{
    protected string $titular;
    private float $saldo;

    public function __construct($titular, $saldoInicial){
        $this->titular = $titular;
        $this->saldo = $saldoInicial >=0 ? $saldoInicial: 0;
    }
    public function depositar($valor){
        if ($valor > 0){
            $this->saldo +=$valor;
            return true;
        }
        return false;
    }
    public function sacar($valor){
        if ($valor > 0 && $this->saldo >= $valor){
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }
    public function getSaldo(){
        return $this->saldo;
    }
}
?>