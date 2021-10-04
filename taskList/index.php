<?php
$css = "./style.css";
$js = "./script.js";
$title = "タスク一覧画面 - ToDoメモ";
$h1 = "タスク一覧";
$nav = "<a href='../createTask' class='btn'>タスク追加</a>\n";
$nav .= "<a href='../categoryList' class='btn'>カテゴリ</a>\n";

require_once '/MAMP/htdocs/todo-app/common/db.php';

require_once '/MAMP/htdocs/todo-app/common/header.php';

// main start
?>

<ul class='category_list'>
  <?php
  $categories = select("SELECT * FROM categories");
  $tasks = select("SELECT * FROM tasks");
  $STATE = array(
    1 => "未着手",
    2 => "着手",
    9 => "完了"
  );

  for ($i = 0; $i < count($categories); $i++) {
    // id, name
    $cat = $categories[$i];
  ?>
    <li class='category' id='cat<?php echo $cat['id']; ?>'>
      <?php echo $cat['name']; ?>
      <ul class='task_list'>
        <?php
        for ($j = 0; $j < count($tasks); $j++) {
          // id, name, description, state, category, due_date
          $task = $tasks[$j];
          if ($cat['id'] == $task['category']) {
        ?>
            <li class='task' id='task<?php echo $task['id'] ?>'>
              <p class='name'><?php echo $task['name'] ?></p>
              <p class='state'>状況：<?php echo $STATE[$task['state']] ?></p>
              <p class='due_date'>期日：<?php echo $task['due_date'] ?></p>
              <p class='description'>内容：<?php echo $task['description'] ?></p>
            </li>
        <?php
          }
        } // end of for($tasks) 
        ?>
      </ul> <!-- end of ul.task_list -->
    </li> <!-- end of li.category -->
  <?php
  } // end of for($categories) 
  ?>

</ul>

<?php
// main end

require_once '/MAMP/htdocs/todo-app/common/footer.php';
  
  
  // require_once '/MAMP/htdocs/todo-app/common/db.php';
