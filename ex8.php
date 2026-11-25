<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma de números</title>
</head>
<body>

    <h1>Soma dos números</h1>

    <form method="post">
        <label>Digite os números:</label>
        <input type="text" name="numeros" required>

        <button type="submit">Somar</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $texto = $_POST["numeros"];

        $numeros = explode(",", $texto);

        $soma = 0;

        foreach ($numeros as $numero) {

            $soma += (float) trim($numero);

        }

        echo "<h2>Soma: $soma</h2>";

    }

    ?>

</body>
</html>