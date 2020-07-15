<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="../index.php" class="nav-link">Головна</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="sitedata.php" class="nav-link">Дані сайту</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="tour-requests.php" class="nav-link">Заявки</a>
    </li>
      <li class="nav-item d-none d-sm-inline-block">
          <a href="tour-orders.php" class="nav-link">Замовлення</a>
      </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="log-out.php" class="nav-link">Вихід <?= "| " . $_SESSION['username'] ?></a>
    </li>
  </ul>
</nav>
