<?php

require "conexao.php";

$sql = "SELECT * FROM usuarios";

$resultado = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de usuários</title>

    <style>

        table {
            border-collapse: collapse;
            width: 60%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

    </style>

</head>
<body>

    <h1>Usuários cadastrados</h1>

    <?php

    if ($resultado->num_rows > 0) {

    ?>

        <table>

            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
            </tr>

            <?php

            while ($linha = $resultado->fetch_assoc()) {

            ?>

                <tr>

                    <td><?php echo $linha["id"]; ?></td>

                    <td><?php echo $linha["nome"]; ?></td>

                    <td><?php echo $linha["email"]; ?></td>

                    <td><?php echo $linha["telefone"]; ?></td>

                </tr>

            <?php

            }

            ?>

        </table>

    <?php

    } else {

        echo "<p>A tabela está vazia.</p>";

    }

    ?>

</body>
</html>