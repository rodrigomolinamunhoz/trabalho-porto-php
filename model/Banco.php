<?php

class Banco {
    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new PDO('mysql:host=localhost;dbname=porto_db;charset=utf8','root','');
        $this->mysqli->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
    }

    public function incluirCaminhao($_placa, $_transportadoraId, $_descarregou, $_ativo) {
        $r = $this->mysqli->prepare("INSERT INTO caminhao (`Placa`, `TransportadoraId`, `Descarregou`, `Ativo`) VALUES(:Placa,:TransportadoraId,:Descarregou,:Ativo)");
        $r->execute(array(':Placa' => $_placa, ':TransportadoraId' => $_transportadoraId, ':Descarregou' => $_descarregou, ':Ativo' => $_ativo));
        
        if($r->rowCount() > 0) {
            return true;	
        } else {
            return false;
        }
    }

    public function listarCaminhoes(){
        $r = $this->mysqli->query("SELECT * FROM caminhao");
        foreach($r as $linha) {
            $array[] = $linha;
        }
        return $array;
    }

    public function listarNavios(){
        $r = $this->mysqli->query("SELECT * FROM navio");
        foreach($r as $linha) {
            $array[] = $linha;
        }
        return $array;
    }

    public function incluirNavio($_matricula, $_transportadoraId, $_descarregou, $_ativo) {
        $r = $this->mysqli->prepare("INSERT INTO navio (`Matricula`, `TransportadoraId`, `Descarregou`, `Ativo`) VALUES(:Matricula,:TransportadoraId,:Descarregou,:Ativo)");
        $r->execute(array(':Matricula' => $_matricula, ':TransportadoraId' => $_transportadoraId, ':Descarregou' => $_descarregou, ':Ativo' => $_ativo));
        
        if($r->rowCount() > 0) {
            return true;	
        } else {
            return false;
        }
    }
}