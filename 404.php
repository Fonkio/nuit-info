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
<h3>Signé : le Pinpix, le chatbot machiavélique</h3>
<?php
	session_start();
	$_SESSION['login']='mauvais';
	$_SESSION['tmp']='0';
 ?>
<center style="margin-top:50px"><script src="game.js"></script></center>
</body>
</html>