<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'senha');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ("Erro de conexão");
?>