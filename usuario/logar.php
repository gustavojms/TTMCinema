<?php 

    if (isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
        require '../conexao/conexao.php';
        require 'UsuarioClass.php';

        // $user = new Usuario();

        $usuario = addslashes($_POST['usuario']);
        $senha = addslashes($_POST['senha']);

        if(Usuario::login ($usuario, $senha) === true) {
            if(isset($_SESSION['userL'])) {
                header("Location: /catalogo/catalogo.php");
            }
            header("Location: /catalogo/catalogo.php");
        } else {
            header("Location: login.php");
        }

} else {
    header("Location: login.php");
}

?>