<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<title>Mon Cockpit</title>
	</head>
	<body>
		<div>
		<?php
		session_start();
		if(!isset($_SESSION['login']))//Vérification si c'est vide
		{
			$_SESSION['login']='mauvais';
		}
		if($_SESSION['tmp'] == '1')//Vérification de la fourberie
		{
			$_SESSION['login']='bon';
		}
		require('lib.php');
		estLogin();
		if (isset($_POST['valide'])){
			$ville=$_POST['ville'];
			$AB=$_POST['AB'];
			$json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='.$ville.',%20'.$AB.'&appid=2bfdee59a56e15b43261e3c819b631f2');
			$json = json_decode($json);
			$tempDegC = $json->main->temp-273;
			?>			
			<ul class="list-group list-group-flush">
			  <li class="list-group-item"><?php echo ("Longitude : " . $json->coord->lon) ?> </li>
			  <li class="list-group-item"><?php echo ("Latitude : " . $json->coord->lat) ?></li>
			  <li class="list-group-item"><?php echo ("Temperature : ".$tempDegC." °C") ?></li>
			  <li class="list-group-item"><?php echo ("Pression athmosphérique : " . $json->main->pressure." hpa") ?></li>
			  <li class="list-group-item"><?php echo ("Humidité : ".$json->main->humidity."%") ?></li>
			  <li class="list-group-item"><?php echo ("Vitesse du vent : ".$json->wind->speed."km/h") ?></li>
			</ul>
			<?php
		}
		else {
			?>
			<form method="POST" action="index.php">
				ville : <input type="text" name="ville">
				pays : <input type="text" name="AB">
				<input type="submit" name="valide">
			</form>
			<?php
			} ?>

		

		

		
		</div>
	</body>
</html>