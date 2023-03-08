<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>
    <?php

    function nome($n01 , $n02, $n03){
        return "olá, " . $n01 . $n02 . $n03;
    }

    $string01 = "maria ";
    $string02 = "eduarda ";
    $string03 = "guerra";

    echo nome ($string01, $string02, $string03)

    ?>
    </h1>

</body>
</html>