<!DOCTYPE html>
<?php
    session_start();
?>
<html>
<head>
    <title>Trang chủ</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/reset.css" rel="stylesheet" type="text/css"/>
    <link href="css/form.css" rel="stylesheet" type="text/css"/>
    <script src="js/login.js" type="text/javascript"></script>
</head>
<body>

    
<!-- LOGO HEADER - Start-->
    <div class="header">
        <div class="container">
            
            <form action="check-login.php" method="post" id="login-form" onsubmit="return checklog()">
                <h2 class="title">Login</h2>
                <!-- User-->
                
                <div class="row" >
                    <p>Username:</p>
                    <input id="us" type="text" name="username"  required/>                              
                </div>
                <!-- PASSWORD-->
                
                <div class="row" >
                    <p>Password:</p>
                    <input type="password" name="password" required/>
                </div>
                <!--Thông báo sai thông tin đăng nhập-->
                <div class="row" id="error">
                    <p> 
                        <?php
                            if(isset($_SESSION['loginErr'])){
                                echo "* ".$_SESSION['loginErr']; 
                                unset($_SESSION['loginErr']);
                            }
                        ?>
                    </p>
                </div>
                <!-- SUBMIT-->
                <div class="row" id="submit" style="padding-bottom: 10px" >
                    <input   type="submit" value="Login"/><br/>
                </div>
                <div style="margin-left: 11px"><p id="text"></p></div>
            </form>
        </div>
                            
    </div>

    
</body>
    
</html>

