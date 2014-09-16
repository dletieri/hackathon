<?php
	$hostname = "localhost";	// Vamos considerar localhost ou máquina local
	$username = "userTeste"; 	// Username é userTeste
	$password = "passTeste" 	// Password é passTeste (Cuidado com maiúsculas e minúsculas

	mysql_connect("$hostname", "$username", "$password") or die(mysql_error());
	echo "Conexão efectuada com sucesso!<br/>";
	
	mysql_select_db("teste") or die(mysql_error());
	echo "Base de dados seleccionada!<br/>";
?>