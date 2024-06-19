<?php

for ($i=1; $i <=15 ; $i++) { 
    if ($i == 13) {
        continue;/*Se o $i for igual a 13 o código vai entrar nesse bloco 
        e executar o comando continue, que é para continuar o código. Então esse else ficou sem nesescidade ali. */
    }else{
        echo "#$i" .PHP_EOL;
    }
}

echo "XXXXXXXXXXXXXXXXXXX" .PHP_EOL;

for ($i=1; $i <=15 ; $i++) { 
    if ($i == 13) {
        echo  PHP_EOL;
        continue;
    }
    echo "#$i" .PHP_EOL;
}