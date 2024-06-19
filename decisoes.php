<?php
/*
precedencia:
&&
 ||
and
or

 operadores de comparação <, >, ==, != mesma precedencia. 
 */

$idade = 15; 
$numeroDePessoa = 2;
echo "Você só pode entrar se tiver a partir de 18 anos \n";
echo "Ou a partir de 16 anos mas acompanhado\n";

//if ($idade == 18 or $idade > 18)
if ($idade >= 18){
    echo "Você tem $idade anos." .PHP_EOL;
    echo "Pode entrar";
} else {
    if( $idade >= 16 && $numeroDePessoa > 1){
        echo "Você tem $idade anos e está acompanhado(a), então pode entrar. \n";
    } else{
        echo "Você só tem $idade anos." .PHP_EOL;
        echo "Você não pode entrar\n";
    }
}


echo PHP_EOL;

//o mesmo código escrito de outra forma:
if($idade >= 18){
    echo "Você tem $idade anos." .PHP_EOL;
    echo "Pode entrar";
} else if ($idade >= 16 && $numeroDePessoa > 1) {
    echo "Você tem $idade anos e está acompanhado(a), então pode entrar. \n";
}else{
    echo "Você só tem $idade anos." .PHP_EOL;
    echo "Você não pode entrar";
}

/* Usa else if como no JavaScript */
