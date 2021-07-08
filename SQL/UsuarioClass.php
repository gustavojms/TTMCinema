<?php 

Class Usuario {
    public function login($usuario, $senha) {
        global $pdo;

        $sql = "SELECT * FROM usuario WHERE usuario = :usuario AND senha = :senha";
        $sql = $pdo -> prepare($sql);
        $sql -> bindValue("usuario", $usuario);
        $sql -> bindValue("senha", md5($senha));
        $sql -> execute();

        if($sql -> rowCount() > 0) {
            $dado = $sql -> fetch();
            
            $_SESSION['userL'] = $dado['usuario'];
            return true;
        } else {
            return false;
        }
    }
}

?>