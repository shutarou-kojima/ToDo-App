<?php
$css = "./sandbox.css";
// $js = "./script.js";
$title = "サンドボックスのページ";
$h1 = "サンドボックス";
$nav = "<button>ボタン</button>";

require_once '/MAMP/htdocs/todo-app/common/header.php';
?>

<p>テキスト<br>テキストテキスト</p>
<div class="form">
  <form method="post" action="sandbox.php">
    送信するデータ:<input type="text" name="send_name" id="name" required>
    <input type="submit" value="送信">
  </form>
</div>
<div class="receive">
  <?php
    if(!empty($_POST))
    {
      print_r($_POST);
    }
  ?>
</div>


<?php
require_once '/MAMP/htdocs/todo-app/common/footer.php';


require_once '/MAMP/htdocs/todo-app/common/db.php';
