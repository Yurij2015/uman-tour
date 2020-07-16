<?php
if ($_POST) {
    $sitename = $_POST['sitename'];
    $footer = $_POST['footer'];
    $phone = $_POST['phone'];
    $keywords = $_POST['keywords'];
    $description = $_POST['description'];
    $sitepage = $_POST['sitepage'];
    $id = $_POST['id'];
    if (!empty($sitename)) {
        require_once("../RedBeanPHP5_4_2/rb.php");
        require_once ("DbConnect.php");
        $sitedata = R::load('sitedata', $id);
        $sitedata->sitename = $sitename;
        $sitedata->footer = $footer;
        $sitedata->phone = $phone;
        $sitedata->keywords = $keywords;
        $sitedata->description = $description;
        $sitedata->page = $sitepage;
        R::store($sitedata);
        header('location: /admin/sitedata.php?msg=Запис успішно оновлено!');
    }
}
