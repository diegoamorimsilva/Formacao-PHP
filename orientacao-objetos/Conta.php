<?php

class Conta
{
    public String $cpfTitular;
    public String $nomeTitular;
    public float $saldo;

    public sacar(float $valorsaque) 
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
}

 