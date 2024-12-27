<?php
include_once "../model/loginModel.php";

class LoginController {
    private $model;

    public function __construct() {
        $this->model = new LoginModel();
    }

    public function listar() {
            return $this->model->listar();
    }

    public function listarPorId($id) {
        return $this->model->listarPorId($id);
    }

    public function cadastrar($nome, $login) {
        $this->model->cadastrar($nome, $login);
        header("Location: ../view/index.php");
    }

    public function editar($id, $nome, $login) {
        $this->model->editar($id, $nome, $login);
        header("Location: ../view/index.php");
    }

    public function excluir($id) {
        $this->model->excluir($id);
        header("Location: ../view/index.php");
    }
}
    $controller = new LoginController(); 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
        if (isset($_GET['action'])) { 
        $action = $_GET['action']; 
        if ($action == 'cadastrar') {
             $controller->cadastrar($_POST['nome'], $_POST['login']);
             } elseif ($action == 'editar') { 
                $controller->editar($_POST['id'], $_POST['nome'], $_POST['login']); 
            } 
        } 
    } elseif (isset($_GET['action']) && $_GET['action'] == 'excluir') { 
        $controller->excluir($_GET['id']);
    }
?>
