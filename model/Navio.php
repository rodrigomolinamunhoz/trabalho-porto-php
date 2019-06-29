<?php
require_once("Banco.php");

class Navio extends Banco {

    private $id;
    private $matricula;
    private $transportadoraId;
    private $descarregou;
    private $ativo;

    public function __construct() {
        parent::__construct();
    }

    public static function create() {
        $instance = new self();
        return $instance;
    }

    public function getId() {
        return $this->id;
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

    public function setId($_id) {
        $this->id = $_id;
    }

    public function setMatricula($_matricula) {
        $this->matricula = $_matricula;
    }
    
    public function setTransportadoraId($_transportadoraId) {
        $this->transportadoraId = $_transportadoraId;
    }

    public function setDescarregou($_descarregou) {
        $this->descarregou = $_descarregou;
    }

    public function setAtivo($_ativo) {
        $this->ativo = $_ativo;
    }

    public function incluir() {
        return $this->incluirNavio($this->getMatricula(), $this->getTransportadoraId(), $this->getDescarregou(), $this->getAtivo());
    }

    public function inativar() {
        $this->setAtivo(false);
        return $this->inativarNavio($this->getId(), $this->getAtivo());
    }
}