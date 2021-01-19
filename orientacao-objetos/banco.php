<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Vinicius Dias');
$segundaConta = new Conta('113.556.789-10', 'Diego Amorim');
$primeiraConta = new Conta('123.456.789-10', 'Vinicius Dias');

$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo Conta::recuperanumeroDeContas();