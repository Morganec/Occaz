<?php
require_once("../connection.php");
if(  $_POST['nomVet'] != null  &&   $_POST['type'] != null &&  $_POST['taille'] != null &&  $_POST['genre'] != null && $_POST['matiere'] != null && $_POST['couleur'] != null && $_POST['prix'] != null && $_POST['img1'] !=null ){

	if (isset($_POST['marque']) && $_POST['marque'] == true){
		$marque=1;
	}
	else {
		$marque=0;
	}

	if( $_POST['img2'] == null){
		$_POST['img2']="null";
	}

	$sql='INSERT INTO Vetement VALUES (null,"'.$_POST['nomVet'].'",'.$_POST['type'].','.$_POST['taille'].','.$_POST['genre'].','.$marque.',"'.$_POST['matiere'].'","'.$_POST['couleur'].'",'.$_POST['prix'].',"'.$_POST['img1'].'", "'.$_POST['img2'].'")';
	$res = $mysqli->query($sql);
	echo "requete reussi";
}
else {
	echo "oubli d'un champs";
}



//header("Location: ".$_SERVER['HTTP_REFERER']);

?>