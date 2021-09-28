<?php
  require_once '/MAMP/htdocs/todo-app/common/template.php';
  $css = "<link rel='stylesheet' href='./style.css'>";
  // $js = "<script type='text/javascript' src='./script.js'></script>";
  $js = "";
  $title = "サンドボックスのページ";
  $h1 = "サンドボックス";
  $nav = "<button>ボタン</button>";
  $main = "<p>テキスト<br>テキストテキスト</p>";

  templateHTML($css, $js, $title, $h1, $nav, $main);