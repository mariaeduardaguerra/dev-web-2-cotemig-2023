<?php

    class Caculadora
    {
            private $numero01 = 0;
            private $numero02 = 0;
            private $operador = "";

            public function __construct($numero01, $numero02, $operador) {
                $this->numero01 = $numero01;
                $this->numero02 = $numero02;
                $this->operador = $operador;
            }

            private function somar() {
                return $this->numero01 + $this->numero02;
            }

            private function subtrair() {
                return $this->numero01 - $this->numero02;
            }

            private function multiplicar() {
                return $this->numero01 * $this->numero02;
            }

            private function dividir() {
                return $this->numero01 / $this->numero02;
            }

            public function gravar() {

                $con = new mysqli("localhost", "root", "", "projeto-02");
                $stmt = $con->prepare("insert into operacoes(numero01, operador, numero02, resultado) values (?, ?, ?, ?)");
                $resultado = 0;

                switch ($this -> operador) {

                    case "+":
                        $resultado = $this-> somar();
                        break;
                    case "-":
                        $resultado = $this->subtrair();
                        break;
                    case "*":
                        $resultado = $this->multiplicar();
                        break;
                    case "/":
                        $resultado = $this->dividir();
                        break;
                        
                }

                $stmt->bind_param("isii", $this->numero01, $this->operador, $this->numero02, $resultado);
                $stmt->execute();
                $stmt->close();
                $con->close();
            }
    }

?>sss