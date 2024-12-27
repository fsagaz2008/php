<?php
class Conexao {
    public static function conectar() {
        try {
            return new PDO("mysql:host=localhost;port=3306;dbname=pdo2", "root", "123456");
         
        } catch (PDOException $e) {
            echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
        }
    }
}
?>
