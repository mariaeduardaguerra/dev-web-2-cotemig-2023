<?php

// Classe Moeda

    class Moeda
    {

        // Método estático que formata o número em formato Real
        // Não é necessário instanciar a classe para utilizar o método

        public static function formata_real($valor)
        {

            return "R$ " . number_format($valor, 2, ",", ".");
            
            // mumber_format:
            // 1 - Valor
            // 2 - Quantidade de casas decimais
            // 3 - Separador decimal
            // 4 - Separador de milhar

        }

}
