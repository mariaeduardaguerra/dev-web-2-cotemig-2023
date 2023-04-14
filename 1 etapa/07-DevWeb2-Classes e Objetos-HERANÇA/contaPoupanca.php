<?php

// Importa o script contaBancaria.php

require_once("contaBancaria.php");

// Classe Conta Poupança que é uma extensão de Conta Bancária

class ContaPoupanca extends ContaBancaria
{

    // Método que aplica 0,5% de juros no saldo da conta

    public function aplicar_juros_mes()

    {

        $this->saldo += $this->saldo * 0.5 / 100.00;
        return "Juros aplicados com sucesso!";

    }

}
