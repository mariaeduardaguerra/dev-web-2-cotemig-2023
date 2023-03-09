<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade prática 01</title>
</head>

<body>

    <!-- Escreva uma função em PHP com três argumentos do tipo string e retorne esses argumentos formando uma frase de sua escolha.
    O retorno da função deve ser impresso em uma página web dentro de uma tag H1.
    Salvar a pasta do projeto como 00-introducao-php. -->

    <?php

    // função recebe 3 parâmetros do tipo string e retorna uma frase

    function monta_frase($palavra01, $palavra02, $palavra03)
    {
        return "Palavra 1: " . $palavra01 . ", Palavra 2: " . $palavra02 . ", Palavra 3: " . $palavra03;
    }
    ?>

    <h1>

    <?php

        // chama a função monta_frase e imprime a string retornada pela função para o frontend

        echo monta_frase("lana", "del", "rey");
    ?>

    </h1>

</body>

</html>