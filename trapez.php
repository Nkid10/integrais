<?php
$x0=0;
$xm=2;
$h=0.02;
$x=$x0;
$f=2*$x-exp($x);
$integral=0;
$x=$x0;
//$f=2*$x-exp($x);
$ind=1;
while ( $x < $xm) {
	if (($ind/2)<>0) {
		echo $integral+=4*$f;echo "<br>";
	}else{
		echo $integral+=2*$f;
		$ind+=1;
		echo "<br>";
	}
		
		$x+=$h;
		$x=$xm;
		$integral+=$f;
		$integral*=($h/3);
}
echo $integral;
?>