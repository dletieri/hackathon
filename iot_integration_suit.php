<?php
header("Access-Control-Allow-Origin: *");

//$unhandled = file_get_contents('http://api.thingspeak.com/channels/16099/feed.json?results=1');

$unhandled = file_get_contents('http://193.43.244.54:8080/subscriberData?token=10125&subscriberId=676375');

$handled =  json_decode($unhandled);

//echo "lat:".$_GET["query"]."<br>";
$age = rand(18,50);



if ($age < 31 ) $cat = "young";
else if ($age >= 31 && $age <= 40) $cat = "mature";
else if ($age > 40) $cat = "old";

echo "The ". $cat ." ";

echo $handled->gender;
echo " with ";

echo $age;
echo " years is ";

//var_dump($handled);



if (@$_GET['query']) {

	echo "performing a query.";

} else if ($_GET["lat"] && $_GET["lon"]) {
	echo "been tracked.";

	file_get_contents("http://localhost/hackathon/tracking.php?lat=".$_GET["lat"]."&lon=".$_GET["lon"]."&device=".$_GET["device"]."&cust=".$_GET["cust"]);

}




?>
