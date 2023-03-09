<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>atividade prática 02 - index</title>
</head>

<body>

    <!-- Formulário com 2 inputs que irá enviar os dados para a página somar.php através do método POST -->
    
    <form action="somar.php" method="post">
        <p>
            <label>Número 01:</label>
            <input type="text" name="numero1">
        </p>
        <p>
            <label>Número 02:</label>
            <input type="text" name="numero2">
        </p>
        <p>
            <button>Enviar</button>
        </p>
    </form>

</body>

</html>
