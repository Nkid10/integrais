<?php
$val=0;
$val2=3;
$x=$val;
$n=100;
$s=0;
$h=($val2-$val)/$n;
echo $h;
echo "<br>";
while ( $x+$h<= $val2) {
	$area=((4*pow($x,3)-$x)+(4*pow($x+$h,3)-$x))*($h/2);
	$s+=$area;
	$x+=$h;
	//echo $s;
}
echo $s
?>