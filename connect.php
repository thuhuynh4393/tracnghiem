
<?php
require_once './connection.php';
$conn = mysqli_connect($host, $username, $password)  or die("Không kết nối đc");
mysqli_set_charset($conn,"utf8");
mysqli_select_db($conn, $database) or dir("Khong chon dc db" . mysqli_error());
