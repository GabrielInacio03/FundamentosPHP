<?php
//SuperGlobais
/**
 * $GLOBALS
 * $_SERVER
 * $_REQUEST
 * $_POST
 * $_GET
 * $_FILES
 * $_ENV
 * $_COOKIE
 * $_SESSION
 */

//GLOBALS = acessa variaveis globais de qualquer lugar,armazenando em um array
 $x = 10;
 $y = 15;
function soma(){
    echo $GLOBALS['x'] + $GLOBALS['y'];
}
soma();
 
//SERVER = Contém informações sobre cabeçalhos, caminhos e locais de script. É um array de vários indices

echo $_SERVER['PHP_SELF']."<br>"; //nome do arquivo do script
echo $_SERVER['SERVER_NAME']."<br>"; //Nome do servidor
echo $_SERVER['SCRIPT_FILENAME']."<br>"; //caminho absoluto
echo $_SERVER['DOCUMENT_ROOT']."<br>"; //diretorio raiz
echo $_SERVER['SERVER_PORT']."<br>"; 
echo $_SERVER['REMOTE_ADDR']."<br>"; //Endereço IP