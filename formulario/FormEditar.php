<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

include_once "conexao.php";

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$consulta = $conexao->query("SELECT * FROM login WHERE id = '$id'");
$linha = $consulta->fetch(PDO::FETCH_ASSOC);

?>
    <form action="editar.php" method="post" class=form-editar>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $linha['nome'] ?>" id="Nome" class="input-text"></br>
        <label for="login">Login:</label>
        <input type="text" name="login" value="<?php echo $linha['login']?>" id="login" class="input-text"></br>
        <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
    <input type="submit" value="Editar" class="btn">
</form>
</body>
</html>


