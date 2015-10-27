<?php
session_start();
/* 
 * Huynh Thi Cam Thu
 * Luan Van Thi Trac Nghiem Lap Trinh Can Ban  * 
 */
    require_once './function.php';
    require_once './connect.php';
    $query="select * from cauhoi";
    $result=  mysqli_query($conn, $query) or die("Lỗi câu truy vấn del-action". mysqli_error() . "<br/>");
    $number_ques=mysqli_num_rows($result);
    if($number_ques>50){
        $del_id = $_GET['del_id'];
        $query_deleteDapan ="Delete From dapan Where macauhoi=".$del_id;
        $query_deleteTraloi ="Delete From traloi Where macauhoi=".$del_id;
        $query_deleteCauhoi ="Delete From cauhoi Where macauhoi=".$del_id;        
        
        if($conn->query($query_deleteDapan) === TRUE && 
            $conn->query($query_deleteTraloi) ===TRUE && 
             $conn->query($query_deleteCauhoi)===TRUE){
            echo "<script charset='UTF-8'> ";
                echo "alert('Xóa Thành công'); ";             
                echo "location.href='delete.php'; "; 
            echo" </script>";
        }  else {
            echo "<script charset='UTF-8'> ";
                echo "alert('Xóa Không Thành công'); ";             
                echo "location.href='delete.php'; "; 
            echo" </script>";

        }
    }else {
        echo "<script charset='UTF-8'> ";
                echo "alert('Số câu hỏi hiện tại là tối thiểu không thể xóa'); ";             
                echo "location.href='delete.php'; "; 
        echo" </script>";
    }