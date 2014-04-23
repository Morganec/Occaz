<?php
  session_start();
  include("../header.html");
  include("../menu.html");
  /*if (isset($_SESSION['log']) && $_SESSION['log'] == 1) {
      include("../menulog.html");
    }
    else {
      include("../menu.html");
      if (isset($_SESSION['log']) && $_SESSION['log'] == 0) {
        $_SESSION = array(); 
        ?>
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-danger">Aucune correspondance adresse mail/mot de passe trouvée. Veuillez réessayer.</div>
          </div>
        </div><?php
      }
    }*/
?>



<?php
	include("../footer.html");
?>
