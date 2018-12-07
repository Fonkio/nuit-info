<?php
	//Là clairement on touche à l'innutilité la plus totale.
	//Mais c'est toujours plus classe d'avoir un fichier lib.php, donc j'en ai fais un comme un bon petit développeur.
	//Ps : J'ai menti, la fonction estLogin() ne vérifie pas si on est login, mais le contenu du login. Désolé bro
    function estLogin(){
        if($_SESSION['login']=='mauvais'){
           header('Location: 404.php');
        }
    }
	
	//Je pense que ça se passe de tout commentaire.
	function redirect(){
		header('Location: index.php');
	}
?>