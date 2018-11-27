<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "sqladmin";
$mysql_database = "todo";
$prefix = "";
$link = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $link) or die("Could not select database");
?>
