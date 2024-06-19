<?php

$peso = 54;// peso em kilos 
$altura = 1.6;//1.60 em metros 

$imc = $peso / ($altura **2);

if ($imc < 17) {
    echo " Seu IMC foi de $imc, está muito abaixo do ideal! ";
} elseif ( $imc >= 17 && $imc <= 18.4 ) {
    echo " Seu IMC foi de $imc, está abaixo do ideal! ";
} elseif ($imc >= 18.5 && $imc <= 24.9 ) {
    echo " Seu IMC foi de $imc, peso normal! ";
} elseif ($imc >= 25 && $imc <= 29.9 ) {
    echo " Seu IMC foi de $imc, acima do peso! ";
} elseif ($imc >= 30 && $imc <= 34.9 ) {
    echo " Seu IMC foi de $imc, Obesidade grau 1! ";
} elseif ($imc >= 35 && $imc <= 40) {
    echo " Seu IMC foi de $imc, Obesidade grau 2! ";
} elseif ($imc > 40) {
    echo " Seu IMC foi de $imc, Obesidade grau 3 (móbida)! ";
}
