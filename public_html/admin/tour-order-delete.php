<?php
require_once("../RedBeanPHP5_4_2/rb.php");
R::setup('mysql:host=mysql_sofievka;port=3306;dbname=db_sofievka', 'root', 'root3004917779');
try {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $tourorder = R::load('tourorders', $id);
        R::trash($tourorder);
        header('location: /admin/tour-orders.php?msg=Запись успешно удалена!');
    }
} catch (exception $e) {
    echo "Запись нельзя удалить! Ошибка удаления";
    echo "<br><a href = '/admin/tour-orders.php'>Назад</a>";
}
