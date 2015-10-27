<?php

require_once './connect.php';
$id = $_POST['idUpdate'];
$diff = $_POST['difficult'];
$chap= $_POST['chap'];
$question = $_POST['questionUpdate'];
$A = $_POST['A'];
$B = $_POST['B'];
$C = $_POST['C'];
$D = $_POST['D'];
$correct = $_POST['answer'];


//xử lý chuỗi
    //nếu có ký tự đặt biệt "<"
$ques= str_ireplace(array("#include <","#include<"), "#include &lt", $question);
$A_ans = str_ireplace(array("#include <","#include<"), "#include &lt", $A);
$B_ans = str_ireplace(array("#include <","#include<"), "#include &lt", $B);
$C_ans= str_ireplace(array("#include <","#include<"), "#include &lt", $C);
$D_ans = str_ireplace(array("#include <","#include<"), "#include &lt", $D);

/*
$A_ans = nl2br( $A_ans);
$B_ans = nl2br( $B_ans);
$C_ans= nl2br( $C_ans);
$D_ans = nl2br( $D_ans);
 * 
 */



//Query Update vao bảng cauhoi
$query_updateQuestion="UPDATE cauhoi SET mucdo=".$diff.", noidungcauhoi='".$ques."',chap=".$chap." WHERE macauhoi=".$id;
//Insert vào bảng traloi
$query_updateA="UPDATE traloi SET noidung='".$A_ans."' WHERE macauhoi=52 AND matraloi='A'";
$query_updateB="UPDATE traloi SET noidung='".$B_ans."' WHERE macauhoi=52 AND matraloi='B'";
$query_updateC="UPDATE traloi SET noidung='".$C_ans."' WHERE macauhoi=52 AND matraloi='C'";
$query_updateD="UPDATE traloi SET noidung='".$D_ans."' WHERE macauhoi=52 AND matraloi='D'";
//Update vào bảng dapan (ans)
$query_updateAnswer="UPDATE dapan SET matraloi='".$correct."' WHERE macauhoi=".$id;


if ($conn->query($query_updateQuestion) === TRUE && 
       $conn->query($query_updateAnswer) ===TRUE && 
        $conn->query($query_updateA)===TRUE && 
        $conn->query($query_updateB)===TRUE && 
        $conn->query($query_updateC)===TRUE && 
        $conn->query($query_updateD)===TRUE  ) {
    echo "<script charset='UTF-8'>";
        echo "alert('Câu hỏi đã cập nhật thành công!');";
        echo "location.href='update.php'; "; 
    echo "</script>";
} else {
    echo "Error: " . $query_insertAnswer . "<br>" . $conn->error;
}

/*
echo "<br>ID: ".$_POST['idUpdate'];
echo "<br>chap: ".$_POST['chap'];
echo "<br>dif: ".$_POST['difficult'];
echo "<br>Quss: ".$_POST['questionUpdate'];
echo "<br>A: ".$_POST['A'];
echo "<br>B: ".$_POST['B'];
echo "<br>C: ".$_POST['C'];
echo "<br>D: ".$_POST['D'];
echo "<br>Correct:".$_POST['answer'];
 * 
 */
