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
	<?php
	echo '<form action="#" method="POST">
	<label for= >login </label>
	<input type="text" name="login" value="'.$_COOKIE['login'].'">
	<label for= "">Password</label>
	<input type= "text" name= "mdp" value= "'.$_COOKIE['password'].'">
	<input type= "submit" value= "connexion"></form>'; ?>
	


</body>
</html>