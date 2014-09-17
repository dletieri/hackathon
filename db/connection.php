<?php
	$hostname = "localhost";	// Vamos considerar localhost ou máquina local
	$username = "root"; 	// Username é userTeste
	$password = ""; 	// Password é passTeste (Cuidado com maiúsculas e minúsculas
	$

	$con = mysqli_connect($hostname, $username, $password, "bigdata") or die(mysql_error());
	//echo "Conexão efectuada com sucesso!<br/>";
	
	//$db = mysqli_select_db($con, "hackathon") or die(mysql_error());
	//echo "Base de dados seleccionada!<br/>";


?>