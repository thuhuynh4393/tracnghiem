<!DOCTYPE html>
<html>
<body>

<p>A script on this page starts this clock:</p>

<p id="demo"></p>

<script>
var myVar=setInterval(function(){myTimer()},1000);

function myTimer() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>

</body>
</html>
