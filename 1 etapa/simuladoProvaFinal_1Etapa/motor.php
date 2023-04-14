<?php

class Motor
{

    private $modelo = "";
    private $numero_serie = "";
    private $potencia = 0;

    public function __construct($modelo, $numero_serie, $potencia) {

        $this->modelo = strtoupper($modelo);
        $this->numero_serie = strtoupper($numero_serie);
        $this->potencia = $potencia;

    }

    public function salvar() {
        
        if ($this->potencia < 0) {
            return "a potência do motor não pode ser negativa!";
        }

        $con = new mysqli("localhost", "root", "", "devweb2_1etapa_revisao");

        $stmt = $con->prepare("insert motores(modelo, numero_serie, potencia) values (?, ?, ?)");

        $stmt->bind_param("ssi", $this->modelo, $this->numero_serie, $this->potencia);

        $stmt->execute();

        $stmt->close();

        $con->close();

        return "motor salvo com sucesso!";

    }

    public function get_modelo() {

        return $this->modelo; 

    }

    public function get_numero_serie() {

        return $this->numero_serie; 
        
    }

    public function get_potencia() {
        
        return $this->potencia; 

    }

}

?>