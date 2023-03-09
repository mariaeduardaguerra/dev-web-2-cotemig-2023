<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade prática 02 - soma</title>
</head>

<body>

    <?php

    // Crio as variáveis e armazeno os valores enviados pelo formulário
    // através do método POST

        $numero01 = $_POST["numero01"];
        $numero02 = $_POST["numero02"];

    // Converto as variáveis de string para número inteiro

        $numero01 = intval($numero01); // Exemplo: "10" -> 10
        $numero02 = intval($numero02);

    // Crio uma variável de controle para confirmar se irei executar
    // o insert no banco de dados. Somente executo o insert
    // se os números forem positivos

        $valido = true;

    // Se número 1 for negativo ou zero, valido recebe false

        if ($numero01 <= 0)
        {
            echo "<b>Número 01 inválido!</b><br>";
            $valido = false;
        }

    // Se número 2 for negativo ou zero, valido recebe false

        if ($numero02 <= 0)
        {
            echo "<b>Número 02 inválido!</b><br>";
            $valido = false;
        }

    // Os parâmetros para instanciar uma conexão são:
    // - endereço ip ou nome do servidor de banco de dados
    // - usuário
    // - senha
    // - nome do banco de dados

        $con = new mysqli("localhost", "root", "", "devweb2");

    // Somente executo o insert no banco de dados se valido for true

        if ($valido)
        {
            // Crio o objeto statement que representa um comando a ser executado
            $stmt = $con->prepare("insert into soma(numero01, numero02, resultado) values (?, ?, ?)");
            // Faço a soma dos números e armazeno em uma variável
            $resultado = $numero01 + $numero02;
            // Substituo cada ? por um valor de uma variável
            $stmt->bind_param("iii", $numero01, $numero02, $resultado);
            // Mando meu statement executar o comando no banco de dados
            $stmt->execute();
            echo "<b>$numero01 + $numero02 = $resultado gravado com sucesso!</b><br>";
            // Após execução do comando, o statement deve ser fechado
            $stmt->close();
        }

        echo "<hr>";
    // Instancio um novo statement para executar um select no banco de dados
        $stmt = $con->prepare("select * from soma order by id");
    // Mando meu statement executar o comando no banco de dados
        $stmt->execute();
    // Crio um objeto result com o resultado do meu select
        $result = $stmt->get_result();
    // Através do fetch_array recupero linha a linha do
    // resultado do select e guardo na variável row.
    // O while irá ficar em loop até que row seja igual a NULL
    // NULL no PHP é semelhante ao false em uma condição

        while ($row = $result->fetch_array())
        {
            echo "<b>", $row["numero01"], " + ", $row["numero02"], " = ", $row["resultado"], "</b><br>";
        }

    // Após eu processar os dados do result, fecho ele

        $result->close();

    // Após execução do comando, o statement deve ser fechado

        $stmt->close();

    // Toda conexão aberta deve ser fechada

        $con->close();

    ?>

</body>

</html>