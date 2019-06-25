<?php
require_once("../model/Navio.php");

class CadastrarNavioController {
    private $cadastrarNavioController;

    public function __construct() {
        $this->incluir();
    }

    public function incluir() {
        $this->cadastrarNavioController = new Navio($_POST['matricula'], $_POST['transportadoraId']);
        $result = $this->cadastrarNavioController->incluir();
        if ($result >= 1) {
            //echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastro.php'</script>";
            echo "Registro Incluído";
        } else {
            //echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
            echo "Erro";
        }
    }
}

new CadastrarNavioController();