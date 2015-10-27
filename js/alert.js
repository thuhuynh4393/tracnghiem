/* 
 * Huynh Thi Cam Thu
 * Luan Van Thi Trac Nghiem Lap Trinh Can Ban  * 
 */

function alertLogin(){
    alert("Thông tin đăng nhập sai");
}

function confirmDelete(){
    var r = confirm("Bạn chắc muốn xóa?!");
    if (r == false) {       
        location.href='delete.php';
    }
    return r;
}

function confirmUpdate(){
    var r = confirm("Bạn chắc muốn sửa nội dung?!");
    if (r == false) {
        location.href='update.php';
    }
    return r;
}

function stay(){
    return "Bạn Xác Nhận Rời Đi?";
}