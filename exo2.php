
<?php session_start() 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Globale</title>
</head>
<body>
	<h1>Contenu des variables</h1>
	<p>
		Bonjour <?php echo $_SESSION['prenom']." ".$_SESSION['nom']. 'elle a ' . $_SESSION['age']; ?>
	</p>
</body>
</html>