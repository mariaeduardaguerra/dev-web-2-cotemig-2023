<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LISTAR_MOTOR.PHP revisão prova final 1 etapa</title>
</head>

<body>

    <?php

        $con = new mysqli("localhost", "root", "", "devweb2_1etapa_revisao");

        $stmt = $con->prepare("select * from motores");

        $stmt->execute();

        $result = $stmt->get_result();

        while ($linha = $result->fetch_array()) {
            echo $linha["modelo"], " - ", $linha["numero_serie"], " - ", $linha["potencia"], "<br>";
        }

        $result->close();

        $stmt->close();

        $con->close();

    ?>

    <a href="index.php">voltar</a>
    
</body>

</html>