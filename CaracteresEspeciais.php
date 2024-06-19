<?php

/*como quebrar a linha nas frases? deve-se usar caractere especial 
pro php saber que eu quero quebrara linha.
Esse caractere é o \n igual no Java, esse n vem de new Line*/


echo "Primeira linha \n";
echo "\n"; //aqui vai ser só pulada uma linha, se usar '' o php não vai fazer manipulação quando usa ""  php entende que ele pode precisar fazer manipulações.
echo "\t"; //para dar o espaçamento do Tab no texto
echo"Segunda linha";
echo "\n";

//outra forma de quebrar linha:
echo "assim também quebra a linha" .PHP_EOL;
echo "Então essa frase aparece na outra linha";