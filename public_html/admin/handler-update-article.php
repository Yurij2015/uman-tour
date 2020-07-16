<?php
if ($_POST) {
    $header = $_POST['header'];
    $subheader = $_POST['subheader'];
    $content = $_POST['content'];
    $id = $_POST['id'];
    if (!empty($header)) {
        require_once("../RedBeanPHP5_4_2/rb.php");
        require_once ("DbConnect.php");
        $support = R::load('article', $id);
        $support->header = $header;
        $support->subheader = $subheader;
        $support->content = $content;
        R::store($support);
        header('location: /admin/index.php?msg=Запись успешно обновлена!');
    }
}
