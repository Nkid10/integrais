<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
<style>
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	body{
		height: 50vh;
		width: 100%;

	}
	.def{
		display: flex;
		justify-content: center;
		align-items: center;
		height: 30vh;
		width: 30%;
		border: 1px solid black;
		margin:5% 35%;
		-webkit-box-shadow: 8px 10px 5px 2px #757575;
	-moz-box-shadow: 8px 10px 5px 2px #757575;
	box-shadow: 8px 10px 5px 2px #757575;
	}
</style>

 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
	<nav class="row">
		<a href="../"><i class="fa fa-arrow-left"></i></a>
	</nav>
	<nav class="def">

<?php
error_reporting(0);

$Send = $_POST['Calcular'];
if (isset($Send)) {
	if ((($_POST['Aval'])!= "") && (($_POST['Bval'])!= "") && (($_POST['Cval'])!= "") && (($_POST['Dval'])!= "") && (($_POST['Fval'])!= "") && (($_POST['Gval'])!= "")) {
	

	if (isset($_POST['exp'])) {

	$Aval=$_POST['Aval'];//valor da intervalo inferior da primeira integracao
	
	$Bval=$_POST['Bval'];// valor do intervalo superior da primeira integracao
	
	$Cval=$_POST['Cval'];//valor da intervalo inferior da Segunda integracao
	
	$Dval=$_POST['Dval'];//valor da intervalo superior da Segunda integracao
	
	$fVal=$_POST['Fval'];// Valor da intervalo inferior da terceira integracao

	$EVal=$_POST['Eval'];// Valor da intervalo inferior da terceira integracao

	$gVal=$_POST['Gval'];//Valor A Ser Calculado 


	$h1=($Bval-$Aval)/6; //echo $h1; echo "<br>";

	$half1=($Bval+$Aval)/2;//echo $half1;echo "<br>";

	$h2=($Dval-$Cval)/6; //echo $h2;echo "<br>";

	$half2=($Dval+$Cval)/2; //echo $half2;echo "<br>";

	$h3=($Fval-$Eval)/6; //echo $h3;echo "<br>";

	$half3=($Eval+$Fval)/2; //echo $half3;echo "<br>";

	// Area reservada para Substituicao Da primeira integracao dependente de dx
		$f1=str_replace("x",$Eval, $gVal);//Substituicao de valores na funcao principal nesse Caso a f(a)
		$f2=str_replace("x",$Fval, $gVal);//Substituicao de valores na funcao principal nesse Caso a f(b)
		$f12=str_replace("x",$half3, $gVal);//Substituicao de valores na funcao principal nesse Caso a f((a+b)/)

		  eval("\$a =$f1;");//forcar o programa calcular a nossa equacao de f1
		  eval("\$b=$f2;");//forcar o programa calcular a nossa equacao de f2
		  eval("\$c=$f12;");//forcar o programa calcular a nossa equacao de f12

		  $formula=($h3*($a+(4*$c)+$b)); // formula pela qual obteremos o valor da primeira integracao 
		   //echo $formula;
		   echo "<br>";

		$f3=str_replace("y",$Cval, $gVal);

		$f4=str_replace("y",$Dval, $gVal);

		$f34=str_replace("y",$half2, $gVal);

		eval("\$d =$f3;");
		eval("\$e=$f4;");
		eval("\$f=$f34;");

		$formula1=($h2*(($d+$formula)+4*($f+$formula)+($e+$formula)));
		 
		//echo $formula1; 
		 // $formula=($h1*($a+(4*$c)+$b)); // formula pela qual obteremos o valor da primeira integracao 
		  

		 $f5=str_replace("z",$Aval, $gVal);

		$f6=str_replace("z",$Bval, $gVal);

		$f56=str_replace("z",$half1, $gVal);

		eval("\$g =$f5;");
		eval("\$h=$f6;");
		eval("\$i=$f56;");

		$formula2=($h1*(($g+$formula1)+4*($i+$formula1)+($h+$formula1)));
		echo "<br>";
		echo 'Resultado da integracao usando metodo de simpson: '. $formula2;


	}

} else{
	echo "Ocorreu um erro";
}
}
?>
</nav>
</body>
</html>
<?php
include 'footer.php';
?>