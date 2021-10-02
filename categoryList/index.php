<?php
  $css = "./style.css";
  // $js = "./script.js";
  $title = "カテゴリ管理画面 - ToDoメモ";
  $h1 = "カテゴリ一覧";
  $nav = "<a href='../taskList' class='button'>戻る</a>";

  require_once '/MAMP/htdocs/todo-app/common/header.php';
  
  // main start
  ?>
  
  <ul class="category_list">
  <?php
  require_once "../common/db.php"
  ?>
  
  <li class="category">
      
    </li>
  </ul>
  
  <?php
  // main end
  
  require_once '/MAMP/htdocs/todo-app/common/footer.php';
    
    
    // require_once '/MAMP/htdocs/todo-app/common/db.php';