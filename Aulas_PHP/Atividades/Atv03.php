<?php 
    //variavel
    $produtos = [
        "melancia" => 5.99,
        "goiaba" => 3.43,
        "abacaxi" => 6.89,
        "banana" => 3.75,
    ];

    //resultado
    echo "lista de produtos: ";
    foreach ($produtos as $produtos => $preco) {
        echo "$produtos custa R$ $preco. ";
    }
?>
