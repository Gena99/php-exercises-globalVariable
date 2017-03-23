<?php
session_start();
$_SESSION['prenom']='Gena';
$_SESSION['nom']='Pailha';
$_SESSION['age']= 46;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Globales Variables</title>
	<link rel="stylesheet" type="text/css" href="exo1.css">

</head>
<body>
	<div class= "User"><?php echo $_SERVER['HTTP_USER_AGENT']; ?> </div>
	<div class= "IP"><?php echo $_SERVER['REMOTE_ADDR']; ?> </div>
	<div class= "Name"><?php echo $_SERVER['SERVER_NAME']; ?> </div>

	<div class="lien">
		<h1>Pour récupérer les données :</h1>
		<a href= exo2.php>Cliquez ici</a>
	</div>
	<form action= "inscription.php" id = "form1" method="POST">
		<input type= "text" name= "login" value="Nom">
		<label for="">Password</label>
		<input type="password" name="mdp" value= "12334">
		<input type= "submit" value= "connexion">
	</form>

</body>
</html>