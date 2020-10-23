<?php 
session_start();
include_once "../fonctions/admin.php";
require_once "../fonctions/bdd.php";
$bdd = bdd();
$pPretres = pPretre();

if (!empty($_POST)) {
    $erreur = modifierPretre();
}



 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modification Curé</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,300,700">
    <link rel="stylesheet" href="maine.css">
	
</head>
<body><br><br><br>
	<div class="container">
			<form method="post"  action="" enctype="multipart/form-data">
                      <?php 
            if(isset($erreur)):
                if ($erreur) :
             ?>
            <div class="row">
                <div class="col-xs-12">
                    <div class="message erreur"><?= $erreur ?></div>
                </div>
            </div>
            <?php 
               else : 
             ?>
           

            <?php
                endif; 
                endif;

             ?>

            
            <div class="row">
                <div class="col-xs-12">
                    <input type="text" name="nom" placeholder="Titre *" value="<?= $pPretres["nom"] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <input type="text" name="prenom" placeholder="Titre *" value="<?= $pPretres["prenom"] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <input type="text" name="lieu" placeholder="Titre *" value="<?= $pPretres["lieu"] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <input type="text" name="adresse" placeholder="Titre *" value="<?= $pPretres["adresse"] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <input type="text" name="tel" placeholder="Titre *" value="<?= $pPretres["tel"] ?>">
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                    <input type="file" name="file" placeholder="" value="<?= $pPretres["img"] ?>">
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                    <input type="submit" value="Modifier!">
                </div>
            </div>
        </form>


	</div>
	
</body>
</html>