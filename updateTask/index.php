<?php
$css = "./style.css";
// $js = "./script.js";
$title = "タスク編集画面 - ToDoメモ";
$h1 = "タスク編集";
$nav = "";


require_once '/MAMP/htdocs/todo-app/common/header.php';

require_once '/MAMP/htdocs/todo-app/common/db.php';
$task = select("SELECT * FROM tasks WHERE id =" . $_GET['id'])[0];

// main start
?>

<form method="post" action="updateTask.php">
  <table>
    <tr>
      <td class="label">
        <label for="name">タスク名称</label>
      </td>
      <td class="input">
        <input type="text" name="name" id="name" value="<?php echo $task['name']; ?>" required>
      </td>
    </tr>
    <tr>
      <td class="label">
        <label for="description">内容</label>
      </td>
      <td class="input">
        <input type="textarea" name="description" id="description" value="<?php echo $task['description']; ?>">
      </td>
    </tr>
    <tr>
      <td class="label">
        <label for="category">カテゴリ</label>
      </td>
      <td class="input">
        <select name="category" id="category" required>
          <?php
          $categories = select("SELECT * FROM categories");
          for ($i = 0; $i < count($categories); $i++) {
            $cat = $categories[$i];
            echo "<option value='" . $cat['id'] . "'";
            if ($task['category'] == $cat['id']) {
              echo " selected";
            }
            echo ">" . $cat['name'] . "</option>\n";
          }
          ?>
        </select>
      </td>
    </tr>
    <tr>
      <td class="label">
        <label for="date">期日</label>
      </td>
      <td class="input">
        <input type="date" name="due_date" id="date" value="<?php echo $task['due_date']; ?>" required>
      </td>
    </tr>
    <tr>
      <td class="label">
        <label for="status">状況</label>
      </td>
      <td class="input">
        <input type="radio" name="status" id="status" value="1" <?php if ($task['state'] == 1) {
                                                                  echo "checked";
                                                                } ?>>未着手
        <input type="radio" name="status" id="status" value="2" <?php if ($task['state'] == 2) {
                                                                  echo "checked";
                                                                } ?>>着手
        <input type="radio" name="status" id="status" value="9" <?php if ($task['state'] == 9) {
                                                                  echo "checked";
                                                                } ?>>完了
      </td>
    </tr>
    <tr>
      <td class="label">
        <a href="../taskList" class="btn">戻る</a>
      </td>
      <td class="input">
        <input type="submit" class="btn" value="保存">
      </td>
    </tr>
  </table>
</form>


<?php
// main end

require_once '/MAMP/htdocs/todo-app/common/footer.php';