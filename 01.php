<!DOCTYPE html>
<html>
<body onbeforeunload="return myFunction()">

<p>Close this window, press F5 or click on the link below to invoke the onbeforeunload event.</p>

<a href="http://www.w3schools.com">Click here to go to w3schools.com</a>
      
<script>
function myFunction() {
    return "Write something clever here...";
}
</script>

</body>
</html>
