<?php
	$hostname = "localhost";	// Vamos considerar localhost ou máquina local
	$username = "root"; 	// Username é userTeste
	$password = "" 	// Password é passTeste (Cuidado com maiúsculas e minúsculas

	mysql_connect("$hostname", "$username", "$password") or die(mysql_error());
	echo "Conexão efectuada com sucesso!<br/>";
	
	mysql_select_db("hackathon") or die(mysql_error());
	//echo "Base de dados seleccionada!<br/>";
?>