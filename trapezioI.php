<?php
$val=0;
$val2=2;
$x=$val;
$n=2000;
$s=0;
$h=($val2-$val)/$n;
while (($x+$h)<= $val2) {
	$fa=2*$x-exp($x);
	$fcp=2*($x+$h)-exp($x+$h);
	$area=($fa+$fcp)*($h/2);
	$s+=$area;
	$x+=$h;
	
}
echo $s

?>