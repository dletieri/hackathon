<?php
	include 'util/db_utils.php';

	$hostname = "localhost";	// Vamos considerar localhost ou máquina local
	$username = "userTeste"; 	// Username é userTeste
	$password = "passTeste"; 	// Password é passTeste (Cuidado com maiúsculas e minúsculas
	$database = "BigData";

	// Connect to Database
	$con=connect($hostname, $username, $password);
	executeQuery($con, "DROP DATABASE $database");
	executeQuery($con, "CREATE DATABASE $database");

	// Create tables
	executeQuery($con, "CREATE TABLE $database.tb_entity (
		`objid` bigint(20) unsigned NOT NULL,
		`name` text NOT NULL,
		`type` text NOT NULL,

		PRIMARY KEY (objid)
		) AUTO_INCREMENT=1");

	executeQuery($con, "CREATE TABLE $database.tb_location (
		`objid` bigint(20) unsigned NOT NULL,
		`latitude` varchar(64) NOT NULL,
		`longitude` varchar(64) NOT NULL,
		`address` text NOT NULL,
		`city` text NOT NULL,
		`state` text NOT NULL,
		`country` text NOT NULL,
		`zip` text NOT NULL,

		PRIMARY KEY (objid)
		) AUTO_INCREMENT=1 ;");

	executeQuery($con, "CREATE TABLE $database.tb_metadata (
		`objid` bigint(20) unsigned NOT NULL,
		`type` text NOT NULL,
		`value` text NOT NULL,

		PRIMARY KEY (objid)
		) AUTO_INCREMENT=1 ;");

	executeQuery($con, "CREATE TABLE $database.tb_media (
		`objid` bigint(20) unsigned NOT NULL,
		`image` text,
		`video` text,
		`type` text NOT NULL,

		PRIMARY KEY (objid)
		) AUTO_INCREMENT=1 ;");
	
	executeQuery($con, "CREATE TABLE $database.tb_score (
		`objid` bigint(20) unsigned NOT NULL,
		`metadata_id` bigint(20) unsigned NOT NULL,
		`gender` char NOT NULL,
		`age` int NOT NULL,
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

	disconnect($con);
	echo "<br>Success!<br/>";
?>