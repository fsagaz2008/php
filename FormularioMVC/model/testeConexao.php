<?php
include_once "conexao.php";

$conexao = Conexao::conectar();

if ($conexao) {
    echo "Conexão bem-sucedida!";
} else {
    echo "Falha na conexão.";
}
?>

