<?php

    // ------------------ CLASSES ------------------

    class Carro
    {
        private $modelo = "";
        private $cor = "";

        public function __construct($modelo)
        {
            $this -> modelo = strtoupper($modelo);
        }

        public function set_modelo($modelo = "", $x = 10)
        {
            $this -> modelo = strtoupper($modelo);
        }

        public function get_modelo()
        {
            return $this -> modelo;
        }
    }

?>
