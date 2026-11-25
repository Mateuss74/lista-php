<?php

session_start();

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($usuario == "admin" && $senha == "1234") {

        $_SESSION["usuario"] = $usuario;

        header("Location: principal.php");
        exit;

    } else {

        $mensagem = "Usuário ou senha incorretos.";

    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>

    <form method="post">

        <label>Usuário:</label>
        <input type="text" name="usuario" required>

        <br><br>

        <label>Senha:</label>
        <input type="password" name="senha" required>

        <br><br>

        <button type="submit">Entrar</button>

    </form>

    <p><?php echo $mensagem; ?></p>

</body>
</html>