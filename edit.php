<!DOCTYPE html>
<?php
    session_start();
?>
<html >
<head>
    <title>Cập nhật đề thi</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link href="css/line.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <script src="jquery.js" type="text/javascript"></script>
    <link href="css/reset.css" rel="stylesheet" type="text/css"/>
    <link href="css/form.css" rel="stylesheet" type="text/css"/>
</head>
<body>

    <?php
        if($_SESSION['userLogin']==FALSE){
            header("location:login.php");
            }
        
    ?>
    <div class="header" id="header-edit">
        <div class="container">
            <h1>Cập nhật đề</h1>
            <p>Scroll Down</p>
            <img src="Image/arrow-down_icon.png" width="50px" height="50px"></img>
        </div>
    </div>
    
    <div class="nav">
        <div class="container">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="https://elcit.ctu.edu.vn/">Elcit</a></li>
                <li><a href="http://www.ctu.edu.vn">CTU</a></li>
                <li><a href="https://www.google.com/">Google</a></li>
                <li id="logout"><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
        
    <div class="main">
        <div class="container">
            
            <!-------------FORM ADD - START --------->
            <div class="box" id="box-edit">
                        
                    <!-- Noi dung list de thi-->
                    <div class="content-box">
                        <!--=========================Menu taskbar thêm xoa cap nhat-->
                        <div class="nav">
                            <div class="container" id="edit">
                                <ul>
                                    <li><a href="add.php">Thêm</a></li>
                                    
                                    <li><a href="delete.php">Xóa</a></li>
                                    
                                    <li><a href="update.php">Cập nhật</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                    
            </div>
            <!-------------FORM ADD - START --------->
        </div>
    </div>
    
    <div class="jumbotron">
        <div class="container">
            <p></p>
        </div>
    </div>
    
    
    <div class="footer">
        <div class="container">
            <p></p>
        </div>
    </div>
           
    

        
    

    



</body>
</html>


