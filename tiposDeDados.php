<?php

//Tipos de dados
/*PHP possui tipos de dados como integer, double, string ou boolean (tipos primitivos) */

$numInteiro = 25;
echo gettype($numInteiro);
/*Utilizando gettype conseguimos descobrir o tipo de uma variável */
echo PHP_EOL;

$salario = 100.30;
echo gettype($salario);
/*O PHP consegue distinguir os tipos de dados como no Python, então diferente
 do Java eu não preciso dizer qual o tipo da varial, ou seja PHP é dinamicamente tipada */
 echo PHP_EOL;

$texto = "Aqui é  um texto \n";
echo gettype($texto);
echo PHP_EOL;

$verdade = true;
$falso = false;
echo gettype($verdade);
echo PHP_EOL;
echo gettype($falso);


//Tipo String
echo "\n";
echo 'minha idade é '. $idadeatual;
echo "\n";
echo "vou fazer $idade \n";