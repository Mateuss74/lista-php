<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Intervalo</title>

    <style>
        .numero {
            background-color: lightblue;
            padding: 8px;
            margin: 5px;
            display: inline-block;
        }
    </style>

</head>
<body>

    <h1>Exibir intervalo</h1>

    <form method="post">

        <label>Início:</label>
        <input type="number" name="inicio" required>

        <label>Fim:</label>
        <input type="number" name="fim" required>

        <button type="submit">Exibir</button>

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $inicio = $_POST["inicio"];
        $fim = $_POST["fim"];

        if ($inicio <= $fim) {

            for ($i = $inicio; $i <= $fim; $i++) {

                echo "<span class='numero'>$i</span>";

            }

        } else {

            echo "O início deve ser menor que o fim.";

        }

    }

    ?>

</body>
</html>