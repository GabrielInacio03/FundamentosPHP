<?php

for($i=1; $i <= 10; $i++):
    echo $i;
endfor;


echo "<hr>";

$cores = array("Verde","Vermelho","Azul");
foreach($cores as $indice => $valor):
    echo $indice."-".$valor;
endforeach;