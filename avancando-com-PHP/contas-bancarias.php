<?php

$conta1 = [
    'titular' => 'Diego',
    'saldo' => -2000
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
for ($i=0; $i < count($contas) ; $i++) { 
    echo $contas[$i]['titular'].PHP_EOL;
}
