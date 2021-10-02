<!DOCTYPE html>
<html lang='ja'>
<head>
  <meta charset='utf-8'>
  <link type='text/css' rel='stylesheet' href='/todo-app/common/sanitize.css' />
  
  <?php
    if(isset($css))
    {
      echo "<link type='text/css' rel='stylesheet' href='$css' />";
    }
  ?>
  <?php
    if(isset($js))
    {
      echo "<script type='text/javascript' src='$js'></script>";
    }
  ?>
  <title><? echo $title; ?></title>
</head>

<body>
  <header>
    <h1><?php echo $h1 ?></h1>
    <nav>
      <?php echo $nav ?>
    </nav>
  </header>
  <main>
    