<?php

function calculaIMC($peso, $altura){

    return $peso / ($altura** 2);

}

function retornaClassificacao($IMC){

    $imc = round($IMC, 1);

    if($imc < 18.5){
        echo "IMC $imc - MAGREZA";
    } elseif($imc >= 18.5 && $imc <= 24.9){
        echo "IMC $imc - NORMAL";
    }elseif($imc >= 25.0 && $imc <= 29.9){
        echo "IMC $imc - SOBREPESO";
    }elseif($imc >= 30.0 && $imc <= 39.9){
        echo "IMC $imc - OBESIDADE";
    }else{
        echo "IMC $imc - OBESIDADE GRAVE";
    }

}

$peso = 73;
$altura = 1.73;

retornaClassificacao(calculaIMC($peso, $altura));


/*
IMC	                CLASSIFICAÇÃO     OBESIDADE (GRAU)
MENOR QUE 18,5	    MAGREZA	          0
ENTRE 18,5 E 24,9   NORMAL	          0
ENTRE 25,0 E 29,9	SOBREPESO	      I
ENTRE 30,0 E 39,9	OBESIDADE	      II
MAIOR QUE 40,0	    OBESIDADE GRAVE   III
*/
