<?php

for($i = 0; $i <= 100; $i++){

    if(($i % 2) != 0){
        echo "$i ";
        usleep(125000);
    }

}

echo PHP_EOL;

for($i = 0; $i <= 100; $i++){

    if(($i % 2) == 0){
        continue;
    }

    echo "$i ";
    usleep(125000);

}