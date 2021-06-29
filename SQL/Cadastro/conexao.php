<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '20121b6-rc0246');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ("Erro de conexão");
?>