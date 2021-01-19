<?php

class Conta
{
    public String $cpfTitular;
    public String $nomeTitular;
    public float $saldo;

    public function sacar(float $valorsaque): void
    {
        if($this->saldo < $valorsaque){
            echo "Saldo insuficiente";
        }else{
            echo "Saque realizado com sucesso!";
        }
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
        } else {
            $this->saldo += $valorADepositar;
        }
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
        } else {
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
        }
    }
}

 