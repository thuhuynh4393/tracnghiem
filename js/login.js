/* 
 * Huynh Thi Cam Thu
 * Luan Van Thi Trac Nghiem Lap Trinh Can Ban  * 
 */


function checklog(){
    var user=document.forms["login-form"]["username"].value;
    var pass=document.forms["login-form"]["password"].value;
    if(user == null || pass==null || user=="" || pass==""){
        alert("Thông tin đăng nhập không đúng. Vui lòng nhập lại");
        return false;
    }
    
}