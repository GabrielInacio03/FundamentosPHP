<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário $_POST</title>

    <style>
        label{
            display: none;
        }
    </style>
</head>
<body>
    <form action="dados.php" name="frm" id="frmPrincipal" method="POST">
        <label for="txtNome">Nome: </label>
        <input type="text" name="txtNome" id="txtNome" placeholder="Nome">

        <label for="txtEmail">Email: </label>
        <input type="email" name="txtEmail" id="txtEmail" placeholder="Email">

        <input type="Submit" Value="Enviar">

        <!-- EXEMPLO de passagem de parametros -->
        <a href="dados.php?idade=19&sobrenome=inacio">ENVIAR DADOS</a> 
    </form>
</body>
</html>