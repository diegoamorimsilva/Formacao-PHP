<?php

$contador = 15;
for ($i = 0; $i < 15; $i++) {
    if ($i == 13) {
        echo "entra if" . PHP_EOL;
        continue;
    }
    echo " # $i" . PHP_EOL;
}
echo "Entra while" . PHP_EOL;
while ($contador < 20) {
    echo " # $contador" . PHP_EOL;
    $contador = $contador + 1;
}
