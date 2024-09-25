<html>
<body>
<form method="get">
Enter number:<input type="text" name=num1>
<input type="submit" value="submit">
</form>
</body>
</html>
<?php
$square=$_GET['num1'];
$ans=sqrt($square);
echo "the square root of".$ans;
?>