<?php

	require_once './utils.php';
	require_once './connection.php';



/*
	// TESTE
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "BigData";

	$con=connect($hostname, $username, $password);
	$value = queryEngine($con, $database, 'Restaurant', 'Y', 'M');	// age = {Y,A,O}, gender = {M,F}
	echo "<h1>$value</h1>";
*/

	function queryEngine($con, $database, $keyword, $age, $gender) {

		$result = select($con, "select ent.name, sum(score.score) as rank
			from $database.tb_entity ent, $database.tb_metadata meta, $database.tbnn_entity_metadata nn_em, $database.tb_score score
			where 
				ent.type like '%$keyword%'
				and score.gender = '$gender'
				and score.age = '$age'
				and ent.objid = nn_em.entity_id
				and meta.objid = nn_em.metadata_id
				and meta.objid = score.metadata_id
			group by ent.name
			order by rank desc
			limit 1");

		$place = '';
		if (($row = $result->fetch_assoc()) !== null) {
		    $output = array();
		    foreach ($row as $columnName => $columnValue) {
		    	if($columnName == 'name') {
		    		$place = $columnValue;
		    	}
		    }
		}
		return $place;
	}

?>