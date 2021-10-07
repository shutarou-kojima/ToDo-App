<?php
function get_main()
{
  ob_start();
  require "./page1_body.php";
  return ob_get_clean();
}