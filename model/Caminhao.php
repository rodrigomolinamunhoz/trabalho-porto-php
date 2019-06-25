<?php
require_once("Banco.php");

class Caminhao extends Banco {

    private $id;
    private $placa;
    private $transportadoraId;
    private $descarregou;
    private $ativo;

    public function __construct($_placa, $_transportadoraId) {
        parent::__construct();

        $this->placa = $_placa;
        $this->transportadoraId = $_transportadoraId;
        $this->descarregou = false;
        $this->ativo = true;
    }

    public function getPlaca() {
        return $this->placa;
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
        return $this->incluirCaminhao($this->getPlaca(), $this->getTransportadoraId(), $this->getDescarregou(), $this->getAtivo());
    }
}