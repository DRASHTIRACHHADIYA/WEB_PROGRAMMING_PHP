<html>
<body>
<form method="get">
Enter number:<input type="text" name=num1>
Enter number:<input type="text" name=num2>
Enter number:<input type="text" name=num3>
<input type="submit" value="submit">
</form>
</body>
</html>
<?php
$no1=$_GET['num1'];
$no2=$_GET['num2'];
$no3=$_GET['num3'];
$maxnumber=max($no1,$no2,$no3);
echo "the largest number is :$maxnumber";
?>