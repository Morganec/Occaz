
<?php
    $serveur="localhost";
    $user="root";
    $pass="azerty";
    $base="vet2"; 
    $mysqli = new mysqli($serveur, $user, $pass, $base);
    if ($mysqli->connect_error) {
        die('Erreur de connexion ('.$mysqli->connect_errno.')'. $mysqli->connect_error);
    }

?>