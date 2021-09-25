<?php
  require_once '/MAMP/htdocs/todo-app/template.php';
  $title = "サンドボックスのページ";
  $h1 = "サンドボックス";
  
  function nav()
  {
    echo "<button>ボタン</button>";
  }

  function main()
  {
    echo "<p>テキスト<br>テキストテキスト</p>";
  }

  templateHTML($title, $h1, "nav", "main");