<?php
require_once('connection.php');
$sql="SELECT * FROM Vetement where idTaille=".$_GET['num']."";
$result =$mysqli->query($sql);



while (NULL != ($row = $result->fetch_array())) {
echo $row['nomVet'];
}

	

?> 