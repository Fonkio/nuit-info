<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<title>météo</title>
	</head>
	<body>
		<div>
		<?php
		$json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Windhoek,%20NA&appid=2bfdee59a56e15b43261e3c819b631f2');
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
		
		</div>
	</body>
</html>