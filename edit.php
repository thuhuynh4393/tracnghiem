<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php
    session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cập nhật đề thi</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link href="css/line.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script src="jquery.js" type="text/javascript"></script>
</head>
<body>
<div class="edit">
        <div id="top_background">

        <div class="main_container">

                <div class="top_bar">
                        <ul class="login">
                            <li><a href="thongtincb.php">Hồ sơ</a></li>
                            <li><a href="#">Đăng xuất</a></li>
                        </ul>
                </div>

                <div class="header">
                        <div class="logo">
                                <h1><a href="#">Thi Trắc nghiệm Lập Trình Căn Bản</a></h1>
                        </div>

                        <ul class="navigation">
                                <li><a href="#">Trang chủ</a></li>
                                <li><a href="http://elcit.ctu.edu.vn/">Elcit</a></li>
                                <li><a href="http://www.ctu.edu.vn/">CTU</a></li>
                                <li><a href="https://www.google.com/">Google</a></li>
                        </ul>
                </div>  
        </div>
            <!--=========================Menu taskbar thêm xoa cap nhat-->
            <div class="task-bar">
                <div class="content">
                    <ul>
                        <li><a href="#">Thêm</a></li>
                        <li class="line-w-45"></li>
                        <li><a href="#">Xóa</a></li>
                        <li class="line-w-45"></li>
                        <li><a href="#">Cập nhật</a></li>
                    </ul>
                </div>

            </div>

        </div>
<!-------------FORM ADD - START --------->
        <div class="box" id="box-add">
                    <!-- tạo góc bo tròn cho box login-->
                <div class="header-box"><div class="tr"><div class="tc"></div></div></div>
                <!-- Noi dung list de thi-->
                <div class="content-box">
                    <!-- Cot trái-->
                    <div class="left-col">
                        
                        <p>Mã câu hỏi</p><br/>
                        <p>Mức độ</p><br/>
                        <p>Nhóm</p><br/>
                        <p>Nội dung</p><br/>
                        <p>Đáp án</p><br/>
                    </div>
                    
                    <div class="line-h-475"></div>
                    
                    <!-- Cot phải-->
                    <div class="right-col">
                        <form action="" method="post" id="add">
                            Mã câu hỏi<input type="text" name="mch"></input><br/>
                            Mức độ
                            <select>
                                <option value="kho">Khó</option>
                                <option value="de">Dễ</option>
                            </select><br/>
                            Nhóm
                            <select>
                                <option value="thuattoan">Thuật toán</option>
                                <option value="lythuyet">Lý thuyết</option>
                            </select>
                            <br/>
                            Nội dung<textarea name="cauhoi" cols="130" rows="8"></textarea><br/>
                            Đáp án<textarea name="dapan" cols="130"  rows="12"></textarea>
                        </form>
                        
                        
                    </div>
                    
                </div>
                <div class="footer-box"><div class="br"><div class="bc"></div></div></div>
        </div>
<!-------------FORM ADD - START --------->

    
    
</div>
        
    

    

<div class="footer-end">

</div>

</body>
</html>


