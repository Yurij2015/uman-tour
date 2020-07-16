<?php
session_start();
if (empty($_SESSION['username'])) {
//  echo "Необходимо войти в систему!";
    header("Location: /admin/log-in.php");

}
$page = "report";
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Admin Panel | Замовлення</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <?php
    require_once("navbar.php");
    ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index.html" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="Admin Panel" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">AdminPanel</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="#" class="d-block"><?php echo "Admin User"; ?></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <?php
            require_once("sidebar.php");
            ?> <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Створення звітів</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Головна</a></li>
                            <li class="breadcrumb-item active">Замовлення</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <?php
                require_once("../RedBeanPHP5_4_2/rb.php");
                require_once ("DbConnect.php");
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="tutor_id">
                                    <form method="post" class="no-print">
                                        <div class="form-row col-md-6 mb-4">
                                            <div class="col">
                                                <label for="dateoforder" hidden> </label>
                                                <select class="form-control form-inline" name="dateoforder"
                                                        id="dateoforder">
                                                    <option value="" selected disabled hidden>Виберіть дату</option>
                                                    <?php
                                                    function get()
                                                    {
                                                        return R::getAll("SELECT distinct DATE_FORMAT(date, '%Y-%m-%d') as dateoforder FROM tourorders");
                                                    }

                                                    foreach (get() as $tourdate) { ?>
                                                        <option value="<?php echo $tourdate['dateoforder']; ?>">
                                                            <?php echo $tourdate['dateoforder']; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="submit"> </label>
                                                <input type="submit" value="Відобразити" class="btn btn-primary"
                                                       id="submit">
                                                <button class="btn btn-primary" onclick="window.print();">Друкувати
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <table class="table table-hover table-responsive-md">
                                        <thead>
                                        <tr>
                                            <th>Номер замовлення</th>
                                            <th>Номер заявки</th>
                                            <th>ПІП</th>
                                            <th>Дата виїзду</th>
                                            <th>Місце виїзду</th>
                                            <th>Дата народження</th>
                                            <th>Контакти | Viber</th>
                                            <th>Дорослий/Дитина</th>
                                            <th>Аванс</th>
                                            <th>Екскурсія каньйон</th>
                                            <th>Обід каньйон</th>
                                            <th>Вхід Софіївка</th>
                                            <th>Екскурсія Софіївка</th>
                                            <th>Повний</th>
                                            <th class="no-print"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        if ($_POST['dateoforder']) {
                                            $dateoforder = $_POST['dateoforder'];
                                            $tourorders = R::getAll("SELECT * FROM tourorders WHERE DATE_FORMAT(date, '%Y-%m-%d') = '{$dateoforder}'");
                                        }
                                        if (!$_POST) {
                                            $tourorders = R::getAll('SELECT * FROM tourorders');
                                        }
                                        ?>
                                        <?php
                                        foreach ($tourorders as $tourorder) {
                                            $id = $tourorder['id'];
                                            ?>
                                            <tr>
                                                <td><?= $id ?></td>
                                                <td><?= $tourorder['tourrequest'] ?></td>
                                                <td><?= $tourorder['customername'] ?></td>
                                                <td><?= $tourorder['date'] ?></td>
                                                <td><?= $tourorder['place'] ?></td>
                                                <td><?= $tourorder['birthdate'] ?></td>
                                                <td><?= $tourorder['contact'] ?></td>
                                                <td><?= $tourorder['age'] ?></td>
                                                <td><?= $tourorder['prepay'] ?></td>
                                                <td><?= $tourorder['canyontour'] ?></td>
                                                <td><?= $tourorder['lunchcanyon'] ?></td>
                                                <td><?= $tourorder['entrancesofievka'] ?></td>
                                                <td><?= $tourorder['sofievkatour'] ?></td>
                                                <td><?= $tourorder['fullplace'] ?></td>
                                                <td class="no-print"><a href="tour-order-update.php?id=<?= $id ?>">Редагувати</a>
                                                    | <a
                                                            href="tour-order-delete.php?id=<?= $id ?>"
                                                            onclick='return confirmDelete();'>Видалити</a></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Main Footer -->
    <footer class="main-footer no-print">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; <?= date("Y") ?> <a href="/">AdminPanel</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
