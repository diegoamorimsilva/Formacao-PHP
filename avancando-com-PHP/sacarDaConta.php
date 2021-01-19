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
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contas as  $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>