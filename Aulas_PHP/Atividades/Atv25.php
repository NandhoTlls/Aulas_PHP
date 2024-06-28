<?php 
        class Usuario {
            //Atributos da classe
            public $nome;
            protected $cpf;
            private $endereco;
        
            
            function __construct() {
                $this->preparaUsuario();
            }
        
            private function preparaUsuario() {
                $this->nome = "Leonardo";
                $this->cpf = "99999999999";
                $this->endereco = "Rua Fulano de Tal número 0";
            }
        
            public function getCpf() {
                return $this->cpf;
            }
        
            public function getNome() {
                return $this->nome;
            }
        
            public function getEndereco() {
                return $this->endereco;
            }
        }
        
         $usu = new Usuario();
        
        echo "Nome: " . $usu->getNome() . "<br>";
        echo "CPF: " . $usu->getCpf() . "<br>";
        echo "Endereco: " . $usu->getEndereco() . "<br>";
    ?>

