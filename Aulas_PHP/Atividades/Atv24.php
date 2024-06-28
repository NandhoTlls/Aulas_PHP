<?php 
  
  echo "<b>Seu sistema operacional é: </b> " . $_POST["sistema"] . "<br><br>";

    if (isset($_POST["numeros"])) {
        echo "<b>Os números de sua preferência são:</b><BR>";

        
        foreach ($_POST["numeros"] as $numero) {
            echo $numero . "<BR>";
        }
    } else {
        echo "<b>Você não escolheu número preferido!</b><br><br>";
    }

   echo "<b>Seu processador é: </b>" . $_POST["processador"] . "<BR>";
   
?>

