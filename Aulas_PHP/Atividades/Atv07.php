<?php 
        //Array com chave
        $listaAlunoIdade = array(
            "Bianca" => 31,
            "Gabriella" => 27,
            "Antonio" => 07
        );

        //Array apenas com valor 
        $listaCores = array(
            "Laranja",
            "Cinza",
            "Amarelo",
            "Vermelho"
        );

        //Acesso ao item do array
        echo $listaAlunoIdade ["Bianca"];    
        
        echo "<br/>";

        echo $listaCores [2];

        echo "<br/>";
        
        //Exibir em tela todo o conteudo
        var_dump($listaAlunoIdade);

        echo "<br/>";

        var_dump($listaCores);
        
        
?>
