<?php

try{
    //faz conexão com o banco de dados
    $conexao = new PDO("mysql:host=localhost;port=3306;dbname=pdo", "root", "123456");
  

}catch (PDOException $e) {
    //Caso ocorra algum erro, exibe a mensagem de erro
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}