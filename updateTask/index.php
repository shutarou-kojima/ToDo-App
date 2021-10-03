<?php
$css = "./style.css";
// $js = "./script.js";
$title = "タスク編集画面 - ToDoメモ";
$h1 = "タスク編集";
$nav = "";


require_once '/MAMP/htdocs/todo-app/common/header.php';

// main start
?>

<form method="post" action="updateTask.php">
  <table>
    <tr>
      <td class="label">
        <label for="name">タスク名称</label>
      </td>
      <td class="input">
        <input type="text" name="name" id="name" required>
      </td>
    </tr>
    <tr>
      <td class="label">
        <label for="description">内容</label>
      </td>
      <td class="input">
        <input type="textarea" name="description" id="description" required>
      </td>
    </tr>
    <tr>
      <td class="label">
        <label for="category">カテゴリ</label>
      </td>
      <td class="input">
        <input type="select" name="category" id="category" required>
      </td>
    </tr>
    <tr>
      <td class="label">
        <label for="date">期日</label>
      </td>
      <td class="input">
        <input type="date" name="due_date" id="date" required>
      </td>
    </tr>
    <tr>
      <td class="label">
        <label for="status">状況</label>
      </td>
      <td class="input">
        <input type="radio" name="status" id="status" required>
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
  
  
  // require_once '/MAMP/htdocs/todo-app/common/db.php';