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

function insert($table, $params)
{
  global $user, $password, $db, $host, $port;
  try {
    $dbh = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    switch ($table) {
      case 'tasks':
        // 要バリデーション 状況：1,2,9
        $sql = "INSERT INTO tasks (name, description, state, category, due_date) VALUES (?,?,?,?,?)";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(1,      $params['name'],        PDO::PARAM_STR);
        $stmt->bindValue(2,      $params['description'], PDO::PARAM_STR);
        $stmt->bindValue(3, (int)$params['state'],       PDO::PARAM_INT);
        $stmt->bindValue(4, (int)$params['category'],    PDO::PARAM_INT);
        $stmt->bindValue(5,      $params['due_date'],    PDO::PARAM_STR);
        break;
      case 'categories':
        $sql = "INSERT INTO categories (name) VALUES (?)";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(1,      $params['name'],        PDO::PARAM_STR);
        break;
      default:
        return 'failure: table not exist.';
    }

    $stmt->execute();
    $dbh = null;
    return 'success';
  } catch (Exception $e) {
    $errMSG = htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8');

    // リリース時に変更
    // エラーメッセージはログに書き込む事。
    // クライアントには、エラーページへの遷移を。
    print_r($errMSG);
    die();
  }
}

function update($table, $params)
{
  global $user, $password, $db, $host, $port;
  try {
    $dbh = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    switch ($table) {
      case 'tasks':
        // 要バリデーション 状況：1,2,9

        $sql = "UPDATE tasks SET name = ?, description = ?, state = ?, category = ?, due_date = ? WHERE id = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(1,      $params['name'],        PDO::PARAM_STR);
        $stmt->bindValue(2,      $params['description'], PDO::PARAM_STR);
        $stmt->bindValue(3, (int)$params['state'],       PDO::PARAM_INT);
        $stmt->bindValue(4, (int)$params['category'],    PDO::PARAM_INT);
        $stmt->bindValue(5,      $params['due_date'],    PDO::PARAM_STR);
        $stmt->bindValue(6, (int)$params['id'],          PDO::PARAM_INT);
        break;
      case 'categories':
        $sql = "UPDATE categories SET name = ? WHERE id = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(1,      $params['name'],        PDO::PARAM_STR);
        $stmt->bindValue(2, (int)$params['id'],          PDO::PARAM_INT);
        break;
      default:
        return 'failure: table not exist.';
    }

    $stmt->execute();
    $dbh = null;
    return 'success';
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
