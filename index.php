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
		//On reprend la session_start()
		session_start();
		if(!isset($_SESSION['login']))//Vérification si c'est rempli.
		{
			$_SESSION['login']='mauvais';//Les forces du mal
		}
		if($_SESSION['tmp'] == '1')//Vérification de la fourberie. Que dis-je, de la gitanerie.
		{
			$_SESSION['login']='bon';//La brute et le truand
		}
		require('lib.php');
		estLogin();
		
		//Attention ça envoie du lourd !
		//Je ne pourrai pas expliquer le code, c'est pas moi qui l'ai fait.
		//Par contre je peux dire qu'il a fait du JSON en étant en première année de DUT info, très très fort cet homme (Bah oui pas femme, car en info c'est bien connu qu'elles sont là uniquement pour les jaquettes #Windev)
		if (isset($_POST['valide'])){
			$ville=$_POST['ville'];
			$AB=$_POST['AB'];
			$json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='.$ville.',%20'.$AB.'&appid=2bfdee59a56e15b43261e3c819b631f2');
			$json = json_decode($json);
			$tempDegC = $json->main->temp-273;
			//Là c'est le moment où ils ont commencé à jouer de la musique. Donc je m'arrête là les commentaires et je vais aller les voir. Bisous. Sur la fesse droite.
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