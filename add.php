<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php
    session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Thêm Câu Hỏi</title>
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

<div class="add">
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
<!-------------FORM ADD - START --------->
        <div class="box" id="box-add">
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
                    <!-- Add câu hỏi-->
                    <div id="add">
                        <!-- Mã câu hỏi-->
                        <div class="row">
                            <p id="title">Mã câu hỏi</p><span><input type="text"></input></span>
                        </div>
                        <!-- Mức độ-->
                        <div class="row">
                            <p id="title">Mức độ</p>
                            <span>
                                <select>
                                    <option value="0">Khó</option>
                                    <option value="1">Dễ</option>
                                </select>
                            </span>
                        </div>
                        <!-- Chương-->
                        <div class="row">
                            <p id="title">Chương</p>
                            <span>
                                <select>
                                    <option value="1">Chương 1</option>
                                    <option value="2">Chương 2</option>
                                    <option value="3">Chương 3</option>
                                    <option value="4">Chương 4</option>
                                    <option value="5">Chương 5</option>
                                    <option value="6">Chương 6</option>
                                    <option value="7">Chương 7</option>
                                    <option value="8">Chương 8</option>
                                </select>
                            </span>
                        </div>
                        <!-- Nội dung câu hỏi-->
                        <div class="row">
                            <p id="title">Nội Dung Câu Hỏi</p>
                            <span><textarea id="question" ></textarea></span>
                        </div>
                        <!-- Nội dung câu trả lời -->
                        <div class="row">
                            <p id="title">Câu trả lời D</p>
                            <span><textarea id="question" ></textarea></span>
                        </div>
                        <!-- Nội dung câu trả lời -->
                        <div class="row">
                            <p id="title">Câu trả lời A</p>
                            <span><textarea id="question" ></textarea></span>
                        </div>
                        <!-- Nội dung câu trả lời -->
                        <div class="row">
                            <p id="title">Câu trả lời B</p>
                            <span><textarea id="question" ></textarea></span>
                        </div>
                        <!-- Nội dung câu trả lời -->
                        <div class="row">
                            <p id="title">Câu trả lời C</p>
                            <span><textarea id="question" ></textarea></span>
                        </div>
                        <!-- Mã Đáp Án-->
                        <div class="row">
                            <p id="title">Đáp Án</p>
                            <span>
                                <select>
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                    <option value="c">C</option>
                                    <option value="d">D</option>                                    
                                </select>
                            </span>
                        </div>
                        
                        
                    </div>
                    
                </div>
                <div class="footer-box"><div class="br"><div class="bc"></div></div></div>
        </div>
<!-------------FORM ADD - START --------->



    

<!--<div class="footer-end"></div>-->

</body>
</html>


