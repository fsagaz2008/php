<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuários</title>
    <link rel="stylesheet" href="style.css"> <!-- Link para o arquivo CSS -->
</head>
<body>

    <?php
    include_once "conexao.php";

    try {
        $consulta = $conexao->query("SELECT * FROM login");
        echo "<a href='formCadastro.php' class='btn'>Novo Cadastro</a><br><br>Listagem de Usuarios";
        echo "<table class='styled-table'><thead><tr><th>Nome</th><th>Login</th><th>Ações</th></tr></thead><tbody>";

        while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>{$linha['nome']}</td><td>{$linha['login']}</td><td><a href='FormEditar.php?id={$linha['id']}'>Editar</a> - <a href='Excluir.php?id={$linha['id']}'>Excluir</a></td></tr>";
        }

        echo "</tbody></table>";
        echo "<p>{$consulta->rowCount()} Registros Exibidos</p>";

    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
    ?>
</body>
</html>
