


    <?php
    require_once('connection.php');
    if(isset($_GET['id'])){
    	$sql='select * from Vetement where idVet='.$_GET["id"].'';
    	$res = $mysqli->query($sql);
    	$row = $res->fetch_array();
    	echo '<table align="center" ><caption>'.$row['nomVet'].'</caption>';
    	echo '<tr><td rowspan="2"><img id="img" src="../images/vet/'.$row['image'].'" width="400" height="400" onclick="changerImage('.$row['image'].','.$row['image2'].')" /></td><td>Matière : '.$row['matiere'].'<br/>Couleur : '.$row['couleur'].'<br/>';
        echo '<br/>Seulement :'.$row['prix'].'€</td></tr><tr><td><img id="imgb" src="../images/vet/'.$row['image2'].'"class="img-circle"  width="100" height="100" style="border:dotted 2px black" align="center" onclick="changerImage('.$row['image'].','.$row['image'].')"/></td></tr>';
    	echo '<tr align="center"><td colspan="2"><a href="contact.php">→ COMMANDER ←</a></td></tr>';
    	echo '</table>';





    		


   
        }