<?php
   
/* 
 * Huynh Thi Cam Thu
 * Luan Van Thi Trac Nghiem Lap Trinh Can Ban  * 
 */

function getData($query){
    require_once './connect.php';
    $result= mysqli_query($conn,$query) or die("LOI Câu lệnh " . mysql_error(). "<br/>");
    return $result;
}