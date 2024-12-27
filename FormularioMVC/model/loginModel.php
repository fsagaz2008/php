<?php
include_once "conexao.php";

class LoginModel {
    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::conectar();
    }

    public function listar() {
        $consulta = $this->conexao->query("SELECT * FROM login");
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listarPorId($id){
        $consulta = $this->conexao->prepare("SELECT * FROM login WHERE id = :id");
        $consulta->bindParam(':id', $id, PDO::PARAM_INT);
        $consulta->execute();
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }

    public function cadastrar($nome, $login) {
        $insert = $this->conexao->prepare("INSERT INTO login (nome, login) VALUES (:nome, :login)");
        $insert->bindParam(':nome', $nome);
        $insert->bindParam(':login', $login);
        $insert->execute();
    }

    public function editar($id, $nome, $login) {
        $update = $this->conexao->prepare("UPDATE login SET nome = :nome, login = :login WHERE id = :id");
        $update->bindParam(':id', $id);
        $update->bindParam(':nome', $nome);
        $update->bindParam(':login', $login);
        $update->execute();
    }

    public function excluir($id) {
        $delete = $this->conexao->prepare("DELETE FROM login WHERE id = :id");
        $delete->bindParam(':id', $id);
        $delete->execute();
    }
}
?>
