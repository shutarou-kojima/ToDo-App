<?php
$css = "./sandbox.css";
// $js = "./script.js";
$title = "サンドボックスのページ";
$h1 = "サンドボックス";
$nav = "<button>ボタン</button>";

require_once '/MAMP/htdocs/todo-app/common/db.php';

require_once '/MAMP/htdocs/todo-app/common/header.php';
?>



<p>テキスト<br>テキストテキスト</p>
<div class="form">
  <form method="post" action="sandbox.php">
    送信するデータ:<input type="text" name="send_name" id="name" required>
    <input type="submit" class="btn" value="送信">
  </form>
</div>
<div class="receive">
  <?php
  if (!empty($_POST)) {
    print_r($_POST);
  }
  ?>
</div>


<?php

// インサートのテスト
// $new_params = [
//   "name"=> "新しいタスク".mt_rand(),
//   "description" => "新しいタスクの説明文",
//   "state" => "1",
//   "category" => "2",
//   "due_date" => "2021-10-5"
// ];
// insert("tasks", $new_params);

// insert("categories", ["name" => "新しいカテゴリ"]);


// アップデートのテスト
// $update_params = [
//   "name"=> "新しいタスク".mt_rand(),
//   "description" => "新しいタスクの説明文",
//   "state" => "3",
//   "category" => "2",
//   "due_date" => "2021-10-5",
//   "id" => "5"
// ];
// update("tasks", $update_params);

// jsコンソールに一覧出力
$table = "tasks";
// $table = "categories";
dumper(select("SELECT * FROM " . $table));


// echo 'arg: ' . isset($css) ."<br />\n";
// echo 'func: ' . function_exists('select') ."<br />\n";

// 既存の関数名チェック
// $defFunc = get_defined_functions();
// print_r($defFunc);


require_once '/MAMP/htdocs/todo-app/common/footer.php';
