<?php

echo "Teste nada. Agora é Hackathon!<br><br>";

echo "lat:".$_GET["lat"]."<br>";
echo "lon:".$_GET["lon"]."<br>";
echo "device:".$_GET["device"]."<br>";
echo "cust:".$_GET["cust"]."<br>";

echo 'https://api.thingspeak.com/update/?api_key=2V8RBHJ1SZ8KAI81&field1=D00123&field2=smartphone&field4='.$_GET["lat"].'&field5='.$_GET["lon"];

file_get_contents('https://api.thingspeak.com/update/?api_key=2V8RBHJ1SZ8KAI81&field1='.$_GET["device"].'&field6='.$_GET["cust"].'&field4='.trim($_GET["lat"]).'&field5='.trim($_GET["lon"]));
	

?>


