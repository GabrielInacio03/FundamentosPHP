<?php

//condicional IF ELSE ELSEIF
$numero = 10;

if($numero == 10):
    echo 'é igual a '.$numero;
elseif($numero <= 9):
    echo 'o'.$numero.' é diferente de 9';
else:
    echo 'é diferente de '.$numero;
endif; 

echo '<hr>';

//condicional switch case
$cor = "vermelho";

switch($cor):
    case "vermelho":
        echo "Sua cor preferida é vermelho";
    break;
    case "verde":
        echo "Sua cor preferida é o verde";
    break;
    default:
        echo "sua cor preferida é $cor";
endswitch;