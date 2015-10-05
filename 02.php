<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$people = array(4,6,8,4,6,8,4,6,2,8,4,6,8,4,6,8,4,6,8,4,6,8,4,6,8,4,6,8);
$ma=2;
$a2=array($ma);
$rm = array_intersect($people,$a2);
print_r($rm);
?>

</body>
</html> 