<?php
session_start();
if (empty($_SESSION['username'])) {
    header("Location: /admin/log-in.php");
}
$page = "tourist-add";
if (isset($_GET['tourrequestid'])) {
    $tourrequest = $_GET['tourrequestid'];
    $orderer = $_GET['orderer'];
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Panel | Додати туриста</title>
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
                        <h1 class="m-0 text-dark">Додати туриста в тур</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Головна</a></li>
                            <li class="breadcrumb-item active">Додати запис</li>
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
                                <form method="post" action="handler-add-tourist.php">
                                    <div class="form-group">
                                        <label for="tourrequest">Номер
                                            заявки <?php if (isset($tourrequest)) echo $tourrequest . " <span class='text-warning'>Заявник: " . $orderer . "</span>" ?></label>
                                        <input type="text"
                                               class="form-control" <?php if (isset($tourrequest)) echo "hidden" ?>
                                               name="tourrequest" id="tourrequest"
                                               value="<?php if (isset($tourrequest)) echo $tourrequest ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="customername">ПІП</label>
                                        <input type="text" class="form-control" name="customername" id="customername"
                                               value="<?php if (isset($tourrequest)) echo $orderer ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Дата виїзду</label>
                                        <input type="date" class="form-control" name="date" id="date"
                                               value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="place">Місце виїзду</label>
                                        <input type="text" class="form-control" name="place" id="place"
                                               value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="birthdate">Дата народження</label>
                                        <input type="date" class="form-control" name="birthdate" id="birthdate"
                                               value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="contact">Контакти | Viber</label>
                                        <input type="tel" class="form-control" name="contact" id="contact"
                                               value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="age">Дорослий/Дитина</label>
                                        <select type="text" class="form-control" name="age" id="age">
                                            <option value="дорослий">дорослий</option>
                                            <option value="дитина">дитина</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="prepay">Аванс</label>
                                        <input type="number" step="any" class="form-control" name="prepay" id="prepay"
                                               value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="canyontour">Екскурсія каньйон</label>
                                        <select type="text" class="form-control" name="canyontour" id="canyontour">
                                            <option value="">не визначено</option>
                                            <option value="так">так</option>
                                            <option value="ні">ні</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="lunchcanyon">Обід каньйон</label>
                                        <select type="text" class="form-control" name="lunchcanyon" id="lunchcanyon">
                                            <option value="">не визначено</option>
                                            <option value="так">так</option>
                                            <option value="ні">ні</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="entrancesofievka">Вхід Софіївка</label>
                                        <select type="text" class="form-control" name="entrancesofievka" id="entrancesofievka">
                                            <option value="">не визначено</option>
                                            <option value="так">так</option>
                                            <option value="ні">ні</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="sofievkatour">Екскурсія Софіївка</label>
                                        <select type="text" class="form-control" name="sofievkatour" id="sofievkatour">
                                            <option value="">не визначено</option>
                                            <option value="так">так</option>
                                            <option value="ні">ні</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="fullplace">Повний</label>
                                        <select type="text" class="form-control" name="fullplace" id="fullplace">
                                            <option value="">не визначено</option>
                                            <option value="так">так</option>
                                            <option value="ні">ні</option>
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
