<?php 
include_once "../fonctions/admin.php";
require_once "../fonctions/bdd.php";
$bdd = bdd();
if (!empty($_POST)) {
    $erreurs = pretre();
}



 ?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
			<label>NOM</label>:<input type="text" name="nom"><br><br>
			<label>PRENOM</label>:<input type="text" name="prenom"><br><br>
			<label>LIEU</label>:<input type="text" name="lieu"><br><br>
			<label>ADRESSE</label>:<input type="text" name="adresse"><br><br>
			<label>TELEPHONE</label>:<input type="number" name="tel"><br><br>
			<label>MAIL</label>:<input type="text" name="mail"><br><br>
			<label>IMAGE</label>:<input type="file" name="file"><br><br>
			<input type="submit" value="send">



	</form>

</body>
</html>