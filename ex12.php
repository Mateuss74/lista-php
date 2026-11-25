<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Triângulo</title>
</head>
<body>

    <h1>Classificar triângulo</h1>

    <form method="post">

        <label>Lado A:</label>
        <input type="number" name="a" step="any" required>

        <br><br>

        <label>Lado B:</label>
        <input type="number" name="b" step="any" required>

        <br><br>

        <label>Lado C:</label>
        <input type="number" name="c" step="any" required>

        <br><br>

        <button type="submit">Classificar</button>

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

        if (
            $a <= 0 || $b <= 0 || $c <= 0 ||
            $a + $b <= $c ||
            $a + $c <= $b ||
            $b + $c <= $a
        ) {

            echo "Os valores não formam um triângulo.";

        } elseif ($a == $b && $b == $c) {

            echo "Triângulo equilátero.";

        } elseif ($a == $b || $a == $c || $b == $c) {

            echo "Triângulo isósceles.";

        } else {

            echo "Triângulo escaleno.";

        }

    }

    ?>

</body>
</html>