<?php


class Pessoa
{
    public $nome;
    public $cpf;

    public function recuperaNome()
    {
        return $this->nome;
    }

    public function recuperaCpf():CPF
    {
        return $this->cpf->recuperaNumero;
    }

    public function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}