<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sorteio</title>
</head>
<body>

    <h1>Sorteio de número</h1>

    <form method="post">
        <label>Valor mínimo:</label>
        <input type="number" name="minimo" required>

        <br><br>

        <label>Valor máximo:</label>
        <input type="number" name="maximo" required>

        <br><br>

        <button type="submit">Sortear</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $minimo = $_POST["minimo"];
        $maximo = $_POST["maximo"];

        if ($minimo > $maximo) {

            echo "O mínimo não pode ser maior que o máximo.";

        } else {

            $numero = random_int($minimo, $maximo);

            echo "<h2>Número sorteado: $numero</h2>";

        }
    }

    ?>

</body>
</html>