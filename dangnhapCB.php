<?php
           session_start();
         


           
           require_once './function.php';
           
           
           $_SESSION['userLogin']=FALSE;
            //------------------------------------
           $user=$_POST['username'];
           $pass=$_POST['password'];
           
           echo "IN TEST USER PASS";
           //echo $pass;
           //echo $user;
           //echo md5($pass);
           
           $query_login = "Select * From canbo where mcb='".$user."' and pass='".$pass."'";
           //echo "<br>".$query_login;
           $result_login = getData($query_login);
           $row_login = mysql_fetch_array($result_login);
           //echo $row_login['hoten'] ;
           
           if(mysql_num_rows($row_login)==0){
               $_SESSION['userLogin']=TRUE;
               //echo "Đăng nhập không đúng<br>";
               header("location:edit.php");               
           }else {
               header("location:login.php");               
            }
                    
      

    
    
    
print_r($_SESSION);
?>
    
    
  
   
    
    
    
    
   
    
    
    
    
    
