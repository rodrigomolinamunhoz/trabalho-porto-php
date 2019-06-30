<?php
    session_start();

    if (isset($_SESSION['usuario_logado'])) {
        session_destroy();
        echo "<script>alert('Sessão encerrada!');document.location='../view/index.php'</script>";
    }
?>