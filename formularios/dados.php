<?php
    /**
     * GET=> os valores digitados serão passados por parametros da URL, ficando visiveis.
     * EX: $nome = $_GET["txtNome"];
     */
    $nome = @$_POST["txtNome"];//nome do input
    $email = @$_POST["txtEmail"];

    //condicional
    if($nome == null || $email == null){
        $nome = "Nenhum valor foi passado";
        $email = "Nenhum valor foi passado";
    }    

    //mostrando valores
    echo 'Valores Digitados<br>';
    echo "Nome: $nome <br>";
    echo "Email: $email <br>";
?>
<a href="index.php">Voltar</a>
