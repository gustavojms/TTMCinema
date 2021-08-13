<?php if (!Usuario::isLogged()): ?>
    <ul class="nav-list">
        <li><a href="/index.php">Inicio</a></li>
        <li><a href="/usuario/cadastro.php">Cadastrar</a></li>
        <li><a href="/usuario/login.php">Entrar</a></li>
        <li><a href="/catalogo/catalogo.php">Catalogo</a></li>
    </ul>
    <?php else: ?>
    <ul class="nav-list">
        <li><a href="/index.php">Inicio</a></li>
        <li><a href="/catalogo/catalogo.php">Catalogo</a></li>
        <li><a href="/usuario/logout.php">Sair</a></li>
        <li><a href=""><?= ucfirst($_SESSION['userL']) ?></a></li>
    </ul>
<?php endif ?>