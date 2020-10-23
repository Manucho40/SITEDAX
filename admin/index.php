<?php 
session_start();
include_once "../fonctions/admin.php";
require_once "../fonctions/bdd.php";
$bdd = bdd();
$cures = cure();
$pretres = pretre();




 ?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Infoprog Admin - Posts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,300,700">
    <link rel="stylesheet" href="maine.css">
    
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Modifications - Curé</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <table>
                  <?php 
                    foreach ($cures as $cure): 
                       

                   ?>
                    <tr>
                        <td><?=$cure["nom"] ?></td>
                        <td><a href="modifCure.php?id=<?= $cure["id"] ?>"  class="glyphicon glyphicon-pencil"></a></td>
                        <td><a href="" class="glyphicon glyphicon-remove"></a></td>
                    </tr>
                    <?php 
                        endforeach;

                     ?>
                </table>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-12">
                <h1>Modifications - Prêtres</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <table>
                  <?php 
                    foreach ($pretres as $pretre): 
                       

                   ?>
                    <tr>
                        <td><?=$pretre["nom"] ?></td>
                        <td><a href="modifPretre.php?id=<?= $pretre["id"] ?>"  class="glyphicon glyphicon-pencil"></a></td>
                        <td><a href="" class="glyphicon glyphicon-remove"></a></td>
                    </tr>
                    <?php 
                        endforeach;

                     ?>
                </table>
            </div>
            
        </div>
        
    </div>
</body>
</html>