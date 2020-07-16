<?php
require_once("../RedBeanPHP5_4_2/rb.php");
require_once ("DbConnect.php");
try {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $support= R::load('tourrequest', $id);
        R::trash($support);
        header('location: /admin/tour-requests.php?msg=Запись успешно удалена!');
    }
} catch (exception $e) {
    echo "Запись нельзя удалить! Ошибка удаления";
    echo "<br><a href = '/admin/tour-requests.php'>Назад</a>";
}
