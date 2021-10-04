<?php

// 受け取って

// クエリ処理して

// リダイレクト

if (isset($_POST['category_name'])) {
  $cat = $_POST['category_name'];

  header('Location: ../categoryList/?stat=created&cat=' .$cat);
} else {
  header('Location: ../categoryList/?stat=error');
}

