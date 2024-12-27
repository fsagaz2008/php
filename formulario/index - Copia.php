<?php
include_once "conexao.php";

try {

    //Execução da instrução SQL
    $consulta = $conexao->query("SELECT * FROM login");
    echo"<a href='formCadastro.php'>Novo Cadastro</a><br><br>Listagem de Usuarios";
    echo"<table border='1'><tr><td>Nome</td><td>Login</td><td>Ações</td></tr>";

    while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
        echo "<tr><td>$linha[nome]</td><td>$linha[login]</td><td><a href='FormEditar.php?id=$linha[id]'>Editar</a> - <a href='Excluir.php?id=$linha[id]'>Excluir</a></td></tr>";
    }

    echo "</tbody></table>";
    echo "<p>{$consulta->rowCount()} Registro Exibidos</p>";

   //echo $consulta->rowCount(). "Registros Exibidos";
    
} catch (PDOException $e) {

    echo $e-> getMessage();

}
?>