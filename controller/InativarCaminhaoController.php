<?php
require_once("../model/Caminhao.php");

class InativarCaminhaoController {
    private $caminhao;

    public function __construct($_id){

        $this->caminhao = Caminhao::create();
        $this->caminhao->setId($_id);
        
        $result = $this->caminhao->inativar();

        if ($result >= 1) {
            //echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastro.php'</script>";
            echo "Inativou";
        } else {
            //echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
            echo "Não inativou";
        }
    }
}
new InativarCaminhaoController($_GET['id']);
?>