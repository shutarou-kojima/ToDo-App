<?php


// エラー発生用
// $user = "hogehoge";

function select($sql){
  try {
  require_once '/MAMP/db_config.php';
  $dbh = new PDO('mysql:host=localhost;dbname=todoapp;charset=utf8', $user, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM tasks";
  $stmt = $dbh->query($sql);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $dbh = null;
} catch (Exception $e) {
  // $errMSG = htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8');
  $result = $e->getMessage();
  die();
}
return $result;
}


function dumper($data){
echo '<script>';
echo 'window.onload = function() {';
echo 'let data = ' . json_encode($data) . ';';
echo 'console.table(data);';
echo '}';
echo '</script>';
}