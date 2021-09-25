<?php

function templateHTML($title, $h1, $nav, $main)
{
  echo
"<!DOCTYPE html>
<html lang='ja'>
<head>
  <meta charset='utf-8'>
  <title>" . $title . "</title>
</head>

<body>
  <header>
    <h1>" . $h1 . "</h1>
    <nav>";
      $nav();
      echo "
    </nav>
  </header>
  <main>";
    $main();
    echo "
  </main>
</body>
</html>";
}
