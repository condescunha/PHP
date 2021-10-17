<?php

$nome = "Marcondes";
$idade = 40;
$numeroDePessoas = 1;

//Entrando em casa
if($nome == "Marcondes" and $idade == 40) echo "$nome, Você é o proprietário, pode entrar em casa!";
else echo "$nome, Você não pode entrar na residência, entre em contato com o propretário!";
echo PHP_EOL;

if($nome == "Marcondes" && $idade == 40) {
    echo "$nome, a casa é sua, pode entrar em casa!";
}
else{ 
    echo "$nome, você não mora aqui, procure o propretário!";
}
echo PHP_EOL;
echo PHP_EOL;

//Entrando em um clube
if($idade == 18 or $idade > 18) echo "Sr(a). $nome, bem vindo ao clube!";
else echo "Caro(a) $nome, a entrada é proibida para menor de idade!";
echo PHP_EOL;

if($idade == 18 || $idade > 18) {
    echo "Sr(a). $nome, bem vindo ao clube, entrada aprovada!";;
}
else{ 
    echo "Caro(a) $nome, espere completar 18 anos!";
}
echo PHP_EOL;

if($idade >= 18) echo "Bem vindo ao clube, Sr(a). $nome!";
else if($idade <= 18 && $numeroDePessoas > 2) echo "$nome, se houver um(a) acompanhante maior de idade, você não pode entrar!";
else echo "Você não pode entrar, $nome!";
echo PHP_EOL;
echo PHP_EOL;


/* 
    REGRA DE PRECEDÊNCIA:
        Os operadores lógicos serão aplicados na seguinte ordem: &&, ||, and, or
        Os operadores de comparação (<, >, ==, !=) têm a mesma precedência, logo, serão avaliados da esquerda para direita.

*/
