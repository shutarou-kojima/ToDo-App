<?php
$css = "./style.css";
// $js = "./script.js";
$title = "カテゴリ管理画面 - ToDoメモ";
$h1 = "カテゴリ一覧";
$nav = "<a href='../taskList' class='button'>戻る</a>";

require_once '/MAMP/htdocs/todo-app/common/header.php';

// main start
?>

<?php
if (!empty($_GET['stat'])) {
  switch ($_GET['stat']) {
    case 'error':
      echo "<p>エラー：削除できませんでした。</p>";
      break;
    case 'ok':
      $id = $_GET['id'];
      echo "<p>カテゴリ[$id]を削除しました。<P>";
      break;
    default:
      break;
  }
}
?>

<ul class="category_list">
  <?php
  require_once "../common/db.php"
  ?>
  <li class="category">
    買わなきゃいけないもの
    <a href="./deleteCategory.php?id=<?php echo 1; ?> class='btn'">削除</a>
  </li>

</ul>



<?php
// main end

require_once '/MAMP/htdocs/todo-app/common/footer.php';
    
    
    // require_once '/MAMP/htdocs/todo-app/common/db.php';