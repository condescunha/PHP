<?php

$taboadaDo = 7;

for($i = 1; $i <= 9; $i++){

    echo "$taboadaDo X $i = " . $taboadaDo*$i;
    usleep(125000);
    echo PHP_EOL;
}
