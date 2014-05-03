<?php
require_once("../connection.php");
if(  isset($_POST['nomVet'])  &&   isset($_POST['type']) &&  isset($_POST['taille']) &&  isset($_POST['genre']) && isset($_POST['couleur']) && isset($_POST['prix']) && isset($_POST['img1'])){
	echo 'coucou';
}
else {
	echo 'vous avez oublié de remplir un champs !';
}
        /*$sql='select * from Type';
        $res = $mysqli->query($sql);*/


        ?>