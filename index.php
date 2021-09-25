<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>MAMPのインストールデモ</title>
  </head>
  <body style="background: orange; color: white;">
    <?php

      echo 'MAMPのインストールからブラウザでの表示までできたぜ！';
      require_once '/MAMP/db_config.php';
      // $link = mysqli_init();
      // $success = mysqli_real_connect(
      //   $link,
      //   $host,
      //   $user,
      //   $password,
      //   $db,
      //   $port
      // );

      $dbh = new PDO('mysql:host=localhost;dbname=todoapp;charset=utf8', $user, $password);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM tasks";
      $stmt = $dbh->query($sql);
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      print_r($result);
      $dbh = null;
      echo 'test';
    ?>
  </body>
</html>