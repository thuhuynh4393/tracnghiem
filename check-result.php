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
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="https://elcit.ctu.edu.vn/">Elcit</a></li>
                <li><a href="http://www.ctu.edu.vn">CTU</a></li>
                <li><a href="https://www.google.com/">Google</a></li>
                <?php
                    if(isset($_SESSION['userLogin']) && $_SESSION['userLogin']==TRUE){
                        echo "<li><a href='edit.php'>Edit</a></li>";
                        echo "<li><a href='logout.php'>Log Out</a></li>";
                    }
                ?>
            </ul>
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
                    //echo "Câu hỏi của thí sinh";
                    //print_r($cauhoi_check);
                    
                    foreach ($_SESSION["right_answer"] as $key => $value) {
                        $right_check[$key]=$value;
                    }
                    //echo "Câu đúng";
                    //print_r($right_check);

                    // In câu hỏi, câu trả lời, và đúng hoặc sai
                    foreach ($cauhoi_check as $key => $value) {
                        $query_check="SELECT noidungcauhoi, noidung FROM cauhoi,traloi "
                                . "WHERE cauhoi.macauhoi =".$key." and traloi.macauhoi=".$key." and matraloi='".$value."'"; 

                        $result_check=  mysqli_query($conn,$query_check) or die("LOI TRUY van CHeck"). mysqli_error();

                        //HIển thị trong box
                        echo "<div class='box' id='box-result'>";

                            

                            echo "<div class='content-box'>";                            

                                while ($row_check=  mysqli_fetch_array($result_check)){
                                    if(count($right_check)==0) {
                                        $comment_answer = "SAI";
                                    }  elseif(array_key_exists($key, $right_check)) {
                                        $comment_answer = "Đúng";
                                    }  else {
                                        $comment_answer = "Sai";
                                    }
                                    echo "<span class='result-question'>Câu hỏi: ".$row_check['noidungcauhoi']."</span>";

                                    echo "<span class='result-answer'><h3>Câu trả lời của bạn:</h3> ".$row_check['noidung']."</span>";

                                    echo "<span class='result-comment'>Kết quả: ".$comment_answer."</span>";                  
                                }

                            echo "</div>";

                            
                        echo "</div>";
                    }
                 
                    
                   
                   
                ?>
            </div>
    </div>
    </div>
    <!-- NOI DUNG - END-->
    <div class="footer">
          <div class="container">
              <p>Thu Huynh</p>
          </div>
    </div>

    
    

</body>
</html>