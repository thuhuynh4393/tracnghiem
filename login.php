<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php
    session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Trang chủ</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/reset.css" rel="stylesheet" type="text/css"/>
    <link href="css/form.css" rel="stylesheet" type="text/css"/>
    <link href="css/slider.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-1.10.0.min.js" type="text/javascript"></script>
    <script src="js/slider.js" type="text/javascript"></script>
    <script src="js/login.js" type="text/javascript"></script>
</head>
<body>

    <div class="wrapper">
        <!-- LOGO HEADER - Start-->
        <div id="top_background">

            <div class="main_container">

                <div class="top_bar">
                    <!--Background Login
                    <ul class="login">
                        <li><a href="dangnhapCB.php">Đăng nhập |</a></li>
                            <li><a href="#">Đăng ký</a></li>
                    </ul>
                    -->
                </div>

                <div class="header">
                    <!--Logo Thi TNLTCB-->
                    <div class="logo">
                            <h1><a href="#">Thi Trắc nghiệm Lập Trình Căn Bản</a></h1>
                    </div>

                    <!--Menu-->
                    <ul class="navigation">
                        <li><a href="index.php">Trang chủ</a></li>
                            <li><a href="http://elcit.ctu.edu.vn/">Elcit</a></li>
                            <li><a href="http://www.ctu.edu.vn/">CTU</a></li>
                            <li><a href="https://www.google.com/">Google</a></li>
                    </ul>

                </div>

            </div>


        </div>
        <!-- LOGO HEADER - END-->

        <!-- NOI DUNG - Start-->
        <div class="main">

            <!-- LEFT noi dung cot ben trai - START-->        
            <div class ="left">
                <!--    Box login - Ô phần login-->
                <div class="box" id="box-login">
                        <!-- tạo góc bo tròn cho box login-->
                    <div class="header-box"><div class="tr"><div class="tc"></div></div></div>
                    <div class="content-box">
                        <h3 class="title">Login</h3>
                        <form action="dangnhapCB.php" method="post" id="login-form" onsubmit="return checklog()">
                            <!-- User-->
                            <span><p>Username:</p></span>
                            <div class="row" style="margin-bottom: 11px">
                                <span class="button">                                    
                                    <span><input id="us" type="text" name="username"  /></span>                                    
                                </span>
                            </div>
                            <!-- PASSWORD-->
                            <span><p>Password:</p></span>
                            <div class="row" style="padding-bottom: 10px" >
                                <span class="button">                                    
                                    <span><input type="password" name="password"/></span>
                                </span>
                            </div>
                            <!--Thông báo sai thông tin đăng nhập-->
                            <span class="Error">
                                <p> 
                                    <?php
                                        if(isset($_SESSION['loginErr'])){
                                            echo "* ".$_SESSION['loginErr']; 
                                            unset($_SESSION['loginErr']);
                                        }
                                        
                                    ?>
                                </p>
                            </span>
                            <!-- SUBMIT-->
                            <div class="row" style="padding-bottom: 10px" >
                                <input type="submit" value="Login"/><br/>
                            </div>
                            
                            
                            <div style="margin-left: 11px"><p id="text"></p></div>
                        </form>
                    </div>
                    <div class="footer-box"><div class="br"><div class="bc"></div></div></div>
                </div>
            </div>        
            <!-- LEFT noi dung cot ben trai- END-->

            <!-- RIGHT noi dung cot ben phai-->
            <div class ="right">


                <div class="clr"></div>
            </div>     
            <!-- RIGHT noi dung cot ben phai- END-->






        </div>
        <!-- NOI DUNG - END-->

    </div>
       
        <?php
print_r($_SESSION);
?>
</body>
    
</html>

