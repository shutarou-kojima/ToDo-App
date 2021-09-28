<?php

function templateHTML($css, $js, $title, $h1, $nav, $main)
{
  echo
"<!DOCTYPE html>
<html lang='ja'>
<head>
  <meta charset='utf-8'>
  <link type='text/css' rel='stylesheet' href='/todo-app/common/sanitize.css' />
  $css
  $js
  <title>$title</title>
</head>

<body>
  <header>
    <h1>$h1</h1>
    <nav>$nav</nav>
  </header>
  <main>$main</main>
</body>
</html>";
}
