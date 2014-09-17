<?php

require_once "./db/connection.php";
require_once "./db/utils.php";

echo "tamoino<br><br>";

$con=connect($hostname, $username, $password);
//$mysqli = new mysqli('localhost', 'user', 'password', 'dbname');

$result = select($con, "SELECT * FROM $database.tb_score");

while (($row = $result->fetch_assoc()) !== null) {
    $output = array();
    foreach ($row as $columnName => $columnValue) {
        $output[] = "$columnName => $columnValue<br>";
    }
    echo implode(', ', $output) . PHP_EOL;
    echo "<br>";
}


?>