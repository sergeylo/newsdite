<?php
$a=12;
$b=20;

/*
$i=0;
while (($a != 0) and  ($b !=0))
{
	if ($a > $b) 
	{
		$a=$a % $b;
	}
	else
	{
		$b=$b % $a;
	}
	$i++;
}

echo $i.' '.$a.' '.$b.'<br>';

if ($a==0)
{
	echo $b;
}
else
{
	echo $a;
}

17 4
*/



$i=0;
while ($a != $b)
{
	if ($a > $b)
	{
		$a=$a-$b;
	}
	else
	{
		$b=$b-$a;
	}
	
	$i++;
}

echo $i.' '.$a.' '.$b.'<br>';