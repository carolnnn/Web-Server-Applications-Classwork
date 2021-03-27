<?php
$curl = curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);

if(isset($_GET['id'])){
    $id = $_GET['id'];
}
else{
    $id= 25;
}
$url = "https://pokeapi.co/api/v2/pokemon/".$id;
curl_setopt($curl,CURLOPT_URL,$url);

$result = json_decode(curl_Exec($curl));

echo"<img scr ='".$result->sprites->front_default."'><br>";
echo"<h3>".ucfirst($result->name)."</h3>";