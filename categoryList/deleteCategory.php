<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  header('Location: ../categoryList/?stat=ok&id=' . $id);
} else {
  header('Location: ../categoryList/?stat=error');
}
