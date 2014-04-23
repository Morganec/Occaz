<?php
require_once('connection.php');
if($_GET['num']==0){
	$sql="SELECT * FROM Vetement";
}else {
	$sql="SELECT * FROM Vetement where idTaille=".$_GET['num']."";
}

$result =$mysqli->query($sql);



/*while (NULL != ($row = $result->fetch_array())) {
	echo $row['nomVet'];
}*/




$i = 1;
$bull=true;
while ($bull) {

	echo '<table align="center"><tr>';
	for( $y=0, $bull=false; $y<3 && ($row = $result->fetch_array()) ; $y++){
		echo '<td onmouseover="zoom('.$i.')" onmouseout="dezoom('.$i.')"><table align="center"><tr align="center"><td><a href="lien.php?id='.$row['idVet'].'"><img id="img'.$i.'" src="../images/vet/'.$row['image'].'" width="200" height="200"/></a></td><tr align="center"><td>Seulement'.$row['prix'].'€!!</td></tr></table></td>';
		$i++;
		$bull=true;
	}
	echo '</tr>';

}
echo '</table>';

?> 