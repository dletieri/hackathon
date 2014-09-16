<?php

echo "Teste nada. Agora é Hackathon!<br><br>";

echo "lat:".$_GET["lat"]."<br>";
echo "lon:".$_GET["lon"]."<br>";
echo "device:".$_GET["device"]."<br>";
echo "cust:".$_GET["cust"]."<br>";

echo 'https://api.thingspeak.com/update/?api_key=2V8RBHJ1SZ8KAI81&field1=D00123&field2=smartphone&field4='.$_GET["lat"].'&field5='.$_GET["lon"];

//echo "https://www.google.com.br/maps/place//@".$_GET["lat"].",".$_GET["lon"].",463m/data=!3m1!1e3!4m2!3m1!1s0x0:0x0";

file_get_contents('https://api.thingspeak.com/update/?api_key=2V8RBHJ1SZ8KAI81&field1=chupa&field2=smartphone&field4='.trim($_GET["lat"]).'&field5='.trim($_GET["lon"]));

/*$r = new HttpRequest('https://api.thingspeak.com/update/?api_key=2V8RBHJ1SZ8KAI81&field1=D00123&field2=smartphone&field4='.trim($_GET["lat"]).'&field5='.trim($_GET["lon"]), HttpRequest::METH_GET);
echo $r->send();
//https://api.thingspeak.com/update/?api_key=2V8RBHJ1SZ8KAI81&field1=D00123&field2=smartphone&field3=restaurant&Latitude=1111&Longitude=4444

/*

$r->setOptions(array('lastmodified' => filemtime('local.rss')));
$r->addQueryData(array('category' => 3));
try {
    $r->send();
    if ($r->getResponseCode() == 200) {
        file_put_contents('local.rss', $r->getResponseBody());
    }
} catch (HttpException $ex) {
    echo $ex;
}
?>

*/
?>


