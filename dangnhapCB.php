<html>
<head>
    <title>Thi Trắc Nghiệm</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/reset.css" rel="stylesheet" type="text/css"/>
    <link href="css/form.css" rel="stylesheet" type="text/css"/>
    <script src="jquery.js" type="text/javascript"></script>
    
</head>


<body>
        <!-- LOGO HEADER - Start-->
    
    <div id="top_background">

        <div class="main_container">

            
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
    
    <div class="tinhdiem">
        <div class="tinhdiem-content">
            <?php
            require_once './connect.php';
            //if(isset($_POST['submit'])){
             //       print_r($_POST);
             //   }
             //   
            // mảng lưu câu hỏi
            $cauhoi =array();
            //mảng lưu câu trả lời
            $traloi = array();
            //mảng lưu đáp án lấy về từ csfl
            $dapan = array();
            
            //thêm các câu hỏi và câu trả lời vào hai mảng cauhoi, traloi
            foreach ($_POST as $key => $value) {
                
                array_push($cauhoi, $key);
                array_push($traloi, $value);
            }
            foreach ($traloi as $key => $value){
                //echo $value;
                //echo "\t";
            }
            
            //chuỗi câu hỏi lưu vào mảng
            $string ="(";            
            foreach ($cauhoi as $key => $value) {
                $string = $string.$value.",";
            }
            $string=$string."0)";
            //echo $string;
            //echo "<br>";
           
           
           $query_dapan = "SELECT matraloi FROM dapan WHERE macauhoi in ".$string;
           $result_dapan = mysql_query($query_dapan,$conn) or die("Lỗi truy vấn" . mysql_error() . "<br/>");
           while ($row_dapan = mysql_fetch_array($result_dapan)) {
               //echo $row_dapan['matraloi']."\t\t";
               array_push($dapan, $row_dapan['matraloi']);
           }
           //print_r($dapan);
           $result_match = array_intersect($traloi, $dapan);
           //echo "số câu trả lời giống nhau: ";
           //print_r($result_match);
           $diem =count($result_match);
           echo "<br><h1>Tổng số điểm của bạn là: ". $diem." .</h1>";
           if($diem<5){
               echo "<br><h1>Bạn dỡ tệ</h1>";
           }elseif ($diem>=5 && $diem<9) {
                echo "<br><h1>Bạn cần cố gắng hơn</h1>";
    
            }  else {
                echo "<br><h1>Bạn Là Siêu nhân</h1>";
            }
    ?>
        </div>
    </div>
    
    
    
    <!-----FOOTER START-->
    <div class="footer-end"></div>
    <!-----FOOTER END-->
</body>   
   
    
    
    
    
   
    
    
    
    
    

</html>