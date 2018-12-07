<!DOCTYPE html>
<html>
<head>
	<title>404 ERROR</title>
</head>
	<?php
	session_start();
	
	//Attention, gros fichier lib.php qui contient exactement 2 fonctions.
    require('lib.php');
	
	//Comme indiqué dans le lib.php, voici le gitanisme.
	//Il a été mis en place pour une raison : il ne voulait pas changer correctement le $_SESSION['login'].
	//Ne voulant pas rélféchir, j'ai opté pour cette méthode qui me parait plus que convenable.
    $_SESSION['tmp']='1';
	
	//Gitanisme partie 2 !
	//Cette fonction fait juste un header. Oui c'est nul. Mais si je fais pas comme ça ça marche pas. Puis faut aussi que je fasse honneur à mes origines.
	redirect();
?>
</body>
</html>