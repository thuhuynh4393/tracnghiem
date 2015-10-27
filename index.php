<!DOCTYPE html>
<?php
session_start();
?>
<html>
  <head>
      <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>    
        <link href="css/reset.css" rel="stylesheet" type="text/css"/>
        <title>Trang chủ</title>
  </head>
  
  <body>
      
    <div class="header">
      <div class="container">
            <h1>Quiz C/C++</h1>	
            <p>TEST KIẾN THỨC CỦA BẠN NGAY BÂY GIỜ</p>
            <a class="btn" href="quiz.php">Starts</a>
      </div>
    </div>

    <div class="nav">
      <div class="container">
            <ul>
                <li><a href="index.php" class="active">Trang chủ</a></li>
                <?php
                    if(isset($_SESSION['userLogin']) && $_SESSION['userLogin']==TRUE){
                        echo "<li><a href='edit.php'>Edit</a></li>";
                    }
                ?>
                <li><a href="https://elcit.ctu.edu.vn/">Elcit</a></li>
                <li><a href="http://www.ctu.edu.vn">CTU</a></li>
                <li><a href="https://www.google.com/">Google</a></li>
            </ul>
      </div>
    </div>

    <div class="main">
      <div class="container">
        
            <img src="Image/programming_c.png">

            <h2>Giới thiệu Ngôn ngữ lập trình C</h2>
            <p>Ngôn ngữ lập trình C &#500; là một ngôn ngữ mệnh lệnh được phát 
                triển từ đầu thập niên 1970 bởi Dennis Ritchie để dùng 
                trong hệ điều hành UNIX. Từ đó, ngôn ngữ này đã lan rộng ra 
                nhiều hệ điều hành khác và trở thành một những ngôn ngữ phổ 
                dụng nhất. C là ngôn ngữ rất có hiệu quả và được ưa chuộng 
                nhất để viết các phần mềm hệ thống, mặc dù nó cũng được dùng 
                cho việc viết các ứng dụng. Ngoài ra, C cũng thường được dùng làm phương tiện giảng dạy 
                trong khoa học máy tính mặc dù ngôn ngữ này không được thiết 
                kế dành cho người nhập môn.</p>
            <h2>Giới thiệu trang web</h2>
            <p>Với việc đưa ngôn ngữ lập trình C vào giảng dạy. Các bạn sinh viên cần được test về kiến thức của mình
            để có thể kiểm tra tự đánh giá và củng cố kiến thức. Nên trang web này cung cấp nguồn câu hỏi trắc nghiệm cho 
            các bạn</p>
      </div>
    </div>

      <div class="jumbotron">
          <div class="container">
                <?php
                    if(isset($_SESSION['userLogin']) && $_SESSION['userLogin']==TRUE){
                        
                        echo "<h2 style='margin-bottom: 25px;'>Logout</h2>";
                        echo "<p style='margin-bottom: 25px;'>Đăng xuất</p>";
                        echo "<a class='btn' href='logout.php'>Logout</a>";
                    }  else {
                        echo "<h2 style='margin-bottom: 25px;'>Login</h2>";
                        echo "<p style='margin-bottom: 25px;'>Để cập nhật đề thi vui lòng đăng nhâp</p>";
                        echo "<a class='btn' href='login.php'>Đăng nhập</a>";
                        
                    }
                ?>
          </div>
      </div>
      
      <div class="footer">
          <div class="container">
              <p>Thu Huynh</p>
          </div>
      </div>
      
  </body>
</html>

