<!DOCTYPE html>
<html>
<head>
	<title>404 ERROR</title>
</head>
	<?php
	session_start();
    require('lib.php');
    $_SESSION['tmp']='1';
	redirect();
?>
</body>
</html>