<?php 

Class Usuario {
    public static function login($usuario, $senha) {
        global $pdo;

        $sql = "SELECT * FROM usuario WHERE nick = :nick AND senha = :senha";
        $sql = $pdo -> prepare($sql);
        $sql -> bindValue("nick", $usuario);
        $sql -> bindValue("senha", md5($senha));
        $sql -> execute();

        if($sql -> rowCount() > 0) {
            $dado = $sql -> fetch();
            
            $_SESSION['userL'] = $dado['nome'];
            $_SESSION['userId'] = $dado['id_usuario'];
            return true;
        } else {
            return false;
        }
    }
    
    public static function isLogged() {
        return isset($_SESSION['userL']);
    }

    public static function userId() {
        return $_SESSION['userId'];
    }
}

?>