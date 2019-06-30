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
        try {
            $r = $this->mysqli->prepare("INSERT INTO caminhao (`Placa`, `TransportadoraId`, `Descarregou`, `Ativo`) VALUES (:Placa,:TransportadoraId,:Descarregou,:Ativo)");
            $r->execute(array(':Placa' => $_placa, ':TransportadoraId' => $_transportadoraId, ':Descarregou' => $_descarregou, ':Ativo' => $_ativo));
        } catch (PDOException $e) {
            return false;
        }
        
        if($r->rowCount() > 0) {
            return true;	
        } else {
            return false;
        }
    }

    public function listarCaminhoes($_transportadoraId){
        $r = $this->mysqli->prepare("SELECT * FROM caminhao WHERE `TransportadoraId`=? ORDER BY `Ativo` DESC");
        $r->execute(array($_transportadoraId));

        if($r->rowCount() > 0) {
            foreach($r as $linha) {
                $array[] = $linha;
            }
            return $array;	
        } else {
            return $array = array();
        }
    }

    public function listarNavios($_transportadoraId){
        $r = $this->mysqli->prepare("SELECT * FROM navio WHERE `TransportadoraId`=? ORDER BY `Ativo` DESC");
        $r->execute(array($_transportadoraId));

        if($r->rowCount() > 0) {
            foreach($r as $linha) {
                $array[] = $linha;
            }
            return $array;	
        } else {
            return $array = array();
        }
    }

    public function incluirNavio($_matricula, $_transportadoraId, $_descarregou, $_ativo) {
        try {
            $r = $this->mysqli->prepare("INSERT INTO navio (`Matricula`, `TransportadoraId`, `Descarregou`, `Ativo`) VALUES (:Matricula,:TransportadoraId,:Descarregou,:Ativo)");
            $r->execute(array(':Matricula' => $_matricula, ':TransportadoraId' => $_transportadoraId, ':Descarregou' => $_descarregou, ':Ativo' => $_ativo));
        } catch (PDOException $e) {
            return false;
        }
       
        if($r->rowCount() > 0) {
            return true;	
        } else {
            return false;
        }
    }

    public function inativarCaminhao($_id, $_ativo) {
        $r = $this->mysqli->prepare("UPDATE caminhao SET `Ativo`=? WHERE Id=?");
        $r->execute(array($_ativo, $_id));

        if($r->rowCount() > 0) {
            return true;	
        } else {
            return false;
        }
    }

    public function inativarNavio($_id, $_ativo) {
        $r = $this->mysqli->prepare("UPDATE navio SET `Ativo`=? WHERE Id=?");
        $r->execute(array($_ativo, $_id));

        if($r->rowCount() > 0) {
            return true;	
        } else {
            return false;
        }
    }

    public function login($_login, $_senha) {
        $r = $this->mysqli->prepare("SELECT * FROM usuario WHERE `Login`=? AND `Senha`=?");
        $r->execute(array($_login, md5($_senha)));

        if($r->rowCount() > 0) {
            return $r->fetchAll(PDO::FETCH_ASSOC);	
        } else {
            return null;
        }
    }

    public function verificarUsuarioExistente($_login) {
        $r = $this->mysqli->prepare("SELECT * FROM usuario WHERE `Login`=?");
        $r->execute(array($_login));

        if($r->rowCount() > 0) {
            return true;	
        } else {
            return false;
        }
    }

    public function incluirUsuario($_nomeCompleto, $_login, $_senha, $_tipoUsuario) {
        $r = $this->mysqli->prepare("INSERT INTO usuario (`NomeCompleto`, `Login`, `Senha`, `TipoUsuario`) VALUES (:NomeCompleto,:Login,:Senha,:TipoUsuario)");
        $r->execute(array(':NomeCompleto' => $_nomeCompleto, ':Login' => $_login, ':Senha' => $_senha, ':TipoUsuario' => $_tipoUsuario));
        
        if($r->rowCount() > 0) {
            return true;	
        } else {
            return false;
        }
    }
}