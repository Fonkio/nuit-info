<!DOCTYPE html>
<html>
<head>
	<title>404 ERROR</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Oups, ERREUR 404 : Sans finir ce mini-jeu, l'accès au site te sera refusé.</h1>
<h3>Signé : le Pinpix, le chatbot machiavélique</h3><!-- Petit fun tips : Pinpix c'est le nom de mon lapin nain angora, et aussi le nom de mon gnôme mage dans un JDR. Maintenant il se réincarne en chatbot, c'est cool.
Un peu comme la religion hindouiste avec les réincarnations, mais en version animaux-->
<?php
	//Car forcément si on la start pas ça marche pô (Expérimenté par mes soins)
	session_start();
	$_SESSION['login']='mauvais';
	
	//Alors ici c'est la suite du gitanisme que j'ai aussi implémenté dans le changeSession.php et l'index.php. J'aurai aussi pu le mettre dans le lib pour éviter tout type de jalousie mais sur le moment cela ne m'a pas paru pertinent.
	$_SESSION['tmp']='0';
 ?>
 <!-- Parce que les fichiers CSS  c'est pour les faibles (Et les devs pas flemmards)-->
<center style="margin-top:50px"><script src="game.js"></script></center>
</body>
</html>