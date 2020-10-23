<?php 
function bdd(){
	try {
    $bdd = new PDO("mysql:dbname=dax;host=localhost", "root", "");
} catch (PDOException $e) {
    echo 'Connection Echouée: ' . $e->getMessage();
}

return $bdd;
}

