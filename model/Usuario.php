<?php
require_once("Banco.php");

class Usuario extends Banco {

    private $id;
    private $nomeCompleto;
    private $login;
    private $senha;
    private $tipoUsuario;

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

    public function getNomeCompleto() {
        return $this->nomeCompleto;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getTipoUsuario() {
        return $this->tipoUsuario;
    }

    public function setId($_id) {
        $this->id = $_id;
    }

    public function setNomeCompleto($_nomeCompleto) {
        $this->nomeCompleto = $_nomeCompleto;
    }

    public function setLogin($_login) {
        $this->login = $_login;
    }

    public function setSenha($_senha) {
        $this->senha = $_senha;
    }

    public function setTipoUsuario($_tipoUsuario) {
        $this->tipoUsuario = $_tipoUsuario;
    }
}
?>