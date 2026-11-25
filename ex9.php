<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Análise de string</title>
</head>
<body>

    <h1>Análise de texto</h1>

    <form method="post">
        <label>Digite uma palavra ou frase:</label>
        <input type="text" name="texto" required>

        <button type="submit">Analisar</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $texto = $_POST["texto"];

        // Tamanho da string
        $tamanho = strlen($texto);

        // Remove espaços para verificar o palíndromo
        $palavra = strtolower(str_replace(" ", "", $texto));

        $invertida = strrev($palavra);

        if ($palavra == $invertida) {
            $resultado = "Sim";
        } else {
            $resultado = "Não";
        }

        // Conta vogais
        $vogais = preg_match_all(
            "/[aeiouáéíóúâêôãõà]/i",
            $texto
        );

        // Conta consoantes
        $consoantes = preg_match_all(
            "/[bcdfghjklmnpqrstvwxyz]/i",
            $texto
        );

        echo "<p>Tamanho: $tamanho</p>";
        echo "<p>É palíndromo? $resultado</p>";
        echo "<p>Vogais: $vogais</p>";
        echo "<p>Consoantes: $consoantes</p>";

    }

    ?>

</body>
</html>