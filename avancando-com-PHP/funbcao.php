<?php

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

if (500 > $contasCorrentes['123.456.789-10']['saldo']) {
    exibeMensagem("Você não pode sacar este valor");
} else
    $contasCorrentes['123.456.789-10']['saldo'] -= 500;


if (500 > $contasCorrentes['123.456.789-11']['saldo']) {
    exibeMensagem("Você não pode sacar este valor");
} else
    $contasCorrentes['123.456.789-11']['saldo'] -= 500;

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}