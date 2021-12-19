<?php 
    session_start();

    $_SESSION['Nome'] = "Gabriel";
    $_SESSION['Carro'] = "Honda";


    echo $_SESSION['Nome']."<br>".$_SESSION['Carro'];

    echo "<a href='home.php'>HOME</a>";
