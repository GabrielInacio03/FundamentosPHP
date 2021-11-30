<?php
//contexto de onde ela foi definida

//ESCOPO GLOBAL
$nome = "Gabriel Inácio";

//ESCOPO LOCAL
function exibeNome(){
    global $nome;
    echo $nome;
}
exibeNome();

echo "<hr>";

function exibeCidade(){
    global $cidade;
    $cidade = "Rio de Janeiro";
}
exibeCidade();
echo $cidade;