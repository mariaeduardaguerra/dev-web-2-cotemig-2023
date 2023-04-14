<?php

    require("06-DevWeb2-Classes e Objetos-CARRO/carro.php");

    $obj = new Carro("porsche");

    // ------------------ ARRAYS/VETORES ------------------

    $numeros = array(10, 54, 78);

    // 10   54   78
    // 0    0    2

    $numeros[2]; // 78
    $numeros[0]; // 10

    $palavras = array("banana", "maça", "abacaxi");
    //                   0        1         2

    $palavras[1]; // "maça"

    $notas = array(5.99, 6.5, 7.8);

    $idades = array("jennifer" => 54, "lisa" => 59, "courteney" => 58);
    //    54      59       58   
    // jennifer  lisa  courteney

    $idades["lisa"]; // 59
    $idades["courteney"]; // 58

    foreach($idades as $valor)
    {
        echo $valor;
    }

    // 54
    // 59
    // 58

    // ------------------ 06-DevWeb2-Classes e Objetos PRÁTICA  ------------------
    // Desenvolva na linguagem PHP uma classe que represente uma Pessoa com os
    // seguintes atributos nome, idade e sexo. Os atributos devem ser privados e os valores
    // devem ser informados via construtor.
    // Na mesma classe, crie um método imprimir que retorne uma string no seguinte formato:
    // Meu nome é <nome>, tenho <idade> anos e sou do sexo <sexo>.
    // Crie, em uma outra página, um array contendo no mínimo 5 objetos do tipo Pessoa.
    // Através do foreach e do método imprimir gere para o frontend uma tag H1 contendo a
    // string retornada.
    // Observação: O método imprimir irá retornar somente a string sem nenhuma tag HTML, a
    // impressão do H1 com o retorno do método deve ser feita dentro do foreach.

    $objs = array
    (
        new Carro("teste01"),
        new Carro("teste02"),
        new Carro("teste03")
    );

?>