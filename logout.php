<?php

/* 
 * Huynh Thi Cam Thu
 * Luan Van Thi Trac Nghiem Lap Trinh Can Ban  * 
 */
session_start();
if (isset($_SESSION['userLogin'])) {
    
    unset($_SESSION['userLogin']);
  
}  // trở về trang login
    header('location: index.php');
