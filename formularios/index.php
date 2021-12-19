<?php
    /**
     * Validações: filters Validate
     * Funções (filter_input - filter_var)
     */

     /**
      * Sinitização: Sanitize Filters
      */

    //isset -> se existe
    if(isset($_POST['Enviar'])){
        $erros = array();

        if(!$idade = filter_input(INPUT_POST, 'txtIdade', FILTER_VALIDATE_INT)){
            $erros[] = "Idade precisa ser um inteiro";
            var_dump($erros);
        }
        if(!$email = filter_input(INPUT_POST,'txtEmail',FILTER_VALIDATE_EMAIL)){
            $erros[] = "Preencha o campo email corretamente";
        }
        if(!$peso = filter_input(INPUT_POST,'txtPeso',FILTER_VALIDATE_FLOAT)){
            $erros[] = "Preencha o campo peso corretamente, exemplo: 60.2";
        } 
        if(!$ip = filter_input(INPUT_POST,'txtIp',FILTER_VALIDATE_IP)){
            $erros[] = "Preecha o campo IP corretamenta";
        }
        if(!$url = filter_input(INPUT_POST,'txtUrl',FILTER_VALIDATE_URL)){
            $erros[] = "Preencha o campo URL corretamente";
        }
        var_dump($erros);

        //sanitize filters, EXEMPLO

        $idade = filter_input(INPUT_POST,'txtIdade', FILTER_SANITIZE_NUMBER_INT);

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

    <style>
        label{
            display: none;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" name="frm" id="frmPrincipal" method="POST">
        
        <label for="txtIdade">Idade:</label>
        <input type="text" name="txtIdade" placeholder="Idade">
        <br>
        <label for="txtEmail">Email:</label>
        <input type="text" name="txtEmail" placeholder="Email">
        <br>
        <label for="txtPeso">Peso</label>
        <input type="text" name="txtPeso" placeholder="Peso">
        <br>
        <label for="txtIp">IP</label>
        <input type="text" name="txtIp" placeholder="IP">
        <br>
        <label for="txtUrl">URL</label>
        <input type="text" name="txtUrl" placeholder="URL">

        <input type="Submit" Value="Enviar" name="Enviar">

        <!-- EXEMPLO de passagem de parametros -->
        <!-- 
            <a href="dados.php?idade=19&sobrenome=inacio">ENVIAR DADOS</a> 
        -->
        
    </form>
</body>
</html>