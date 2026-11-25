<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>IMC - Página 2</title>
</head>
<body>

    <h1>Informe suas medidas</h1>

    <?php

    $nome = $_GET["nome"];
    $email = $_GET["email"];

    ?>

    <form action="pagina3.php" method="post">

        <input type="hidden" name="nome"
        value="<?php echo htmlspecialchars($nome); ?>">

        <input type="hidden" name="email"
        value="<?php echo htmlspecialchars($email); ?>">

        <label>Peso (kg):</label>
        <input type="number" name="peso" step="any" required>

        <br><br>

        <label>Altura (m):</label>
        <input type="number" name="altura" step="any" required>

        <br><br>

        <button type="submit">Calcular IMC</button>

    </form>

</body>
</html>