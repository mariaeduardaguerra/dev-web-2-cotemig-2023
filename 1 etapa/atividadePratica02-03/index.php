<?php

    $con = new mysqli("localhost", "root", "", "devweb2");

    if(!$con)
    {
        die("Error");
    }

    $numero01 = $_POST["numero01"];
    $numero02 = $_POST["numero02"];
    $soma;

    if($numero >= 1 && $numero02 >= 1)
    {
        $soma = $numero01 + $numero02;
    }

    $con -> close();

?>