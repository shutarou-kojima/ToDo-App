<?php
$css = "./sandbox.css";
// $js = "./script.js";
$title = "サンドボックスのページ";
$h1 = "サンドボックス";
$nav = "<button>ボタン</button>";

require_once '/MAMP/htdocs/todo-app/common/header.php';


?>

  <?php
  require_once '/MAMP/htdocs/todo-app/common/db.php';
  $tasks = select("SELECT * FROM tasks");
  $categories = select("SELECT * FROM categories");
  // INSERT INTO tasks (name, description state category due_date) VALUES ('タスクの名前','せつめい',2,2,'2021-10-5')

  for($i=0; $i<count( $categories ); $i++){
    $cat = $categories[$i];
    // id, name
    print_r($cat);
    echo $cat['id'];
    echo $br;
  }
  echo $br.$br;
  for($i=0; $i<count( $tasks ); $i++){
    // id, name, description, state, category, due_date
    print_r($tasks[$i]);
    echo $br;
  }
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

// require_once '/MAMP/htdocs/todo-app/common/db.php';
$tasks = select("SELECT * FROM tasks");
dumper($tasks);

// echo 'arg: ' . isset($css) ."<br />\n";
// echo 'func: ' . function_exists('select') ."<br />\n";

// 既存の関数名チェック
// $defFunc = get_defined_functions();
// print_r($defFunc);


require_once '/MAMP/htdocs/todo-app/common/footer.php';
