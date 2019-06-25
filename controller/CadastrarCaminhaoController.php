<?php
require_once("../model/Caminhao.php");

class CadastrarCaminhaoController {
    private $cadastrarCaminhaoController;

    public function __construct() {
        $this->incluir();
    }

    public function incluir() {
        $this->cadastrarCaminhaoController = new Caminhao($_POST['placa'], $_POST['transportadoraId']);
        $result = $this->cadastrarCaminhaoController->incluir();
        if ($result >= 1) {
            //echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastro.php'</script>";
            echo "Registro Incluído";
        } else {
            //echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
            echo "Erro";
        }
    }
}

new CadastrarCaminhaoController();