<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Par ou Ímpar</title>
</head>
<body>

    <h1>Verificar número</h1>

    <form method="post">
        <label>Digite um número:</label>
        <input type="number" name="numero" required>

        <button type="submit">Verificar</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $numero = $_POST["numero"];

        echo "<p>Número informado: $numero</p>";

        if ($numero % 2 == 0) {

            echo "<p>Resultado: Par</p>";

        } else {

            echo "<p>Resultado: Ímpar</p>";

        }
    }

    ?>

</body>
</html>