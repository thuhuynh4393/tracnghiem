<?php
// Start the session
session_start();
?>
<html>
<head>
    <title>Check Result</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/reset.css" rel="stylesheet" type="text/css"/>
    <link href="css/form.css" rel="stylesheet" type="text/css"/>
    <link href="css/line.css" rel="stylesheet" type="text/css"/>
    <script src="js/time.js" type="text/javascript"></script>
</head>
<body>

    
    <!-- LOGO HEADER - Start-->
    
    <div id="top_background">

        <div class="main_container">

            <div class="top_bar">
                    <!--Background Login-->
                    <ul class="login">
                        <li><a href="dangnhapCB.php">Đăng nhập |</a></li>
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
        <div class="tinhdiem">
            <div class="tinhdiem-content">
                <?php
                    require_once './connect.php';


                    $right_check= array();
                    $cauhoi_check = array();
                    // lấy câu hỏi và câu trả lời của thí sinh
                    foreach ($_SESSION["your_answer"] as $key => $value) {
                        $cauhoi_check[$key]=$value;
                    }
                    //print_r($cauhoi_check);
                    foreach ($_SESSION["right_answer"] as $key => $value) {
                        $right_check[$key]=$value;
                    }
                    //print_r($right_check);

                    // In câu hỏi, câu trả lời, và đúng hoặc sai
                    foreach ($cauhoi_check as $key => $value) {
                        $query_check="SELECT noidungcauhoi, noidung FROM cauhoi,traloi "
                                . "WHERE cauhoi.macauhoi =".$key." and matraloi='".$value."'"; 

                        $result_check=  mysql_query($query_check,$conn) or die("LOI TRUY van CHeck");

                        //HIển thị trong box
                        echo "<div class='box' id='box-result'>";

                            echo "<div class='header-box'><div class='tr'><div class='tc'></div></div></div>";

                            echo "<div class='content-box'>";


                                while ($row_check=  mysql_fetch_array($result_check)){
                                    if(count($right_check)==0) {
                                        $comment_answer = "SAI";
                                    }  elseif(array_key_exists($key, $right_check)) {
                                        $comment_answer = "Đúng";
                                    }  else {
                                        $comment_answer = "Sai";
                                    }

                                    echo "<span class='result-question'>Câu hỏi: ".$row_check['noidungcauhoi']."</span>";

                                    echo "<span class='result-answer'>Câu trả lời của bạn: ".$row_check['noidung']."</span>";

                                    echo "<span class='result-comment'>Kết quả: ".$comment_answer."</span>";                     


                                }

                            echo "</div>";

                            echo "<div class='footer-box'><div class='br'><div class='bc'></div></div></div>";
                        echo "</div>";
                    }
                 
                    
                   
                   
                ?>
            </div>
    </div>
    </div>
    <!-- NOI DUNG - END-->


    
    

</body>
</html>