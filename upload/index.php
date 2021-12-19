<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD</title>
    <?php 
        if(isset($_POST['enviar'])){
            $formatos = array("png","jpeg","jpg","gif");
            
            $ext = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

            if(in_array($ext, $formatos)){
                echo 'existe';
            }else{
                echo 'não existe';
            }
        }

    ?>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo">

        <input type="Submit" name="enviar">
    </form>
</body>
</html>