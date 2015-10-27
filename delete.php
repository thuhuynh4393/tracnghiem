<!DOCTYPE html>
<?php
    session_start();
?>
<html >
<head>
    <title>Xóa Câu Hỏi</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link href="css/line.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <script src="jquery.js" type="text/javascript"></script>
    <link href="css/reset.css" rel="stylesheet" type="text/css"/>
    <link href="css/form.css" rel="stylesheet" type="text/css"/>
    <script src="js/alert.js" type="text/javascript"></script>
</head>
<body>

    <?php
        if($_SESSION['userLogin']==FALSE){
            header("location:login.php");
            }
        
    ?>
    <div class="header" id="header-edit">
        <div class="container">
            <h1>Xóa câu hỏi</h1>
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
    <!-------------FORM DELETE - START --------->
        <div class="box" id="box-delete">
                    
                <!-- Noi dung list de thi-->
                <div class="content-box">
                    <!--=========================Menu taskbar thêm xoa cap nhat-->
                    <div class="nav">
                        <div class="container">
                            <ul>
                                <li><a href="add.php">Thêm</a></li>
                                
                                <li><a href="delete.php">Xóa</a></li>
                                
                                <li><a href="update.php">Cập nhật</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- delete câu hỏi-->
                    <div id="delete">
                        <?php
                            require_once './connect.php';
                            $query_del="SELECT cauhoi.macauhoi,cauhoi.noidungcauhoi,traloi.noidung "
                                        . "FROM cauhoi,dapan,traloi "
                                        . "WHERE cauhoi.macauhoi=dapan.macauhoi and "
                                        . "dapan.matraloi=traloi.matraloi and cauhoi.macauhoi=traloi.macauhoi ";
                            $result_del= mysqli_query($conn, $query_del) or die("SQL DELETE.php ERROR");
                            while ($row = mysqli_fetch_array($result_del)) {
                                echo "<div class='del-row'>";
                                
                                        echo "<div class='id'>";
                                            echo $row['macauhoi'];
                                            echo "<input type='hidden' name='del-id' value=".$row['macauhoi']."></input>";
                                        echo "</div>";

                                        echo "<div class='content'>";
                                            echo "<pre>";
                                                echo $row['noidungcauhoi'];
                                            echo "</pre>";
                                        echo "</div>";

                                        echo "<div class='ans'>";
                                            echo "<pre>";
                                                echo "<p>Đáp Án:</p> ".$row['noidung'];
                                            echo "</pre>";
                                        echo "</div>";
                                        
                                        echo "<a class='btn' onclick='return confirmDelete()' "
                                                . "href='del-action.php?del_id=".$row['macauhoi']."' >Xóa";
                                        echo "</a>";
                                        
                                echo "</div>";
                            }
                        ?>
                        
                    </div>
                    
                </div>
                
        </div>
<!-------------FORM ADD - START --------->
        
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


    

<!--<div class="footer-end"></div>-->

</body>
</html>


