<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="../index.php" class="nav-link">Главная</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="support-admin.php" class="nav-link">Статьи</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="sitedata.php" class="nav-link">Данные сайта</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="orders.php" class="nav-link">Заявки</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="log-out.php" class="nav-link">Выход <?= "| " . $_SESSION['username'] ?></a>
        </li>
    </ul>
</nav>