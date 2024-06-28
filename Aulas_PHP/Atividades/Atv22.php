<?php

  
    if (isset($_POST["campo1"])) {
        $campo1 = htmlspecialchars($_POST["campo1"]);
        echo "O campo 1 é: " . $campo1 . "<br>";
    } else {
        echo "Campo 1 não foi enviado.<br>";
    }

    if (isset($_POST["campo2"])) {
        $campo2 = htmlspecialchars($_POST["campo2"]);
        echo "O campo 2 é: " . $campo2;
    } else {
        echo "Campo 2 não foi enviado.";
    }

?>


