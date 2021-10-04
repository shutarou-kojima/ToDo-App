<?php
$css = "./style.css";
// $js = "./script.js";
$title = "カテゴリ管理画面 - ToDoメモ";
$h1 = "カテゴリ一覧";
$nav = "<a href='../taskList' class='btn'>戻る</a>";

require_once '/MAMP/htdocs/todo-app/common/header.php';

require_once '/MAMP/htdocs/todo-app/common/db.php';
$categories = select("SELECT * FROM categories");

// main start
?>

<?php
if (!empty($_GET['stat'])) {
  switch ($_GET['stat']) {
    case 'error':
      echo "<p>エラー：処理が正常にできませんでした。</p>";
      break;
    case 'deleted':
      $id = $_GET['id'];
      echo "<p>カテゴリ[$id]を削除しました。</p>";
      break;
    case 'created':
      $cat = $_GET['cat'];
      echo "<p>カテゴリ[$cat]を追加しました。</p>";
      break;
    default:
      break;
  }
}
?>

<ul class="category_list">
  <?php
  for ($i = 0; $i < count($categories); $i++) {
    // id, name
    $cat = $categories[$i];
  ?>
    <li class='category' id='cat<?php echo $cat['id']; ?>'>
      <?php echo $cat['name']; ?>
      <a href="./deleteCategory.php?id=<?php echo $cat['id']; ?>" class="btn">削除</a>
    </li>
  <?php
  } // end of for(categories)
  ?>
</ul>

<form method="post" action="createCategory.php">
  <p>
    <input type="text" name="category_name" id="name" required>
    <input type="submit" class="btn" value="登録">
  </p>
  <p>
    <a href="../taskList" class="btn">戻る</a>
  </p>
</form>

<?php
// main end

require_once '/MAMP/htdocs/todo-app/common/footer.php';
