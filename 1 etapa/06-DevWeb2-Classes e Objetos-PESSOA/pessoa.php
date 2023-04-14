<?php

    class Pessoa {
        private $nome = "";
        private $idade = 0;
        private $sexo = "";

        public function __construct($nome, $idade, $sexo)
        {
            $this -> nome = $nome ;
            $this -> idade = $idade;
            $this -> sexo = $sexo ;       
        }

        public function imprimir()
        {
            return "meu nome é " . $this -> nome . ", tenho " .
                $this -> idade . " anos e sou do sexo " . $this -> sexo . ".";
        }

    }

?>