<?php
require_once("../model/Caminhao.php");

class InativarCaminhaoController {
    private $caminhao;

    public function __construct($_id){

        $this->caminhao = Caminhao::create();
        $this->caminhao->setId($_id);
        
        $result = $this->caminhao->inativar();

        if ($result >= 1) {
            echo "<script>alert('Registro inativado com sucesso!');document.location='../view/caminhao/lista.php'</script>";
        } else {
            echo "<script>alert('Erro ao inativar registro!');history.back()</script>";
        }
    }
}
new InativarCaminhaoController($_GET['id']);
?>