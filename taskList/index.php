<?php
  $css = "./style.css";
  $js = "./script.js";
  $title = "タスク一覧画面 - ToDoメモ";
  $h1 = "タスク一覧";
  $nav = "<a href='../createTask' class='btn'>タスク追加</a>\n";
  $nav .= "<a href='../categoryList' class='btn'>カテゴリ</a>\n";
  require_once '/MAMP/htdocs/todo-app/common/header.php';
  
  // main start
  ?>

  <ul class='category_list'>
  <li class='category'>
    買わなきゃいけない物
    <ul class='task_list'>
      <li class='task' id='task1'>
        <p class='name'>テレビ</p>
        <p class='state'>状況：未着手</p>
        <p class='due_date'>期日：2021.8.9</p>
        <p class='description'>内容：40インチ以上のテレビ買う</p>
      </li>
    </ul>
  </li>
  <li class='category'>
    用事
    <ul class='task_list'>
      
    </ul>
  </li>

</ul>
  
  <?php
  // main end

  require_once '/MAMP/htdocs/todo-app/common/footer.php';
  
  
  // require_once '/MAMP/htdocs/todo-app/common/db.php';
