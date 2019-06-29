<?php
require_once("../model/Navio.php");

class InativarNavioController {
    private $navio;

    public function __construct($_id){

        $this->navio = Navio::create();
        $this->navio->setId($_id);
        
        $result = $this->navio->inativar();

        if ($result >= 1) {
            //echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastro.php'</script>";
            echo "Inativou";
        } else {
            //echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
            echo "Não inativou";
        }
    }
}
new InativarNavioController($_GET['id']);
?>