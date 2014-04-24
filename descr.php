


    <?php
    require_once('connection.php');
    if(isset($_GET['id'])){
    	$sql='select * from Vetement where idVet='.$_GET["id"].'';
    	$res = $mysqli->query($sql);
    	$row = $res->fetch_array();
    	echo '<table align="center"  class="table"><caption ><h1>'.$row['nomVet'].'</h1></caption>';
    	echo '<tr><td rowspan="2"><img id="img" src="../images/vet/'.$row['image'].'" width="400" height="400" onclick="changerImage(\''.$row['image2'].'\',\''.$row['image'].'\')" /></td><td><h4>Matière : '.$row['matiere'].'<br/>Couleur : '.$row['couleur'].'<br/>';
        echo '<br/>'.$row['prix'].'€</h4></td></tr><tr><td><img id="imgb" src="../images/vet/'.$row['image2'].'"class="img-circle"  width="100" height="100" style="border:dotted 2px black" align="center" onclick="changerImage(\''.$row['image'].'\',\''.$row['image2'].'\')"/></td></tr>';
    	echo '<tr align="center"><td colspan="2"><a href="contact.php"><button type="button" class="btn btn-success">→ COMMANDER ←</button></a></td></tr>';
    	echo '</table>';





    		


   
        }