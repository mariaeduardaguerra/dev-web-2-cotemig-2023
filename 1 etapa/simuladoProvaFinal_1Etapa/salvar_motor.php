<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SALVAR_MOTOR.PHP revisão prova final 1 etapa</title>
</head>

<body>

    <?php

    require_once("motor.php");

    $modelo = $_POST["modelo"];
    $numero_serie = $_POST["numero_serie"];    
    $potencia = intval($_POST["potencia"]);   

    $motor = new Motor($modelo, $numero_serie, $potencia);
    echo $motor->salvar();
    echo "<br>";

    ?>

    <a href="index.php">voltar</a>
    
</body>

</html>