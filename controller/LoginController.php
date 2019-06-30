<?php
include("../model/Banco.php");
require_once("../model/Usuario.php");

class LoginController {
    private $banco;

    public function __construct($_login, $_senha) {
        $this->banco = new Banco();
        $this->validarLogin($_login, $_senha);
    }

    public function validarLogin($_login, $_senha) {
        $result = $this->banco->login($_login, $_senha);

        if ($result != null) {
            $result[0];
            $usuario = Usuario::create();
            $usuario->setId($result[0]['Id']);
            $usuario->setNomeCompleto($result[0]['NomeCompleto']);
            $usuario->setLogin($result[0]['Login']);
            $usuario->setSenha($result[0]['Senha']);
            $usuario->setTipoUsuario($result[0]['TipoUsuario']);
            
            session_start();
            $_SESSION['usuario_logado'] = $usuario->getNomeCompleto();
            $_SESSION['id_usuario'] = $usuario->getId();
            $_SESSION['tipo_usuario'] = $usuario->getTipoUsuario();
            
            echo "<script>alert('Login efetuado com sucesso!');document.location='../view/painel-porto.php'</script>";
        } else {
            echo "<script>alert('Login ou senha incorreto(s)!');history.back()</script>";
        }
    }
}

new LoginController($_POST['login'], $_POST['senha']);
?>