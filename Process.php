<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/process.css">
</head>
<body>

	<section>
			
				<nav class="display">
				<nav class="center">
				
<?php

if (isset($_POST['Calcular'])) {
	$integraisOptions= $_POST['integrais'];
	switch ($integraisOptions) {
		case 'IntegralDupla':
			
			echo'<form action="intDupla.php" method="POST" enctype="multipart/form-data">';
			
			echo "<span style='font-size:100px;'>&#8747;</span>";
			echo '<div class="ord">';
			echo '<input type="text" placeholder="B" name="Bval">';
			echo '<input type="text" placeholder="A" name="Aval">';
			echo '</div>';
			echo "<span style='font-size:100px;'>&#8747;</span>";
			echo '<div class="ord">';
			echo '<input type="text" placeholder="D" name="Dval">';
			echo '<input type="text" placeholder="C" name="Cval">';
			echo '</div>';
			echo '<input id="dr" type="text" placeholder="2*x+3*y" name="Fval">';

			echo '<select id="dra" name= "exp">
						<option value="dxdy">dxdy</option>
						<option value="dydx">dydx</option>
					</select>';

			echo '<input type="submit" placeholder="Enviar" name="Calcular">';
				echo'</form>';

			break;
			case 'IntegralTripla':
			echo "Selecionou integral tripla";
			echo'<form action="intTripla.php" method="POST" enctype="multipart/form-data">';

			echo "<span style='font-size:100px;'>&#8747;</span>";
			echo '<div class="ord">';
			echo '<input type="text" placeholder="B" name="Bval">';
			echo '<input type="text" placeholder="A" name="Aval">';
			echo '</div>';
			
			echo "<span style='font-size:100px;'>&#8747;</span>";
			echo '<div class="ord">';
			echo '<input type="text" placeholder="D" name="Dval">';
			echo '<input type="text" placeholder="C" name="Cval">';
			echo '</div>';
			
			echo "<span style='font-size:100px;'>&#8747;</span>";
			echo '<div class="ord">';
			echo '<input type="text" placeholder="F" name="Fval">';
			echo '<input type="text" placeholder="E" name="Eval">';
			echo '</div>';
			echo '<input id="dr" type="text" placeholder="Insira os vallores da function" name="Gval">';
			echo '<select id="dra" name="exp">
						<option value="dxdydz">dydxdz</option>
					</select>';

			echo '<input type="submit" placeholder="Enviar" name="Calcular">';
				echo'</form>';
			break;
	}
}
?>
</nav>

</nav>

</section>

</body>
</html>
<?php
include 'footer.php';
?>
