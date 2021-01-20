<?php


class Pessoa
{
    private $nome;

    public function recuperaNome()
    {
        return $this->nome;
    }

    public function recuperaCpf()
    {
        return $this->cpf;
    }
    private $cpf;
}