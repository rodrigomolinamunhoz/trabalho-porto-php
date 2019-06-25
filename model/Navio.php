<?php
require_once("Banco.php");

class Navio extends Banco {

    private $id;
    private $matricula;
    private $transportadoraId;
    private $descarregou;
    private $ativo;

    public function __construct($_matricula, $_transportadoraId) {
        parent::__construct();

        $this->matricula = $_matricula;
        $this->transportadoraId = $_transportadoraId;
        $this->descarregou = false;
        $this->ativo = true;
    }

    public function getMatricula() {
        return $this->matricula;
    }
    
    public function getTransportadoraId() {
        return $this->transportadoraId;
    }
    
    public function getDescarregou() {
        return $this->descarregou;
    }

    public function getAtivo() {
        return $this->ativo;
    }

    public function setAtivo($_ativo) {
        $this->ativo = $_ativo;
    }

    public function incluir() {
        return $this->incluirNavio($this->getMatricula(), $this->getTransportadoraId(), $this->getDescarregou(), $this->getAtivo());
    }
}