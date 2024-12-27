<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

<?php
include_once "../controller/loginController.php";


$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$controller = new LoginController();
$usuario = $controller->listarPorId($id);

//Verificar se o usuario foi encontrado
if($usuario){
?>

<form action="../controller/loginController.php?action=editar" method="post" class="form-editar">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?php echo $usuario['nome'] ?>" id="nome" class="input-text"><br>
    <label for="login">Login:</label>
    <input type="text" name="login" value="<?php echo $usuario['login']?>" id="login" class="input-text"><br>
    <input type="hidden" name="id" value="<?php echo $usuario['id'] ?>">
    <input type="submit" value="Editar" class="btn">
</form>
<?php
} else {
    echo "Usuário não encontrado";
}
?>
</body>
</html>
