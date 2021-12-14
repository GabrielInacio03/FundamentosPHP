<?php

//Funções para Números
/**
 * number_format
 * round
 * ceil
 * floor
 * rand
 */

 $db = 1234.56;
 //(numero,casas decimais,separador,separador de milhares)
 $preco = number_format($db,2,",",".");
 echo $preco; //1.234,56

 echo '<hr>';
 echo round(3.6); //arredondamentos

 echo '<hr>';
 echo ceil(5.10); //arredonda apenas pra cima

 echo '<hr>';
 echo floor(8.9); //arredonda pra baixo

 echo '<hr>';
 echo rand(1,100); //numeros aleatorios nessa ffaixa