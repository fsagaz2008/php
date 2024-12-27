<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuários</title>
    <link rel="stylesheet" href="../css/estilo.css"> <!-- Link para o arquivo CSS -->
</head>
<body>

<?php
include_once "../controller/loginController.php";
$controller = new LoginController();
$usuarios = $controller->listar();
?>

<a href='formCadastro.php' class='btn'>Novo Cadastro</a><br><br>Listagem de Usuários
<table class='styled-table'>
    <thead>
        <tr><th>Nome</th><th>Login</th><th>Ações</th></tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario) : ?>
            <tr>
                <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['login'] ?></td>
                <td>
                    <a href='formEditar.php?id=<?= $usuario["id"] ?>'>Editar</a> - 
                    <a href='../controller/loginController.php?action=excluir&id=<?= $usuario["id"] ?>'>Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<p><?= count($usuarios) ?> Registros Exibidos</p>

</body>
</html>
