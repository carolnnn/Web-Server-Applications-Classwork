<html>
<head>
<title>Pokemon Api</title>
<?php require 'css2.php'?>
</head>
<body>

<?php

$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

if(isset($_GET['id'])){
   $pokemon = $_GET['id'];}
else{
  $pokemon = 1;}

$url = "https://pokeapi.co/api/v2/pokemon/".$pokemon;
curl_setopt($curl,CURLOPT_URL,$url);

$result = json_decode(curl_exec($curl));

echo"<img src = '".$result->sprites->front_shiny."'>";
echo"<img src = '".$result->sprites->front_default."'><br>";
echo"<b>Pokedx Number:</b>".$result->id."<br>";
echo"<b>Base Experience:</b>".$result->base_experience."<br><br>";
echo"<b>Height:<b>".ucfirst($result->height)."<br>";
echo"<b>Abilities:</b>";
foreach($result->abilities as $ability){
  echo ucfirst($ability->ability->name);
  echo"<br>";
};

echo"<br>Type:</b>".$result->type[1]->type->name;"<br><br>";
$i = 1;
foreach($result->type as $type){
  print"<b>Typr".$i++.":</b>".$type->type->name."<br>";
}

?>
</body>

</html>