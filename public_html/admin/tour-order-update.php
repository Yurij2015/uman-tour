<?php
session_start();
if (empty($_SESSION['username'])) {
//  echo "Необходимо войти в систему!";
    header("Location: /admin/log-in.php");
}
require_once("../RedBeanPHP5_4_2/rb.php");
R::setup('mysql:host=mysql_sofievka;port=3306;dbname=db_sofievka', 'root', 'root3004917779');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $tourorders = R::load('tourorders', $id);
    $customername = $tourorders->customername;
    $tourrequest = $tourorders->tourrequest;
    $date = $tourorders->date;
    $place = $tourorders->place;
    $birthdate = $tourorders->birthdate;
    $contact = $tourorders->contact;
    $age = $tourorders->age;
    $prepay = $tourorders->prepay;
    $canyontour = $tourorders->canyontour;
    $lunchcanyon = $tourorders->lunchcanyon;
    $entrancesofievka = $tourorders->entrancesofievka;
    $sofievkatour = $tourorders->sofievkatour;
    $fullplace = $tourorders->fullplace;
}
$page = "tour-order-update";
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

    <title>Admin Panel | Редагувати дані сайту</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script type="text/javascript" src="plugins/tinymce/tinymce.min.js"></script>
    <!-- TinyMCE -->
    <script type="text/javascript">
        tinyMCE.init({
            selector: "#content",
            language: 'ru',
            plugins: 'advlist autolink link image lists charmap print preview',
            height: 100
        });
    </script>
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
        <a href="index.php" class="brand-link">
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
            ?>
            <!-- /.sidebar-menu -->
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
                        <h1 class="m-0 text-dark">Редагувати дані сайту</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="tour-requests.php">Заявки</a>
                            </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="handler-update-tourorders.php">
                                    <div class="form-group">
                                        <label for="tourrequest">Номер
                                            заявки </label>
                                        <input type="text"
                                               class="form-control"
                                               name="tourrequest" id="tourrequest"
                                               value="<?= $tourrequest ?>">
                                        <input hidden name="id" value="<?= $id ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="customername">ПІП</label>
                                        <input type="text" class="form-control" name="customername" id="customername"
                                               value="<?= $customername ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Дата виїзду</label>
                                        <input type="date" class="form-control" name="date" id="date"
                                               value="<?= $date ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="place">Місце виїзду</label>
                                        <input type="text" class="form-control" name="place" id="place"
                                               value="<?= $place ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="birthdate">Дата народження</label>
                                        <input type="date" class="form-control" name="birthdate" id="birthdate"
                                               value="<?= $birthdate ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="contact">Контакти | Viber</label>
                                        <input type="tel" class="form-control" name="contact" id="contact"
                                               value="<?= $contact ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="age">Дорослий/Дитина</label>
                                        <select type="text" class="form-control" name="age" id="age">
                                            <option value="дорослий"
                                                <?php if ($age == "дорослий") echo ' selected="selected"'; ?>>дорослий
                                            </option>
                                            <option value="дитина"
                                                <?php if ($age == "дитина") echo ' selected="selected"'; ?>>дитина
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="prepay">Аванс</label>
                                        <input type="number" step="any" class="form-control" name="prepay" id="prepay"
                                               value="<?= $prepay ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="canyontour">Екскурсія каньйон</label>
                                        <select type="text" class="form-control" name="canyontour" id="canyontour">
                                            <option value="">не визначено</option>
                                            <option value="так"
                                                <?php if ($canyontour == "так") echo ' selected="selected"'; ?>>так
                                            </option>
                                            <option value="ні" <?php if ($canyontour == "ні") echo ' selected="selected"'; ?>>
                                                ні
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="lunchcanyon">Обід каньйон</label>
                                        <select type="text" class="form-control" name="lunchcanyon" id="lunchcanyon">
                                            <option value="">не визначено</option>
                                            <option value="так" <?php if ($lunchcanyon == "так") echo ' selected="selected"'; ?>>
                                                так
                                            </option>
                                            <option value="ні" <?php if ($lunchcanyon == "ні") echo ' selected="selected"'; ?>>
                                                ні
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="entrancesofievka">Вхід Софіївка</label>
                                        <select type="text" class="form-control" name="entrancesofievka"
                                                id="entrancesofievka">
                                            <option value="">не визначено</option>
                                            <option value="так" <?php if ($entrancesofievka == "так") echo ' selected="selected"'; ?>>
                                                так
                                            </option>
                                            <option value="ні" <?php if ($entrancesofievka == "ні") echo ' selected="selected"'; ?>>
                                                ні
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="sofievkatour">Екскурсія Софіївка</label>
                                        <select type="text" class="form-control" name="sofievkatour" id="sofievkatour">
                                            <option value="">не визначено</option>
                                            <option value="так" <?php if ($sofievkatour == "так") echo ' selected="selected"'; ?>>
                                                так
                                            </option>
                                            <option value="ні" <?php if ($sofievkatour == "ні") echo ' selected="selected"'; ?>>
                                                ні
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="fullplace">Повний</label>
                                        <select type="text" class="form-control" name="fullplace" id="fullplace">
                                            <option value="">не визначено</option>
                                            <option value="так" <?php if ($fullplace == "так") echo ' selected="selected"'; ?>>
                                                так
                                            </option>
                                            <option value="ні" <?php if ($fullplace == "ні") echo ' selected="selected"'; ?>>
                                                ні
                                            </option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-success">Зберегти</button>
                                    <a href="tour-orders.php" class="btn btn-info">Назад</a>
                                </form>
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
    <footer class="main-footer">
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
<script src="../js/confirmdelete.js"></script>
</body>
</html>
