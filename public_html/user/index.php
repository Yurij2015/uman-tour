<?php
if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
}
require_once("../RedBeanPHP5_4_2/rb.php");
R::setup('mysql:host=mysql_sofievka;port=3306;dbname=db_sofievka', 'root', 'root3004917779');
$sitedata = R::load('sitedata', 1);
$sitename = $sitedata->sitename;
$footer = $sitedata->footer;
$phone = $sitedata->phone;
$keywords = $sitedata->keywords;
$description = $sitedata->description;
$sitepage = $sitedata->page;
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $description ?>">
    <meta name="keywords" content="<?= $keywords ?>">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <style>
        .sd-container {
            position: relative;
            float: left;
        }

        .sd {
            border: 1px solid #1cbaa5;
            padding: 5px 10px;
            height: 30px;
            width: 150px;
        }

        .open-button {
            position: absolute;
            top: 10px;
            right: 3px;
            width: 25px;
            height: 25px;
            background: #fff;
            pointer-events: none;
        }

        .open-button button {
            border: none;
            background: transparent;
        }
    </style>
    <title><?= $sitename ?></title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-breezed.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>
<body>
<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->
<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        .UMANTOUR
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Головна</a></li>
                        <li class="scroll-to-section"><a href="#about">Про тур</a></li>
                        <li class="scroll-to-section"><a href="#contact-us">Оформити заявку</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner header-text" id="top">
    <div class="Modern-Slider">
        <!-- Item -->
        <div class="item">
            <div class="img-fill">
                <img src="assets/images/slide9.jpg" alt="">
                <div class="text-content">
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item">
            <div class="img-fill">
                <img src="assets/images/slide3.jpg" alt="">
                <div class="text-content">
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item">
            <div class="img-fill">
                <img src="assets/images/slide6.jpg" alt="">
                <div class="text-content">
                </div>
            </div>
        </div>
        <!-- // Item -->
    </div>
</div>
<div class="scroll-down scroll-to-section"><a href="#about"><i class="fa fa-arrow-down"></i></a></div>
<!-- ***** Main Banner Area End ***** -->
<!-- ***** About Area Starts ***** -->
<section class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="right-text-content">
                    <div class="section-heading">
                        <?php
                        $supports = R::getAll('SELECT * FROM article ORDER BY header');
                        foreach ($supports as $support) {
                            ?>
                            <div class="section-heading">
                                <h6><?= $support['header'] ?></h6>
                                <h2><?= $support['subheader'] ?></h2>
                                <div>
                                    <?= $support['content'] ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- ***** About Area Ends ***** -->
<!-- ***** Contact Us Area Starts ***** -->
<section class="section" id="contact-us">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Замовити тур</h6>
                        <h2>Заповніть форму для замовлення туру!</h2>
                    </div>
                    <div class="col-md-12 mb-3"><p id="order-added" class="text-warning text-center"><?= $msg ?></p></div>
                    <script>
                        setTimeout(function () {
                            $('#order-added').fadeOut('fast');
                        }, 30000); // <-- time in milliseconds
                    </script>
                    <ul class="contact-info">
                        <li><a href="tel:<?= $phone ?>"><img src="assets/images/contact-info-01.png" alt="">
                                <?= $phone ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-xs-12">
                <div class="contact-form">
                    <form id="contact" action="order-add.php" method="post">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <fieldset>
                                    <label for="name">Прізвище, Ім'я, По батькові</label>
                                    <input name="name" type="text" id="name" placeholder="Прізвище, Ім'я, По батькові *"
                                           required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <fieldset>
                                    <label for="phone">Номер телефону</label>
                                    <input name="phone" type="text" id="phone" placeholder="Номер телефону *"
                                           required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <fieldset>
                                    <label for="dateoftour">Дата поїздки</label>
                                    <input name="dateoftour" type="date" id="dateoftour" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <fieldset>
                                    <label for="count">Кількість місць</label>
                                    <input name="count" type="number" id="count" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button-icon">Відправити заявку! <i
                                                class="fa fa-arrow-right"></i></button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Contact Us Area Ends ***** -->
<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xs-12">
                <div class="left-text-content">
                    <p><?= $footer ?>
                        <br>Сайт створено <a rel="nofollow noopener" href="https://www.facebook.com/webdev.poltava/">WebDev.Poltava</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12">
                <div class="right-text-content">
                    <ul class="social-icons">
                        <li><p>Ми в соціальних мережах</p></li>
                        <li><a rel="nofollow" href="https://www.facebook.com/sofiuvka"><i
                                        class="fa fa-facebook"></i></a></li>
                        <!--                        <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-linkedin"></i></a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/isotope.js"></script>
<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>
    $(function () {
        var selectedClass = "";
        $("p").click(function () {
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("." + selectedClass).fadeOut();
            setTimeout(function () {
                $("." + selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);
        });
    });
</script>
</body>
</html>