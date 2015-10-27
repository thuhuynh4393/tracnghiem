<?php
// Start the session
session_start();
?>
<html>
<head>
    <title>Tính điểm</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/reset.css" rel="stylesheet" type="text/css"/>
    <link href="css/form.css" rel="stylesheet" type="text/css"/>
    <link href="css/line.css" rel="stylesheet" type="text/css"/>
    <script src="js/time.js" type="text/javascript"></script>
</head>
<body>

    
    <!-- LOGO HEADER - Start-->
    
   
    
    <!-- LOGO HEADER - END-->
    
    
    <!-- NOI DUNG - Start-->
    <div class="main">
        <div class="tinhdiem">
            <div class="tinhdiem-content">
                <?php
                
                    require_once './connect.php';
                    $cauhoi= array();//danh sách câu hỏi
                    $traloi = array();//ds câu trả lời của thí sinh
                    $dapan = array();//ds đáp án từ csdl
                    $wrong_chap = array();//ds câu trả lời sai
                    //
                    //thêm các câu trả lời của thí sinh vào traloi, và lấy danh sách câu hỏi                   
                    foreach ($_POST as $key => $value) {
                        $traloi[$key]=$value;
                        //array_push($cauhoi, $key);
                        $cauhoi[$key]=$key;
                    }                
                                        
                    //chuỗi câu hỏi lưu để dùng cho truy vấn csdl vd $string_ques ="(3,4,9,10,0)"
                    $string_ques ="(";            
                    foreach ($cauhoi as $key => $value) {
                        $string_ques = $string_ques.$value.",";
                    }
                    $string_ques=$string_ques."0)";
                    
                    //truy vấn và lấy dữ liệu
                   $query_dapan = "SELECT * FROM dapan WHERE macauhoi in ".$string_ques;
                   $result_dapan = mysqli_query($conn,$query_dapan) or die("Lỗi truy vấn Đáp án" . mysqli_error() . "<br/>");
                   while ($row_dapan = mysqli_fetch_array($result_dapan)) {
                       //thêm đáp án vào mảng $dapan
                       $dapan[$row_dapan['macauhoi']]=$row_dapan['matraloi'];
                   }
                   
                   //echo "tra loi";
                   //print_r($traloi);
                   //echo "dapan";
                   //print_r($dapan);
                    
                   //--- tính số câu đúng trên hai mang traloi va dapan,trả về là một mảng gồm câu giống nhau(đúng)
                   $result_match = array_intersect_assoc($traloi, $dapan);
                   //print_r($result_match);
                   
                   //gán biến session
                   $_SESSION["your_answer"]=$traloi;
                   $_SESSION["right_answer"]=$result_match;
                   
                   
                   
                   //--- tính số câu Sai trên hai mang traloi va dapan, trả về Mảng gồm các câu sai
                   $result_unmatch = array_diff_assoc($traloi, $dapan);
                   //echo "câu sai: ";
                   //print_r($result_unmatch);
                   
                   //chuỗi lưu câu hỏi sai lưu để dùng cho truy vấn csdl phần chap(chương) vd $wrong_ques ="(3,4,9,10,0)"
                    $wrong_ques ="(";            
                    foreach ($result_unmatch as $key => $value) {
                        $wrong_ques = $wrong_ques.$key.",";
                    }
                    $wrong_ques=$wrong_ques."0)";
                    
                    
                   //điểm,phần trăm
                   $diem =count($result_match);//điểm bằng số câu trả lời đúng
                   $sai=count($result_unmatch);
                   $percent = ($diem*100)/50;
                   $string_percent="Bạn đạt ".$percent."%";
                   
                   //lời nhận xét                   
                   if($diem<5){
                        $comment="Bạn nên học chăm chỉ";
                   }elseif ($diem>=5 && $diem<9) {
                        $comment="Bạn Cần cố gắng hơn";
                   }  else {
                        $comment="Bạn rất xuất sắc";
                   }
                   
                   //-----------khuyên phần nên học lại
                   //lấy chap sai
                   $query_chap="SELECT chap FROM cauhoi WHERE macauhoi in ".$wrong_ques;
                   $result_chap = mysqli_query($conn,$query_chap) or die("Lỗi query Chap") . mysqli_error();
                   while ($row_chap = mysqli_fetch_array($result_chap)) {
                       array_push($wrong_chap, $row_chap['chap']);
                    }
                   //echo "<br>WrONG chap:";
                   //print_r($wrong_chap);
                   //đếm số chap sai theo từng chap
                   $count_wrong_chap=array_count_values($wrong_chap);
                   //echo "<br>COUNT WrONG chap:";
                   //print_r($count_wrong_chap);
                   
                   //tính số chap sai nhiều nhất
                   if(empty($count_wrong_chap)){
                       $max_sp=0;
                       $chap_max="(0)";
                   }  else {
                       $max_sp=array(max($count_wrong_chap));
                       $chap = array_intersect($count_wrong_chap, $max_sp);
                   
                        //echo "<br>Chap sai nhiều nhất: ";
                        //print_r($chap);
                        $chap_max="(";
                        foreach ($chap as $key => $value) {
                            $chap_max= $chap_max.$key.",";
                        }
                        $chap_max=$chap_max."0)";
                   }
                   
                   
                   //echo "<br>Chap sai nhiều nhất: ".$chap_max;
                   
                   //lấy nội dung chap sai nhiều nhất
                   $comment_chap="Nội dung cần xem lại: <br>";
                   $query_chap="SELECT noidung FROM chap WHERE chap in ".$chap_max;
                   $result_chap_cmt = mysqli_query($conn,$query_chap) or die("Lỗi query Chap max") . mysqli_error();
                   while ($row_chap = mysqli_fetch_array($result_chap_cmt)) {
                       $comment_chap = $comment_chap.$row_chap['noidung'].", ";
                    }
                   
                   //-----------Box hiển thị điểm, comment
                   echo "<div class='box' id='box-tinhdiem'>";

                        echo "<div class='header-box'><div class='tr'><div class='tc'></div></div></div>";

                        echo "<div class='content-box'>";
                        
                            echo "<div class='point-comment'>";
                                //tính điểm và nhận xét
                                echo "<br>";
                                echo "<span class='diem'><h1>Số câu đúng: ". $diem." .</h1></span>";
                                echo "<span class='diem'><h1>câu sai: ".$sai."</h1></span>";
                                echo "<br>";  
                                echo "<span class='diem'><h1>".$string_percent."</h1></span>";
                                echo "<br>";
                                echo "<span class='cmt'><h1>". $comment_chap." .</h1></span>";
                            echo "</div>";
                            // --- chứa các button check result và Try Again
                            echo "<div class='choosen'>";
                                //echo "<form action='check-result.php' method='post'>";
                                    echo "<div class='check-result'>";
                                        echo "<a class='btn' href='check-result.php'>Kiểm tra kết quả</button>";
                                    echo "</div>";
                                //echo "</form>";
                                
                                //echo "<form action='quiz.php' method='post'>";
                                    echo "<div class='try-again'>";
                                            echo "<a class='btn' href='quiz.php'>Test mới</a>";
                                    echo "</div>";
                                //echo "</form>";
                            echo "</div>";
                        echo "</div>";
                        
                        echo "<div class='footer-box'><div class='br'><div class='bc'></div></div></div>";
                    echo "</div>";
                ?>
            </div>
    </div>
    </div>
    <!-- NOI DUNG - END-->
</body>
</html>