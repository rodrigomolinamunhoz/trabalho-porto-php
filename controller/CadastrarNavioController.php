<?php
require_once("../model/Navio.php");
session_start();

class CadastrarNavioController {
    private $caminhao;

    public function __construct() {
        $this->incluir();
    }

    public function incluir() {
        $this->caminhao = Navio::create();
        $this->caminhao->setMatricula($_POST['matricula']);
        $this->caminhao->setTransportadoraId($_SESSION['id_usuario']);
        $this->caminhao->setDescarregou(false);
        $this->caminhao->setAtivo(true);

        $result = $this->caminhao->incluir();
        if ($result >= 1) {
            echo "<script>alert('Registro cadastrado com sucesso!');document.location='../view/navio/lista.php'</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar registro! Verifique se já não existe um registro igual.');history.back()</script>";
        }
    }
}

new CadastrarNavioController();