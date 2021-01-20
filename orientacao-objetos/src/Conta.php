<?php

class Conta
{
    private Titular $titular;
    private $saldo;
    private static $numeroDeContas = 0;

    public function __construct( Titular $titular)
    {
        $this->titular = $titular. 
        $this->saldo = 0;
        self::$numeroDeContas++;
    }
    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function defineCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }

    public function defineNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }

    public static function recuperanumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

// ...
public function recuperaNomeTitular(): string
{
    return $this->titular->recuperaNome();
}

public function recuperaCpfTitular(): string
{
    return $this->titular->recuperaCpf();
}
// ...
    
    public function __destruct()
    {
        self::$numeroDeContas--;
    }
    
}