<?php

require_once '/MAMP/db_config.php';

// エラー発生用
// $user = "hogehoge";

try {
  $dbh = new PDO('mysql:host=localhost;dbname=todoapp;charset=utf8', $user, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM tasks";
  $stmt = $dbh->query($sql);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // print_r($result);

  echo '<script>';
  echo 'window.onload = function() {';
  echo 'alert("データベース接続 OK！");';
  echo 'console.log("タスク一覧");';
  echo 'let tasks = ' . json_encode($result) . ';';
  echo 'console.table(tasks);';

  $sql = "SELECT * FROM categories";
  $stmt = $dbh->query($sql);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // print_r($result);
  echo 'console.log("\n\nカテゴリ一覧");';
  echo 'let categories = ' . json_encode($result) . ';';
  echo 'console.table(categories);';
  echo '}';
  echo '</script>';

  $dbh = null;
} catch (Exception $e) {
  // $errMSG = htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8');
  $errMSG = $e->getMessage();

  echo '<script>window.onload = function() {alert("エラー発生！"); console.log("' . $errMSG . '");}</script>';
  die();
}
