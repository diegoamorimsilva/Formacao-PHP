<?php

require_once 'autoload.php';
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petropolis', 'bairro Teste', 'Rua lá', '37'),
    )
);

$conta->deposita(600);
$conta->saca(100);
echo $conta->recuperaSaldo();