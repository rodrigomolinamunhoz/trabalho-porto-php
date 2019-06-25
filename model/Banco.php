<?php

class Banco {
    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli('localhost', 'root' , '', 'porto_db');
    }

    public function incluirCaminhao($_placa, $_transportadoraId, $_descarregou, $_ativo) {
        $stmt = $this->mysqli->prepare("INSERT INTO caminhao (`Placa`, `TransportadoraId`, `Descarregou`, `Ativo`) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss", $_placa, $_transportadoraId, $_descarregou, $_ativo);
         if($stmt->execute() == TRUE) {
            return true ;
        } else {
            return false;
        }
    }

    public function listarCaminhoes(){
        $result = $this->mysqli->query("SELECT * FROM caminhao");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }

        return $array;
    }

    public function listarNavios(){
        $result = $this->mysqli->query("SELECT * FROM navio");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }

        return $array;
    }

    public function incluirNavio($_matricula, $_transportadoraId, $_descarregou, $_ativo) {
        $stmt = $this->mysqli->prepare("INSERT INTO navio (`Matricula`, `TransportadoraId`, `Descarregou`, `Ativo`) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss", $_matricula, $_transportadoraId, $_descarregou, $_ativo);
         if($stmt->execute() == TRUE) {
            return true ;
        } else {
            return false;
        }
    }
}