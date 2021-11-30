<?php

/* ****** Arrays Numéricos ****** */
//arrays são listas
$carros = array("BMW","Veloster","Hilux");

var_dump($carros);

echo "<hr>";

print_r($carros);

echo "<hr>";

//exibir quantidade de elementos do array
echo count($carros);

echo "<hr>";

//percorrendo array
foreach($carros as $c){
    echo $c."<br>";
}

echo "<hr>";

/* ****** Arrays Associativos ****** */
//indices são strings

$pessoas = array("nome"=> "Gabriel", "idade"=> 19, "altura"=> 1.80);
$pessoas["cidade"] = "Lins";

//print_r($pessoas);

foreach($pessoas as $indice => $p){
    echo $indice.":".$p."<br>";
}

echo "<hr>";

/* ****** Arrays Multidimensionais ****** */
//contem um ou mais arrays

$times = array(
    "Cariocas"=> array(
        "Vasco", "Flamengo","Botafogo"
    ),
    "Paulitas"=>array(
        "Santos","São Paulo","Palmeiras"
    ),
    "Baianos"=>array(
        "Bahia","Vitoria","Itabuna"
    )
);
//echo $times["Cariocas"][0];
foreach($times["Cariocas"] as $indice => $valor){
    echo $indice.":".$valor."<br>";
}
echo "-------------------- <br>";
foreach($times["Paulitas"] as $indice => $valor){
    echo $indice.":".$valor."<br>";
}
echo "-------------------- <br>";
foreach($times["Baianos"] as $indice => $valor){
    echo $indice.":".$valor."<br>";
}

