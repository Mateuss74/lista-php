<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Array de números</title>
</head>
<body>

    <h1>Estatísticas de números</h1>

    <form method="post">

        <label>Digite os números:</label>
        <input type="text" name="valores" required>

        <button type="submit">Calcular</button>

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $texto = $_POST["valores"];

        $numeros = explode(",", $texto);

        $array = [];

        foreach ($numeros as $numero) {

            $array[] = (float) trim($numero);

        }

        echo "<p>Soma: " . array_sum($array) . "</p>";

        echo "<p>Maior número: " . max($array) . "</p>";

        echo "<p>Menor número: " . min($array) . "</p>";

    }

    ?>

</body>
</html>