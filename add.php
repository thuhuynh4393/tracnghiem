<?php
    session_start();
?>
<!DOCTYPE html>
<html >
<head>
    <title>Thêm Câu Hỏi</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link href="css/line.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <script src="jquery.js" type="text/javascript"></script>
    <link href="css/reset.css" rel="stylesheet" type="text/css"/>
    <link href="css/form.css" rel="stylesheet" type="text/css"/>
    <script src="js/alert.js" type="text/javascript"></script>
</head>
<body onbeforeunload="return stay()">

    <?php
        if($_SESSION['userLogin']==FALSE){
            header("location:login.php");
            }
        
    ?>
    <div class="header" id="header-edit">
        <div class="container">
            <h1>Thêm câu hỏi</h1>
            <p>Scroll Down</p>
            <img src="Image/arrow-down_icon.png" width="50px" height="50px"></img>
        </div>
    </div>
    
    <div class="nav">
        <div class="container">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="#">Elcit</a></li>
                <li><a href="#">CTU</a></li>
                <li><a href="#">Google</a></li>
                <li id="logout"><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

        
    
    <div class="main">
    <!-------------FORM ADD - START --------->
        <div class="box" id="box-add">
                    
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
                    <!-- add câu hỏi-->
                    <div id="add">
                        <form id="add-form" action="add-action.php" method="post">
                            <!-- Mã câu hỏi-->
                            <div class="row">
                                <p id="title">Mã câu hỏi</p>
                                <span>
                                    <?php
                                        require_once './connect.php';
                                        $query_maxid="Select Max(macauhoi) As MaxId From cauhoi";
                                        $result=  mysqli_query($conn, $query_maxid) or die("Lỗi truy vấn MAX ID". mysqli_error() . "<br/>");
                                        $max =  mysqli_fetch_row($result); 
                                        $maxid = $max['0']+1;
                                        echo "<input class='id' type='text' disabled='disable' value=".$maxid.">";
                                        echo "<input type='hidden' name='id-ques' value=".$maxid.">";    
                                    ?>
                                </span>
                            </div>
                            <!-- Mức độ-->
                            <div class="row">
                                <p id="title">Mức độ</p>
                                <span>
                                    <select name="difficult" required>
                                        <option value="">---</option>
                                        <option value="1">Khó</option>
                                        <option value="0">Dễ</option>
                                    </select>
                                </span>
                            </div>
                            <!-- Chương-->
                            <div class="row">
                                <p id="title">Chương</p>
                                <span>
                                    <select name="chap" required>
                                        <option value="">---</option>
                                        <option value="1">Cú pháp</option>
                                        <option value="2">Khai báo biến</option>
                                        <option value="3">Kiểu dữ liệu</option>
                                        <option value="4">Nhập/Xuất</option>
                                        <option value="5">Thư viện Hàm</option>
                                        <option value="6">Định nghĩa hàm</option>
                                        <option value="7">Truyền tham số</option>
                                        <option value="8">Gọi hàm</option>
                                        <option value="9">Cấu trúc rẽ nhánh</option>
                                        <option value="10">Cấu trúc lặp </option>
                                        <option value="11">Đệ quy </option>
                                        <option value="12">Con trỏ</option>
                                        <option value="13">Mảng</option>
                                        <option value="14">Chuỗi </option>
                                        <option value="15">Tập tin </option>
                                        <option value="16">Kiểu dữ liệu cấu trúc </option>
                                        <option value="17">Cấp phát động vùng nhớ</option>
                                        <option value="18">Chuyển đổi kiểu </option>
                                        <option value="19">Toán tử</option>                                        
                                    </select>
                                </span>
                            </div>
                            <!-- Nội dung câu hỏi-->
                            <div class="row">
                                <p id="title">Nội Dung Câu Hỏi</p>
                                <span>
                                    <textarea name="question" class="question" required></textarea>
                                </span>
                            </div>
                            <!-- Nội dung câu trả lời -->
                            <div class="row">
                                <p id="title">Câu trả lời A</p>
                                <span>
                                    <textarea name="A" class="A" required></textarea>
                                </span>
                            </div>
                            <!-- Nội dung câu trả lời -->
                            <div class="row">
                                <p id="title">Câu trả lời B</p>
                                <span>
                                    <textarea name="B" class="B" required></textarea>
                                </span>
                            </div>
                            <!-- Nội dung câu trả lời -->
                            <div class="row">
                                <p id="title">Câu trả lời C</p>
                                <span>
                                    <textarea name="C" class="C" required></textarea>
                                </span>
                            </div>
                            <!-- Nội dung câu trả lời -->
                            <div class="row">
                                <p id="title">Câu trả lời D</p>
                                <span>
                                    <textarea name="D" class="D" required></textarea>
                                </span>
                            </div>
                            <!-- Mã Đáp Án-->
                            <div class="row">
                                <p id="title">Đáp Án</p>
                                <span>
                                    <input type="radio" name="answer" value="A" required>A
                                    <input type="radio" name="answer" value="B" required>B
                                    <input type="radio" name="answer" value="C" required>C
                                    <input type="radio" name="answer" value="D" required>D
                                </span>
                            </div>
                            <input class="btn" type="submit" name="add" value="Thêm">
                        </form>
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


