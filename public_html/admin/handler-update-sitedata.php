<?php
//if (isset($_GET['id'])) {
//  $id = $_GET['id'];
//}
if ($_POST) {
  $header = $_POST['header'];
  $subheader = $_POST['subheader'];
  $content = $_POST['content'];
  $id = $_POST['id'];
  if (!empty($header)) {
    require_once("../RedBeanPHP5_4_2/rb.php");
    R::setup('mysql:host=mysql_sofievka;port=3306;dbname=db_sofievka', 'root', 'root3004917779');
    $support = R::load('article', $id);
    $support->header = $header;
    $support->subheader = $subheader;
    $support->content = $content;
    R::store($support);
    header('location: /admin/index.php?msg=Запись успешно обновлена!');
  }
}
