<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Observationis</title>
	</head>
	<body>
		<div>
		<?php
		$json = file_get_contents('http://www.prevision-meteo.ch/services/json/paris');
		$json = json_decode($json);
		?>



		<?php 
		echo ("Temperature");
		echo $json->current_condition->tmp;
		echo (" °C");
		echo("<br/>");
		echo $json->current_condition->hour;
		echo("<br/>");
		echo $json->current_condition->wnd_spd;
		echo("<br/>");
		echo $json->current_condition->humidity;
		echo("<br/>");
		echo $json->current_condition->pressure;
		echo("<br/>");
		echo $json->current_condition->condition;
		echo("<br/>");
		?>
		</div>

		<header id="bandeau" style="min-height:100px; text-align:center;">
			<img src ="Ressources\Images\logo_blanc.png" height="180" width="320" title="logo d'Observationis">
		</header>
		<section id="centreAccueil" align="center">
			<div id="texteAccueil">
				<p>Observationis vous sensibilise sur l'usage de vos données et vous fait découvir de nombreux moyens de surveillance existants à ce jour.</p>
			</div>
			<div class=image>
				<a href="Pages\physique.html"><img src="Ressources\Images\camera.png" height="120" width="120" title="Systèmes de surveillance physiques"></a>
			</div>
			<div class=image>
				<a href="Pages\numerique.html"><img src="Ressources\Images\laptop.png" height="120" width="120" title="Systèmes de surveillance numériques"></a>
			</div>
			<div class=image>	
				<a href="Pages\loi.html"><img src="Ressources\Images\Loi.png" height="120" width="120" title="Que dit la loi ?"></a>
			</div>
			<div class=image>	
				<a href="Pages\organisations.html"><img src="Ressources\Images\anonymous.png" height="120" width="120" title="Organisations"></a>
			</div>
			<p id="cliquezIci"><em>  Cliquez sur une icône pour commencer la navigation </em><p>
		</section>
		<div id="logoIUT">
			<a href="http://iut.ups-tlse.fr/" target="_blank"><img src="Ressources\Images\logo_iut_info.png" height="98" width="148" title="Logo IUT Inofrmatique" ></a>
		</div>
	</body>
</html>