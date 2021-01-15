<?php
$idade = 17;
$nome = 'Diego';
$acompanhante = 2;

echo 'Voce so pode entrar se for maior que 18 nanos e se chamar Diego!'.PHP_EOL;

if($idade >= 18 && $nome == 'Diego'){
    echo "Você tem $idade anos e se chama $nome, pode entrar!";
}elseif ($idade>=16 && $acompanhante >1) {
    echo "Você tem $idade anos e esta acompanhado, pode entrar!";
}else
    echo "Você não tem mais de 18 anos ou não se chama Diego";
