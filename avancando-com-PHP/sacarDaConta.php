<?php

function sacar(&$conta, $valor){

    if($conta['saldo'] < $valor) {
        echo "Você não pode sacar";
    }else{
        $conta['saldo'] -= 500;
    }
    return $conta;
}

$conta1 = [
    'titular' => 'Diego',
    'saldo' => 2000
];
$conta2 = [
    'titular' => 'Maria',
    'saldo' => 8000
];
$conta3 = [
    'titular' => 'Joana',
    'saldo' => 300
];

$contas = [$conta1, $conta2, $conta3];

sacar($contas[0] , 500);

for ($i=0; $i < count($contas) ; $i++) { 
    echo $contas[$i]['titular'];
    echo ' ';
    echo $contas[$i]['saldo'].PHP_EOL;
}