<?php
if ($_POST) {
    echo $_POST["name"];
    echo $_POST["phone"];
}

if ($_POST) {
    $name = trim(htmlspecialchars($_POST['name']));
    $phone = trim(htmlspecialchars($_POST['phone']));
    if (!empty($name)) {
        require_once("../RedBeanPHP5_4_2/rb.php");
        R::setup('mysql:host=mysql_sofievka;port=3306;dbname=db_sofievka', 'root', 'root3004917779');
        $markers = R::dispense('markers');
        $markers->name = $name;
        $markers->phone = $phone;
        R::store($markers);
        header('location: /admin/support-admin.php?msg=Запись успешно добавлена!');
    }
}