<?php
require_once("../model/Caminhao.php");

class CadastrarCaminhaoController {
    private $caminhao;

    public function __construct() {
        $this->incluir();
    }

    public function incluir() {

        $this->caminhao = Caminhao::create();
        $this->caminhao->setPlaca($_POST['placa']);
        $this->caminhao->setTransportadoraId($_POST['transportadoraId']);
        $this->caminhao->setDescarregou(false);
        $this->caminhao->setAtivo(true);

        $result = $this->caminhao->incluir();
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