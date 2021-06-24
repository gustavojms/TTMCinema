<?php 
session_start();
include('login_verify.php');
?>

<h2>Olá, <?php echo $_SESSION['usuario']?> </h2>
<h2><a href="logout.php">Sair</a></h2>