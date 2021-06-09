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
	.row{
		padding-right: 20px;
	}
	.row a{
		text-decoration: none;
		color: black;
		font-size: 22px;

	}
	.row a i{
		
		margin-left: 60px;
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
		<a href="./"><i class="fa fa-arrow-left"> Voltar </i></a>
	</nav>
	<nav class="def">
<?php
error_reporting(0);
 define ("pi", 3.14, false);
if (isset($_POST['Calcular'])) {
	if ((($_POST['Aval'])!= "") && (($_POST['Bval'])!= "") && (($_POST['Cval'])!= "") && (($_POST['Dval'])!= "") && (($_POST['Fval'])!= "")) {

	$IntPor= $_POST['exp'];

	switch ($IntPor) {
		// Em funcao de X
		case 'dydx':
	//Valor do intervalos das integrais definidas
		define ("pi", 3.14, false);
	$Aval=$_POST['Aval'];//valor da intervalo inferior da primeira integracao
	
	$Bval=$_POST['Bval'];// valor do intervalo superior da primeira integracao
	
	$Cval=$_POST['Cval'];//valor da intervalo inferior da Segunda integracao
	
	$Dval=$_POST['Dval'];//valor da intervalo superior da Segunda integracao
	
	$fVal=$_POST['Fval'];// Valor A Ser Calculado 

	$h=($Bval-$Aval)/6;//Formula para determinar O "H" da primeira integracao
	//
	$half=($Aval+$Bval)/2;// Formula para determinar o valor medio da funcao dependente de A e B da primeira integracao dependente de "x"
	$h2=($Dval-$Cval)/6; // Formula para determinar o 'H' da segunda Integracao
	$half2=($Cval+$Dval)/2;//Formula para determinar o valor medio da funcao dependente de A e B Na segunda Integracao dependente De "y"
		
		// Area reservada para Substituicao Da primeira integracao dependente de dx
		$f1=str_replace("x",$Aval, $fVal);//Substituicao de valores na funcao principal nesse Caso a f(a)
		$f2=str_replace("x",$Bval, $fVal);//Substituicao de valores na funcao principal nesse Caso a f(b)
		$f12=str_replace("x",$half, $fVal);//Substituicao de valores na funcao principal nesse Caso a f((a+b)/)

		$f3=str_replace("y",$Cval, $fVal);

		$f4=str_replace("y",$Dval, $fVal);

		$f34=str_replace("y",$half2, $fVal);


		eval("\$a =$f1;");//forcar o programa calcular a nossa equacao de f1
		  eval("\$b=$f2;");//forcar o programa calcular a nossa equacao de f2
		  eval("\$c=$f12;");//forcar o programa calcular a nossa equacao de f12

		   $formula=($h*($a+(4*$c)+$b)); //$formula=($h*($a+(4*$c)+$b)); // formula pela qual obteremos o valor da primeira integracao 
		  // echo $formula;
		   echo "<br>";
		  eval("\$d=$f3;"); 
		  eval("\$e=$f4;");
		  eval("\$f=$f34;");
		  //echo $f;
		  echo "<br>";
		 

		  $formula2=($h2*($formula+$d+4*($f+$formula)+$formula+$e));// formula pela qual obteremos o valor da integral total da function geral
	 		 echo 'Resultado da integracao : '.$formula2;
	
		 echo "<br>";
	
		echo "<br>";

			echo "<br>";
		echo "integral em funcao dydx usando metodo de simpson";
			break;

			// Em funcao de Y

		case 'dxdy':
		define ("pi", 3.14, false);
		$Aval=$_POST['Aval'];//valor da intervalo inferior da primeira integracao
	
	$Bval=$_POST['Bval'];// valor do intervalo superior da primeira integracao
	
	$Cval=$_POST['Cval'];//valor da intervalo inferior da Segunda integracao
	
	$Dval=$_POST['Dval'];//valor da intervalo superior da Segunda integracao
	
	$fVal=$_POST['Fval'];// Valor A Ser Calculado 

	$h=($Bval-$Aval)/6;//Formula para determinar O "H" da primeira integracao
	//
	$half=($Aval+$Bval)/2;// Formula para determinar o valor medio da funcao dependente de A e B da primeira integracao dependente de "x"
	$h2=($Dval-$Cval)/6; // Formula para determinar o 'H' da segunda Integracao
	$half2=($Cval+$Dval)/2;//Formula para determinar o valor medio da funcao dependente de A e B Na segunda Integracao dependente De "y"
		
		// Area reservada para Substituicao Da primeira integracao dependente de dy
		$f1=str_replace("y",$Aval, $fVal);//Substituicao de valores na funcao principal nesse Caso a f(a)
		$f2=str_replace("y",$Bval, $fVal);//Substituicao de valores na funcao principal nesse Caso a f(b)
		$f12=str_replace("y",$half, $fVal);//Substituicao de valores na funcao principal nesse Caso a f((a+b)/)

		$f3=str_replace("x",$Cval, $fVal);

		$f4=str_replace("x",$Dval, $fVal);

		$f34=str_replace("x",$half2, $fVal);


		eval("\$a =$f1;");//forcar o programa calcular a nossa equacao de f1
		  eval("\$b=$f2;");//forcar o programa calcular a nossa equacao de f2
		  eval("\$c=$f12;");//forcar o programa calcular a nossa equacao de f12

		   $formula=($h*($a+(4*$c)+$b)); //$formula=($h*($a+(4*$c)+$b)); // formula pela qual obteremos o valor da primeira integracao 

		  eval("\$d=$f3;"); 
		  eval("\$e=$f4;");
		  eval("\$f=$f34;");
		  echo "<br>";
		 

		  $formula2=($h2*($formula+$d+4*($f+$formula)+$formula+$e));// formula pela qual obteremos o valor da integral total da function geral

	 	 echo 'Resultado da integracao  :'.$formula2;
	 		 echo "<br>";

	 		 echo "<br>";
			echo " integral em funcao de dxdy usando metodo de simpson";
			break;

	}

}else{
	echo "Ocoreu um erro";
}

}

?>
</nav>
</body>
</html>

<?php
include 'footer.php';
?>
