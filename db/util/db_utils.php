<?php

function connect($hostname, $username, $password) {
	$con=mysqli_connect($hostname, $username, $password);
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  return NULL;
	}

	return $con;
}

function selectDB($con, $database) {
	if ($db=mysql_select_db($database/*, $con*/)) {
	  echo "Failed to select DB: '$database' " . mysqli_connect_error();
	  return FALSE;
	}
	//echo "selected db: $db<br>";

	return TRUE;
}

function executeQuery($con,$sql) {
	if (mysqli_query($con,$sql)) {
	  return TRUE;
	}

	echo "<br><br><b>Error executing query:</b><br>$sql<br>". $sql . mysqli_error($con);
	return FALSE;
}

function disconnect($con) {
	mysqli_close($con);
}

?>