<?php

    // Classe Conta Bancária

    class ContaBancaria {

        // Atributos

        private $numeroConta = 0;
        private $nomeTitular = "";
        protected $saldo = 0.00;

        // Método Construtor

        public function __construct($numeroConta, $nomeTitular)
        {

            $this->numeroConta = $numeroConta;
            $this->nomeTitular = $nomeTitular;

        }

        // Método Depositar
        // $valor é a quantidade que será depositada

        public function depositar($valor)
        {

            // Se valor for negativo, retorno uma mensagem de erro

            if ($valor < 0.0) {
                return "não é possível informar um valor negativo!";
            }

            // Se valor for positivo, efetuo o depósito

            $this -> saldo += $valor;
            return "depósito efetuado com sucesso!";

        }

        // Método Sacar
        // $valor é a quantidade que será sacada

        public function sacar($valor)
        {

            // Se valor for negativo, retorno uma mensagem de erro

            if ($valor < 0.0) {

                return "não é possível informar um valor negativo!";
                // Se saldo - valor for negativo, retorno uma mensagem de erro

            }
            else if ($this->saldo - $valor < 0.00) {

                return "não foi possível realizar o saque, saldo insuficiente!";

            }

            // Se tudo estiver ok, efetuo saque
            
            $this->saldo -= $valor;
            return "saque efetuado com sucesso!";

        }

        // Retorna o número da conta

        public function get_numero_conta()
        {

            return $this->numeroConta;

        }

        // Retorna o nome do titular da conta

        public function get_nome_titular()
        {

            return $this->nomeTitular;

        }

        // Retorna o saldo da conta

        public function get_saldo()
        {

            return $this->saldo;

        }
    }

?>