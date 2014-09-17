<?php

//$unhandled = file_get_contents('http://api.thingspeak.com/channels/16099/feed.json?results=1');

$unhandled = file_get_contents('http://193.43.244.54:8080/subscriberData?token=10125&subscriberId=676375');

$handled =  json_decode($unhandled);


echo $handled->gender;
echo " with ";
$birthDate = $handled->dateOfBirth;
$birthDate = explode("/", $birthDate);
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[0], $birthDate[2]))) > date("md")
? ((date("Y") - $birthDate[2]) - 1)
: (date("Y") - $birthDate[2]));
echo $age;
echo " years.<br><br>";

var_dump($handled);


echo " years.<br><br>";


?>
