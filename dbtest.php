<?php

require_once "./db/connection.php";

echo "tamoino<br><br>";

//$mysqli = new mysqli('localhost', 'user', 'password', 'dbname');

$result = $con->query("SELECT * FROM try");

while (($row = $result->fetch_assoc()) !== null) {
    $output = array();
    foreach ($row as $columnName => $columnValue) {
        $output[] = $columnName . ' => ' . $columnValue;
    }
    echo implode(', ', $output) . PHP_EOL;
}


?>