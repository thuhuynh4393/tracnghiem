<html>
<head>
    <title>Thi trắc nghiệm</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/reset.css" rel="stylesheet" type="text/css"/>
    <link href="css/form.css" rel="stylesheet" type="text/css"/>
    <link href="css/line.css" rel="stylesheet" type="text/css"/>
    <script src="js/time.js" type="text/javascript"></script>
    
</head>
<body>
<div class="tracnghiem">
    
    <!-- LOGO HEADER - Start-->
    
    <div id="top_background">

        <div class="main_container">

            <div class="top_bar">
                    <!--Background Login-->
                    <ul class="login">
                        <li><a href="login.php">Đăng nhập |</a></li>
                            <li><a href="#">Đăng ký</a></li>
                    </ul>
            </div>

            <div class="header">
                    <!--Logo Thi TNLTCB-->
                <div class="logo">
                    <h1><a href="index.php">Thi Trắc nghiệm Lập Trình Căn Bản</a></h1>
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
        <!-- LEFT noi dung cot ben trai-->
        <div class ="left-test">
            
            <!--    Box Category De Thi - danh sách đề thi -->
            <div class="box" id="box-category">
                    <!-- tạo góc bo tròn cho box login-->
                <div class="header-box"><div class="tr"><div class="tc"></div></div></div>
                <!-- Noi dung list de thi-->
                <div class="content-box">
                    <h3 class="title">Danh Sách Đề Thi</h3>
                    <ul>
                        <li><a href="#">Đề thi 1</a></li>
                        <li><a href="#">Đề thi 2</a></li>
                        <li><a href="#">Đề thi 3</a></li>
                        <li><a href="#">Đề thi 4</a></li>
                        <li><a href="#">Đề thi 5</a></li>
                        <li><a href="#">Đề thi 6</a></li>
                        <li><a href="#">Đề thi 7</a></li>
                        <li id="clock"></li>
                    </ul>
                       
                </div>
                <div class="footer-box"><div class="br"><div class="bc"></div></div></div>
            </div>
            
        </div>
        
        <!-- RIGHT noi dung cot ben phai chua noi dung cau hoi de thi-->
        <div class ="right">
            <!--    Box Noi dung de thi -->
                      
            <!-----------------------Test-------------->
            
            
                <div class='box' id='box-nddt'>        

                    <div class='header-box'><div class='tr'><div class='tc'></div></div></div>

                    <div class='content-box' >
                        <form action="#" method="post">
                            <span class='question'>     
                                Bạn Đã Sẵn Sàng ?<br/>
                            </span><br/>

                            <span class='answer'>
                                <input type="submit" name="starts" value="Starts"><br>  
                                
                            </span>
                        </form>
                    </div>

                   <div class='footer-box'><div class='br'><div class='bc'></div></div></div>
                </div>
            
            
            <!-----------------------vong lap php -------------->
    <?php
        require_once './connect.php';
        require_once './global.php';
            
        if(isset($_POST['starts'])){
            
                    //câu lệnh truy vấn
            $query = "(SELECT * FROM cauhoi WHERE mucdo=1 order by rand() limit 4) "
                    . "UNION (sELECT * FROM cauhoi WHERE mucdo=0 order by rand() limit 4)" ;
            
            $result = mysql_query($query,$conn) or die("Lỗi truy vấn" . mysql_error() . "<br/>");
            //$GLOBALS['cauhoi'];
            //$cauhoi = array();
            // Hiển thị câu hỏi trắc nghiệm
            echo "<form action='tinhdiem.php' method='post'>";
                while ($row = mysql_fetch_array($result)) {
                    
                        //array_push($cauhoi, $row['macauhoi']);
                        echo "<div class='box' id='box-nddt'>";

                           echo "<div class='header-box'><div class='tr'><div class='tc'></div></div></div>";

                                echo "<div class='content-box'>";
                                   echo "<span class='question'>     ";
                                         echo $row['noidungcauhoi'];
                                         //echo "<input type='hidden' name=>".$row['mucdo']."";
                                   echo "</span>";
                                   echo "<span class='answer'>";
                                            $query_ans = "SELECT * FROM traloi WHERE macauhoi=".$row['macauhoi'];
                                            $result_ans = mysql_query($query_ans,$conn) or die("Lỗi truy vấn" . mysql_error() . "<br/>");
                                            while($row_ans = mysql_fetch_array($result_ans)){
                                                echo "<span><input type='radio' name=".$row_ans['macauhoi']." value=".$row_ans['matraloi'].">".$row_ans['noidung']."</span>";                         
                                                
                                               }
                                   echo "</span>";
                                echo "</div>";
                           echo "<div class='footer-box'><div class='br'><div class='bc'></div></div></div>";
                        echo "</div>";

                        
                }
                echo "<input type='submit'  value='Nộp Bài'>";
            echo "</form>";
        }
            
            
            
    ?>
            
            
            <!-- xu ly cham diem-->
            
            
            
            
        </div>
        
        <!-- xoa cac float-->
        <div class="clr"></div>
           
        </div>
    
    </div>
    <!-- NOI DUNG - END-->

 
    
    

</body>
</html>