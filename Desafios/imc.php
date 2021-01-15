<?php

$peso = 113; #peso em kg
$altura = 1.95; # Altura em m
$imc = 0; # kg/m²
$imc = $peso/($altura**2);
echo "Seu IMC é de $imc você está ";
if ($imc < 16 ) {
    echo "com subpeso severo.";
}elseif ($imc <= 19.9) {
    echo "com subpeso.";
}elseif ($imc <= 29.9) {
    echo "com sobrepeso.";
}elseif ($imc <= 39.9) {
    echo "obeso.";
}elseif ($imc > 40) {
    echo "obeso Mórbido.";
}