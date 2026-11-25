<?php

session_start();

if (!isset($_SESSION["usuario"])) {

    header("Location: login.php");
    exit;

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página principal</title>
</head>
<body>

    <h1>Você está logado!</h1>

    <p>
        Usuário:
        <?php echo $_SESSION["usuario"]; ?>
    </p>

    <form action="logout.php" method="post">

        <button type="submit">Encerrar sessão</button>

    </form>

</body>
</html>