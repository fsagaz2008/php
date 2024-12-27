<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <form action="../controller/loginController.php?action=cadastrar" method="post" class="form-cadastro">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" class="input-text"><br>
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" class="input-text"><br>
        <input type="submit" value="Cadastrar" class="btn">
    </form>
</body>
</html>
