<?php
require_once('connection.php');

if($_GET['ta']==0 && $_GET['ty']==0 && $_GET['p']==0 && $_GET['fac']==0){
	$sql="SELECT * FROM Vetement";
}else {
	$sql="SELECT * FROM Vetement ";
	$where=false;
	if($_GET['ta']!=0){
		if ($where==false){
			$sql=$sql."WHERE idTaille =".$_GET['ta'];
			$where=true;
		}
		else {
			$sql=$sql." AND idTaille =".$_GET['ta'];
		}
	}
	if($_GET['ty']!=0){
		if ($where==false){
			$sql=$sql."WHERE idType =".$_GET['ty'];
			$where=true;
		}
		else {
			$sql=$sql." AND idType =".$_GET['ty'];
		}
	}
	if($_GET['fac']!=0){
		if ($where==false){
			$sql=$sql."WHERE idGenre =".$_GET['fac'];
			$where=true;
		}
		else {
			$sql=$sql." AND idGenre =".$_GET['fac'];
		}
	}
	if($_GET['p']!=0){
		if ($where==false){
			switch($_GET['p']){
				case 1:
				$sql=$sql."WHERE prix =1";
				break;
				case 2:
				$sql=$sql."WHERE prix <=2";
				break;
				case 3:
				$sql=$sql."WHERE prix BETWEEN 2 and 5";
				break;
				case 4:
				$sql=$sql."WHERE prix >= 5";
				break;
			}
			
			$where=true;
		}
		else {
			switch($_GET['p']){
				case 1:
				$sql=$sql." AND prix =1";
				break;
				case 2:
				$sql=$sql." AND prix <=2";
				break;
				case 3:
				$sql=$sql." AND prix BETWEEN 2 and 5";
				break;
				case 4:
				$sql=$sql." AND prix >= 5";
				break;
			}
			
		}
	}

}

$result =$mysqli->query($sql);




$i = 1;
$bull=true;
while ($bull) {

	echo '<table align="center"><tr>';
	for( $y=0, $bull=false; $y<3 && ($row = $result->fetch_array()) ; $y++){
		echo '<td onmouseover="zoom('.$i.')" onmouseout="dezoom('.$i.')"><table align="center"><tr align="center"><td><img id="img'.$i.'" src="../images/vet2/'.$row['image'].'" width="200" height="200" onclick="descr('.$row["idVet"].')"/></td><tr align="center"><td>Seulement'.$row['prix'].'€!!</td><div id="de'.$i.'"></div></tr></table></td>';
		$i++;
		$bull=true;
	}
	echo '</tr>';

}
echo '</table>';

?> 