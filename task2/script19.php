<?php
function check_prime($num)
{
	if($num==1)
		return 0;
	for($i=2;$i<=$num/2;$i++)
	{
		if($num%$i==0)
			return0;
	}
	return 1;
}
$num=50;
$flag_val=check_prime($num);
if($falg_val==1)
	echo "it is a prime number";
else
	echo "50 it is non-prime number";
?>