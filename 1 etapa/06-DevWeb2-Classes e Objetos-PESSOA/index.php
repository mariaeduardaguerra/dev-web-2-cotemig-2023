<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>06-DevWeb2-Classes e Objetos-PESSOA</title>
</head>

<body>

    <?php

        require("pessoa.php");

        $pessoas = array (
            new Pessoa("jennifer", 54, "feminino"),     // 0
            new Pessoa("lisa", 59, "feminino"),         // 1
            new Pessoa("courteney", 58, "feminino"),    // 2
            new Pessoa("david", 56, "masculino"),       // 3
            new Pessoa("matt", 55, "masculino"),        // 4
            new Pessoa("matthew", 53, "masculino"),     // 5
            new Pessoa("céline", 54, "feminino"),       // 6
            new Pessoa("lana", 37, "feminino"),         // 7
            new Pessoa("adele", 34, "feminino"),        // 8
            new Pessoa("nancy", 69, "feminino"),        // 9
            new Pessoa("ann", 72, "feminino"),          // 10
            new Pessoa("agnetha", 72, "feminino"),      // 11
            new Pessoa("frida", 77, "feminino"),        // 12
            new Pessoa("benny", 76, "masculino"),       // 13
            new Pessoa("björn", 77, "masculino"),      // 14
            new Pessoa("giovanna ", 46, "feminino"),    // 15
            new Pessoa("nero ", 53, "masculino"),       // 16
        );

        // $pessoas[3] -> imprimir();

        //  jennifer    lisa
        //     0         1

        foreach ($pessoas as $linha) {
            echo "<h1>" . $linha -> imprimir() . "</h1>";
        }

    ?>

</body>

</html>