<?php

$listaDeIdades = [25, 26, 97, 32, 54, 26, 36, 14];

for($i = 0; $i < count($listaDeIdades); $i++){
    echo "$listaDeIdades[$i] ";
    usleep(250000);
}