<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php
    session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Thông Tin Cán Bộ</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script src="jquery.js" type="text/javascript"></script>
</head>
<body>

<div id="top_background">

<div class="main_container">

	<div class="top_bar">
		<ul class="login">
                    <li><a href="thongtincb.php">Hồ sơ |</a></li>
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

</div>
    
<!--=========================div body chứa nội dung-->
<div class="body">
    <div class="info_cb">
        <p>Thông tin cán bộ</p>
        <table class="info_table" >
            <tr><td>Mã số cán bộ</td><td>Cb0001</td></tr>
            <tr><td>Họ tên</td><td>Nguyễn Văn A</td></tr>
            <tr><td>Bộ môn</td><td>Công nghệ thông tin</td></tr>
            <tr><td>Khoa</td><td>Công nghệ thông tin</td></tr>
            <tr><td>Email</td><td>gahoegh@gahie.com</td></tr>
            <tr><td>Số điện thoại</td><td>09553523958</td></tr>
            <tr><td>Ghi chú</td><td>0uuuuuuuuuuuuuuuu</td></tr>
        </table>
        
        
    </div>
</div>
    
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
<div class="footer">

</div>

</body>
</html>


