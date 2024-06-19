<?php

for ($i=1; $i <=15 ; $i++) { 
    if ($i == 13) {
        echo  PHP_EOL;
        break; /* Com o break o código vai parar, vai sair desse bloco. Nesse cas ele vai parar no numero 12 */
    }
    echo "#$i" .PHP_EOL;
}