<?php
include("../../model/Banco.php");

class ListarNavioController {

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->listarNavios();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['Id'] ."</th>";
            echo "<td>".$value['Matricula'] ."</td>";
            echo "<td>".$value['Descarregou'] = ($value['Descarregou'] == "0") ? "Não":"Sim" ."</td>";
            echo "<td>".$value['Ativo'] = ($value['Ativo'] == "0") ? "Desativado":"Ativado" ."</td>";
            echo "<td><a class='btn btn-danger' href='../../controller/InativarNavioController.php?id=".$value['Id']."'>Inativar</a></td>";
            echo "</tr>";
        }
    }
}
