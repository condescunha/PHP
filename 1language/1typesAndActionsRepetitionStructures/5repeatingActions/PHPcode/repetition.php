<?php

echo "***Contando até 12***";
echo PHP_EOL;

$contador = 0;

while($contador <= 12) {
    echo "$contador ";
    $contador++;
    sleep(1);
}

echo PHP_EOL;

$contador2 = 0;
    
while($contador2 <= 12) {
    echo "$contador2 ";
    $contador2++;
    usleep(500000); //meio segundo
}

echo PHP_EOL;

for($contador = 0; $contador <= 12; $contador++){
    echo "$contador ";
    usleep(250000);
} 

echo PHP_EOL;

for($contador = 0; $contador <= 12; $contador++){
    if($contador == 3) continue;
    echo "$contador ";
    usleep(250000);
}

echo PHP_EOL;

for($contador = 0; $contador <= 12; $contador++){
    if($contador == 8) break;
    echo "$contador ";
    usleep(250000);
}
