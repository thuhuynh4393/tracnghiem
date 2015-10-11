<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php
    session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
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

<div class="delete">
        <div id="top_background">

            <div class="main_container">

                    <div class="top_bar">
                            <ul class="login">
                                <li><a href="logout.php">Đăng xuất</a></li>
                            </ul>
                    </div>

                    <div class="header">
                            <div class="logo">
                                <h1><a href="index.php">Thi Trắc nghiệm Lập Trình Căn Bản</a></h1>
                            </div>

                            <ul class="navigation">
                                <li><a href="index.php">Trang chủ</a></li>
                                    <li><a href="http://elcit.ctu.edu.vn/">Elcit</a></li>
                                    <li><a href="http://www.ctu.edu.vn/">CTU</a></li>
                                    <li><a href="https://www.google.com/">Google</a></li>
                            </ul>
                    </div>  
            </div>
            

        </div>
    
    <div class="clr"></div>
    
<!-------------FORM DELETE - START --------->
        <div class="box" id="box-delete">
                    <!-- tạo góc bo tròn cho box login-->
                <div class="header-box"><div class="tr"><div class="tc"></div></div></div>
                <!-- Noi dung list de thi-->
                <div class="content-box">
                    <!--=========================Menu taskbar thêm xoa cap nhat-->
                    <div class="task-bar">
                        <div class="content">
                            <ul>
                                <li><a href="add.php">Thêm</a></li>
                                <li class="line-w-45"></li>
                                <li><a href="delete.php">Xóa</a></li>
                                <li class="line-w-45"></li>
                                <li><a href="#">Cập nhật</a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- delete câu hỏi-->
                    <div id="delete">
                        
                            <?php
                                require_once './function.php';
                                $query_del="SELECT cauhoi.macauhoi,cauhoi.noidungcauhoi,traloi.noidung "
                                        . "FROM cauhoi,dapan,traloi "
                                        . "WHERE cauhoi.macauhoi=dapan.macauhoi and dapan.matraloi=traloi.matraloi  ";
                                $result_del=  getData($query_del);
                                while ($row = mysql_fetch_array($result_del)) {
                                    echo "<div class='del-row'>";
                                        echo "<span class='id'>";
                                            echo $row['macauhoi'];
                                            
                                        echo "</span>";

                                        echo "<span class='content'>";
                                            echo $row['noidungcauhoi'];
                                        echo "</span>";

                                        echo "<span class='ans'>";
                                            echo "Đáp Án: ".$row['noidung'];
                                        echo "</span>";
                                        
                                        echo "<div class='btn-del'>";
                                            echo "<a class='del'  onclick='confirmDelete();'>Xóa</a>";
                                        echo "</div>";
                                    echo "</div>";
                                }
                            ?>
                        
                    </div>
                    
                </div>
                <div class="footer-box"><div class="br"><div class="bc"></div></div></div>
        </div>
<!-------------FORM ADD - START --------->



    

<!--<div class="footer-end"></div>-->

</body>
</html>


