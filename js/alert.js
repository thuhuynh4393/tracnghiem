/* 
 * Huynh Thi Cam Thu
 * Luan Van Thi Trac Nghiem Lap Trinh Can Ban  * 
 */

function alertLogin(){
    alert("Thông tin đăng nhập sai");
}

function stay(){
    return "Bạn sẵn sàng nộp bài?";
}

function confirmDelete(){
    var r = confirm("Bạn chắc muốn xóa?!");
    if (r == true) {
        
    } else {
        location.href='delete.php';
    }
    return r;
}


