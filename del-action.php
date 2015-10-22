<?php
session_start();
/* 
 * Huynh Thi Cam Thu
 * Luan Van Thi Trac Nghiem Lap Trinh Can Ban  * 
 */
require_once './function.php';
require_once './connect.php';
$del_id = $_POST['del-id'];
echo "<html>";
echo "<head>";
    echo "<script src='js/alert.js type='text/javascript'></script>";
echo "</head>";
echo "<body onload='confirmDelete();'";
    
echo "</body>";
echo "</html>";
//echo $del_id;
/*
$query_delete="DELETE cauhoi, dapan "
            . "FROM cauhoi INNER JOIN dapan "
            . "WHERE cauhoi.macauhoi = dapan.macauhoi "
            . "AND cauhoi.macauhoi=".$del_id;
    mysqli_query($conn, $query_delete);
echo "số hàng bị xóa: " . mysqli_affected_rows($conn);
 * 
 */