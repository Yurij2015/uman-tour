<?php
if ($_POST) {
    $customername = trim(htmlspecialchars($_POST['customername']));
    $date = $_POST['date'];
    $place = trim(htmlspecialchars($_POST['place']));
    $birthdate = $_POST['birthdate'];
    $contact = $_POST['contact'];
    $age = $_POST['age'];
    $prepay = $_POST['prepay'];
    $canyontour = $_POST['canyontour'];
    $lunchcanyon = $_POST['lunchcanyon'];
    $entrancesofievka = $_POST['entrancesofievka'];
    $sofievkatour = $_POST['sofievkatour'];
    $fullplace = $_POST['fullplace'];
    $tourrequest = $_POST['tourrequest'];
    if (!empty($customername)) {
        require_once("../RedBeanPHP5_4_2/rb.php");
        require_once ("DbConnect.php");
        $tourorders = R::dispense('tourorders');
        $tourorders->customername = $customername;
        $tourorders->date = $date;
        $tourorders->place = $place;
        $tourorders->birthdate = $birthdate;
        $tourorders->contact = $contact;
        $tourorders->age = $age;
        $tourorders->prepay = $prepay;
        $tourorders->canyontour = $canyontour;
        $tourorders->lunchcanyon = $lunchcanyon;
        $tourorders->entrancesofievka = $entrancesofievka;
        $tourorders->sofievkatour = $sofievkatour;
        $tourorders->fullplace = $fullplace;
        $tourorders->tourrequest = $tourrequest;
        R::store($tourorders);
        header('location: /admin/tour-orders.php?msg=Запис успішно додано!');
    }
}
