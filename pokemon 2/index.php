<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="bootstrap.min.js"></script>
<head>

	<title>Pokemon Database</title>

	<?php require 'css.php'?>

</head>
<body>
<style scoped>
  .hello {
    background: url(1afd221056a06120276dafba30621018.jpeg) no-repeat;
    height: 100%;
    width: 100%;
    background-size: cover;
  }
  </style>

	<div class='container'>


		<?php include 'nav.php';?>

		<div class='row'>
<?php

	include 'config.php';

    print"<div class='container'>";

	$sql = "SELECT * FROM pokedex";
	$result = mysqli_query($connection, $sql);

	if(mysqli_num_rows($result) > 0 ){
		echo "<div class ='row'>";
             while($row = mysqli_fetch_assoc($result)){

			 echo"<div class ='col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2'><center><img src='".$row["icon"]."' style='max-height:150px;'>
			 <b>Pokedex #:</b>".$row["pokedex_number"]."<br>
			 <b>Name:</b>".$row["name"]."<br>
			 <a href ='pokemon.php?id=".$row['pokedex_number']."'><ion-icon name='information-circle-outline'></ion-icon></a>
			 <a href ='update.php?id=".$row['pokedex_number']."'><ion-icon name='settings-outline'></ion-icon></a>
			 <a href ='delete.php?id=".$row['pokedex_number']."&name=".$row['name']."'><ion-icon name='trash-outline'></ion-icon></a>
	</div>";
	}
echo"</div>";

}


mysqli_close($connection);
?>
</div>	
</div>
</body>
</html>