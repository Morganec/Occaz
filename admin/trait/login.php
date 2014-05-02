<?php
	
	if (isset($_POST['inputPseudo']) && isset($_POST['inputPassword'])) {
		$pseudo = $_POST['inputPseudo'];
		$pass = $_POST['inputPassword'];
		if($pseudo="momodu21" && $pass="admin"){
			session_start();
			$_SESSION['log']=1;
		}
		else {
			 ?>
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-danger">Aucune correspondance Pseudo/mot de passe trouvée. Veuillez réessayer.</div>
          </div>
        </div><?php
		}
	}
	header("Location: ".$_SERVER['HTTP_REFERER']);
?>
