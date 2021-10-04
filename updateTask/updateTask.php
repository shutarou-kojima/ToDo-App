<?php
// $css = "./sandbox.css";
// $js = "./script.js";
$title = "テスト用";
$h1 = "テスト用ページ";
$nav = "";

require_once '/MAMP/htdocs/todo-app/common/header.php';
?>


<div class="receive">
  <?php
    if(!empty($_POST))
    {
      print_r($_POST);
    }
  ?>
</div>

<?php
require_once '/MAMP/htdocs/todo-app/common/db.php';
dumper($_POST);

update("tasks", $_POST);
require_once '/MAMP/htdocs/todo-app/common/footer.php';
