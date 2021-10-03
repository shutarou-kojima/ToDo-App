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
        <input type="text" name="name" id="name" value="タスク名" required>
      </td>
    </tr>
    <tr>
      <td class="label">
        <label for="description">内容</label>
      </td>
      <td class="input">
        <input type="textarea" name="description" id="description" value="内容だよ～">
      </td>
    </tr>
    <tr>
      <td class="label">
        <label for="category">カテゴリ</label>
      </td>
      <td class="input">
        <select name="category" id="category" required>
        <option value="1" selected>カテゴリ１</option>
        <option value="2">カテゴリ２</option>
        <option value="3">カテゴリ３</option>
      </select>
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
        <input type="radio" name="status" id="status" value="1" checked>未着手
        <input type="radio" name="status" id="status" value="2">着手
        <input type="radio" name="status" id="status" value="9">完了
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