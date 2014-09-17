<?php
	require_once './utils.php';
	require_once './connection.php';

	// Connect to Database
	$con=connect($hostname, $username, $password);
	executeQuery($con, "DROP DATABASE $database");
	executeQuery($con, "CREATE DATABASE $database");

	echo "Starting schema..<br>";

	// Create tables
	executeQuery($con, "CREATE TABLE $database.tb_entity (
		`objid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
		`name` varchar(256) NOT NULL,
		`type` varchar(256) NOT NULL,

		PRIMARY KEY (objid)
		) AUTO_INCREMENT=1");

	executeQuery($con, "CREATE TABLE $database.tb_location (
		`objid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
		`latitude` varchar(64) NOT NULL,
		`longitude` varchar(64) NOT NULL,
		`address` varchar(256) NOT NULL,
		`city` varchar(256) NOT NULL,
		`state` varchar(256) NOT NULL,
		`country` varchar(256) NOT NULL,
		`zip` text NOT NULL,

		PRIMARY KEY (objid)
		) AUTO_INCREMENT=1 ;");

	executeQuery($con, "CREATE TABLE $database.tb_metadata (
		`objid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
		`type` varchar(256) NOT NULL,
		`value` varchar(256) NOT NULL,

		PRIMARY KEY (objid)
		) AUTO_INCREMENT=1 ;");

	executeQuery($con, "CREATE TABLE $database.tb_media (
		`objid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
		`image` text,
		`video` text,
		`type` varchar(256) NOT NULL,

		PRIMARY KEY (objid)
		) AUTO_INCREMENT=1 ;");
	
	executeQuery($con, "CREATE TABLE $database.tb_score (
		`objid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
		`metadata_id` bigint(20) unsigned NOT NULL,
		`gender` char NOT NULL,
		`age` char NOT NULL,
		`score` int NOT NULL,

		PRIMARY KEY (objid),

		INDEX(metadata_id),
		FOREIGN KEY (metadata_id)
			REFERENCES tb_metadata(objid)
		) AUTO_INCREMENT=1 ;");
	
	// create relations
	executeQuery($con, "CREATE TABLE $database.tbnn_entity_location (
		`entity_id` bigint(20) unsigned NOT NULL,
		`location_id` bigint(20) unsigned NOT NULL,

		INDEX(entity_id),
		FOREIGN KEY (entity_id)
			REFERENCES tb_entity(objid),

		INDEX(location_id),
		FOREIGN KEY (location_id)
			REFERENCES tb_location(objid)
		)");

	executeQuery($con, "CREATE TABLE $database.tbnn_entity_media (
		`entity_id` bigint(20) unsigned NOT NULL,
		`media_id` bigint(20) unsigned NOT NULL,

		INDEX(entity_id),
		FOREIGN KEY (entity_id)
			REFERENCES tb_entity(objid),

		INDEX(media_id),
		FOREIGN KEY (media_id)
			REFERENCES tb_media(objid)
		)");

	executeQuery($con, "CREATE TABLE $database.tbnn_entity_metadata (
		`entity_id` bigint(20) unsigned NOT NULL,
		`metadata_id` bigint(20) unsigned NOT NULL,

		INDEX(entity_id),
		FOREIGN KEY (entity_id)
			REFERENCES tb_entity(objid),

		INDEX(metadata_id),
		FOREIGN KEY (metadata_id)
			REFERENCES tb_metadata(objid)
		)");

	echo "End of schema, starting with data..<br>";

	// import data
	$handle = fopen("init_data.sql", "r");
	if ($handle) {
	    while (($line = fgets($handle)) !== false) {
	    	if (!empty(trim($line))) {
	        	$sql = str_replace("_DATABASE_", $database, $line);
	        	echo "executing: $sql<br>";
	        	executeQuery($con, $sql);
	    	}
	    }
	} else {
	    // error opening the file.
	} 
	fclose($handle);

	disconnect($con);
	echo "<br>Success!<br/>";
?>