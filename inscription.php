<?php
setcookie('login',$_POST['login']);
setcookie('password',$_POST['mdp']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inscription</title>
</head>
<body>
	<h1>Vous êtes inscrits</h1>

	<?php

	echo $_COOKIE['login']." ". $_COOKIE['password'];
	?>

</body>
</html>