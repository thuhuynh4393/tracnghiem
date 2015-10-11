/* 
 * Huynh Thi Cam Thu
 * Luan Van Thi Trac Nghiem Lap Trinh Can Ban  * 
 */

function alertLogin(){
    alert("Thông tin đăng nhập sai");
}

function confirmDelete(){
    var r = confirm("Bạn chắc muốn xóa?!");
    if (r == true) {
        location.href='del-action.php';
    } else {
        location.href='delete.php';
    }
}