<?php
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "123");
define("DB", "reg_test_que");

$connection = @mysqli_connect(DBHOST, DBUSER, DBPASS, DB) or die("Нет соединения с БД");
?>
