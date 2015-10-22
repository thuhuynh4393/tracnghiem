<?php
           session_start();
         


           
           require_once './function.php';
           
           
           $_SESSION['userLogin']=FALSE;
           //$_SESSION['loginErr']="";
            //------------------------------------
           $user=$_POST['username'];
           $pass=$_POST['password'];
           
           echo "IN TEST USER PASS";
           echo $pass;
           echo $user;
           //echo md5($pass);
           
           $query_login = "Select * From canbo where mcb='".$user."' and pass='".$pass."'";
           //echo "<br>".$query_login;
           $result_login = getData($query_login);
           $row_login = mysql_fetch_array($result_login);
           
           $rowcount=  mysql_num_rows($result_login);
           //echo $rowcount ;
           
           if($rowcount==0){
               header("location:login.php");
               $_SESSION['userLogin']=FALSE;
               $_SESSION['loginErr']="Thông tin đăng nhập sai";
           }else {
               $_SESSION['userLogin']=TRUE;
               header("location:edit.php");
           }
            
           
    
    
    

    
    
  
   
    
    
    
    
   
    
    
    
    
    
