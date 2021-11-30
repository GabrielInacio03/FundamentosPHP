<?php 

/* ******** ESCALARES ******** */
//String
$nome = "Gabriel Inácio";
var_dump($nome);

if(is_string($nome)){
    echo "É UMA STRING";
} else{
    echo "NÃO É UMA STRING";
}

echo '<hr>';

//Int
$idade = 19;
var_dump($idade);

if(is_int($idade)){
    echo "É UM INTEIRO";
} else{
    echo "NÃO É UM INTEIRO";
}

echo '<hr>';

//Float
$altura = 1.81;
var_dump($altura);

if(is_float($altura)){
    echo "É UM FLOAT";
}else{
    echo "NÃO É UM FLOAT";
}

echo '<hr>';

//Boolean
$admin = true;
var_dump($admin);

if(is_bool($admin)){
    if($admin == true){
        echo "É UM ADMINISTRADOR";
    }else{
        echo "NÃO É UM ADMINISTRADOR";
    }
}else{
    echo "NÃO É BOOLEAN";
}

echo '<hr>';

/* ******** COMPOSTOS ******** */
//Array
$carros = array("Gol","Uno","Camaro");
var_dump($carros);