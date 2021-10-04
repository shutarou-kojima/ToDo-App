<?php
require_once '/MAMP/db_config.php';

// エラー発生用
// $user = "hogehoge";

function select($sql)
{
  global $user, $password, $db, $host, $port;
  try {
    $dbh = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $sql = "SELECT * FROM tasks";
    $stmt = $dbh->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $dbh = null;
    return $result;
  } catch (Exception $e) {
    $errMSG = htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8');

    // リリース時に変更
    // エラーメッセージはログに書き込む事。
    // クライアントには、エラーページへの遷移を。
    print_r($errMSG);
    die();
  }
}


function dumper($data)
{
  echo '<script>';
  echo 'window.onload = function() {';
  echo 'let data = ' . json_encode($data) . ';';
  echo 'console.table(data);';
  echo '}';
  echo '</script>';
}
