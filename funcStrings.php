<?php
//Funções para String
/**
 * stroupper - converte string para maiusculo
 * strtolower - converte string para minusculo
 * substr - retorna uma parte da string
 * str_pad - complemente string com a qtd especificado de caracteres
 * str_repeat - repete uma string
 * strlen - retorna o tamanho de uma string
 * str_replace - substituir uma palavra em um texto
 * strpos -  retona a posição de uma palavra em um texto
 */

 $nome = 'gabriel da silva inacio';
 echo strtoupper($nome);
 echo strtolower($nome);

 echo "<hr>";

 $msg = "Ola Mundo";
 //string, a partir, comprimento
 echo substr($msg, 0, 3);
 
 echo "<hr>";

 $objeto = "mouse";
 $novoObjeto = str_pad($objeto, 7);

 echo $novoObjeto;

 echo "<hr>";

 $stringRepetida  =str_repeat("Sucesso", 5);

 echo "<hr>";

 echo strlen($objeto);

 echo "<hr>";

 $texto = "A seleção argentina será campeão de 2018";
 $novoTexto = str_replace("2018","2022", $texto);
 echo $novoTexto;

 echo "<hr>";

 echo strpos($texto,"seleção");