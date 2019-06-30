<?php
require_once("../model/Navio.php");

class InativarNavioController {
    private $navio;

    public function __construct($_id){

        $this->navio = Navio::create();
        $this->navio->setId($_id);
        
        $result = $this->navio->inativar();

        if ($result >= 1) {
            echo "<script>alert('Registro inativado com sucesso!');document.location='../view/navio/lista.php'</script>";
        } else {
            echo "<script>alert('Erro inativar registro!');history.back()</script>";
        }
    }
}
new InativarNavioController($_GET['id']);
?>