<?php
    function estLogin(){
        if($_SESSION['login']=='mauvais'){
           header('Location: 404.php');
        }
    }
	
	function redirect(){
		header('Location: index.php');
	}
?>