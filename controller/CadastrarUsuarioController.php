<?php
require_once("../model/Usuario.php");

class CadastrarUsuarioController {
    private $banco;

    public function __construct() {
        $this->banco = new Banco();
        $this->incluir();
    }

    public function incluir() {
        if ($_POST['senha'] != $_POST['confirmaSenha']) {
            echo "<script>alert('Campo Senha e Confirmar Senha estão diferentes!');document.location='../view/cadastro-usuario-transportador.php'</script>";
        }

        $result = $this->banco->verificarUsuarioExistente($_POST['login']);
        if ($result >= 1) {
            echo "<script>alert('Já existe transportadora com esse login!');document.location='../view/cadastro-usuario-transportador.php'</script>";
        } else {
            $usuario = Usuario::create();
            $usuario->setNomeCompleto($_POST['nomeCompleto']);
            $usuario->setLogin($_POST['login']);
            $usuario->setSenha(md5($_POST['senha']));
            $usuario->setTipoUsuario(1);

            $result = $usuario->incluir();
            if ($result >= 1) {
                echo "<script>alert('Transportadora cadastrada com sucesso!');document.location='../view/index.php'</script>";
            } else {
                echo "<script>alert('Erro ao cadastrar transportadora!');history.back()</script>";
            }       
        }
    }
}

new CadastrarUsuarioController();