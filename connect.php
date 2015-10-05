
<?php
require_once './connection.php';
$conn = @mysql_connect("127.0.0.1", $username, $password)  or die("Không kết nối đc");
mysql_set_charset('utf8');
mysql_select_db($database, $conn) or dir("Khong chon dc db" . mysql_error());
