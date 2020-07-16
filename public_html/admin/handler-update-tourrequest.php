<?php
if ($_POST) {
    $name = trim(htmlspecialchars($_POST['name']));
    $phone = trim(htmlspecialchars($_POST['phone']));
    $dateoftour = $_POST['dateoftour'];
    $count = $_POST['count'];
    $id = $_POST['id'];
    if (!empty($name)) {
        require_once("../RedBeanPHP5_4_2/rb.php");
        R::setup('mysql:host=mysql_sofievka;port=3306;dbname=db_sofievka', 'root', 'root3004917779');
        $tourrequest = R::load('tourrequest', $id);
        $tourrequest->name = $name;
        $tourrequest->phone = $phone;
        $tourrequest->dateoftour = $dateoftour;
        $tourrequest->count = $count;
        R::store($tourrequest);
        header('location: /admin/tour-requests.php?msg=Запис успішно оновлено!');
    }
}
