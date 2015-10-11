<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
/*
$array_test = array(4,5,4,4,2);
$_SESSION["favcolor"] = $array_test;
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
 * 
 */
require_once './function.php';
    $q = "Select * from data";
    $r=  getData($q);
    $row = mysql_fetch_array($r);
    while ($row1 = mysql_fetch_array($r)) {
        echo $row1['noidung'];
    
}
?>

</body>
</html> 