<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>IMC - Resultado</title>
</head>
<body>

    <h1>Resultado do IMC</h1>

    <?php

    $nome = $_POST["nome"];
    $email = $_POST["email"];

    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    if ($peso > 0 && $altura > 0) {

        $imc = $peso / ($altura * $altura);

        echo "<p>Nome: $nome</p>";
        echo "<p>E-mail: $email</p>";
        echo "<p>Peso: $peso kg</p>";
        echo "<p>Altura: $altura m</p>";

        echo "<p>IMC: ";
        echo number_format($imc, 2, ",", ".");
        echo "</p>";

    } else {

        echo "Peso e altura devem ser maiores que zero.";

    }

    ?>

</body>
</html>