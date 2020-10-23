<?php 

   // fonctions pour curé     
function cure(){
	global $bdd;

	$cure = $bdd->query("SELECT cure.* FROM cure");
	$cure = $cure->fetchall();
	return $cure;


}

function pCure(){
 global $bdd;
    
    $id = (int)$_GET["id"];
    
    $pCure = $bdd->prepare("SELECT cure.* FROM cure WHERE id = ?");
    $pCure->execute([$id]);
    $pCure = $pCure->fetch();
    
    return $pCure;
}


function modifierCure(){
	 global $bdd;
    
    $erreur = "";
    $target_dir = "../img/";
    $target_file = basename($_FILES["file"]["name"]);
    $upload = 1;
    $newaffiche = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    extract($_POST);
    
    $id = (int)$_GET["id"];
    

    if(!empty($nom) AND !empty($prenom) AND !empty($lieu) AND !empty($adresse) AND !empty($tel) AND !empty($mail) AND move_uploaded_file($_FILES["file"]["tmp_name"], '../img/' . $target_file)) {
    	$newaffiche = $target_file;
      
        $modifier = $bdd->prepare("UPDATE cure SET nom = :nom, prenom = :prenom, lieu = :lieu, adresse = :adresse, tel = :tel, mail = :mail, img = :img WHERE id = :id");
        $modifier->execute([
            "nom" => htmlentities($nom),
            "prenom" => htmlentities($prenom),
            "lieu" => htmlentities($lieu),
            "adresse" => htmlentities($adresse),
            "tel" => htmlentities($tel),
            "mail" => htmlentities($mail),
            "img" => htmlentities($newaffiche),
            "id" => $id
        ]);

        header("Location: index.php");
    }
    else
        $erreur .= "Les champs doivent contenir quelque chose";
        
    return $erreur;

}

// fonctions pour prêtre
function pretre(){
	global $bdd;

	$pretre = $bdd->query("SELECT pretre.* FROM pretre");
	$pretre = $pretre->fetchall();
	return $pretre;


}

function pPretre(){
 global $bdd;
    
    $id = (int)$_GET["id"];
    
    $pPretre = $bdd->prepare("SELECT pretre.* FROM pretre WHERE id = ?");
    $pPretre->execute([$id]);
    $pPretre = $pPretre->fetch();
    
    return $pPretre;
}

function modifierPretre(){
	 global $bdd;
    
    $erreur = "";
    $target_dir = "../img/";
    $target_file = basename($_FILES["file"]["name"]);
    $upload = 1;
    $newaffiche = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    extract($_POST);
    
    $id = (int)$_GET["id"];
    

    if(!empty($nom) AND !empty($prenom) AND !empty($lieu) AND !empty($adresse) AND !empty($tel)  AND move_uploaded_file($_FILES["file"]["tmp_name"], '../img/' . $target_file)) {
    	$newaffiche = $target_file;
      
        $modifier = $bdd->prepare("UPDATE pretre SET nom = :nom, prenom = :prenom, lieu = :lieu, adresse = :adresse, tel = :tel, img = :img WHERE id = :id");
        $modifier->execute([
            "nom" => htmlentities($nom),
            "prenom" => htmlentities($prenom),
            "lieu" => htmlentities($lieu),
            "adresse" => htmlentities($adresse),
            "tel" => htmlentities($tel),
            "img" => htmlentities($newaffiche),
            "id" => $id
        ]);

        header("Location: index.php");
    }
    else
        $erreur .= "Les champs doivent contenir quelque chose";
        
    return $erreur;

}


 ?>