<?php
require_once 'Veiculo.php';

class Carro extends Carro {

    public function __construct($marca, $modelo, $ano) {
        parent::__construct($marca, $modelo, $ano);
    }

    public function exibirDetalhes() {
        parent::exibirDetalhes();
    }

    public function acelerar() {
        echo "O carro está acelerando de maneira muito rápida! <br>";
    }
}
?>