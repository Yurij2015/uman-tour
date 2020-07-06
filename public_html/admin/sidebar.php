<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item has-treeview menu-open">
      <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Меню администратора
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="index.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Главная</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="support-admin.php" class="nav-link active">
            <i class="far fa-circle nav-icon"></i>
            <p>Заявки на техподдержку</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="user-admin.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Пользователи</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="log-out.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Выход <?= "| " . $_SESSION['username'] ?></p>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
