	
<?php






  session_start();
  include("../header.html");
  if (isset($_SESSION['log']) && $_SESSION['log'] == 1) {
      include("../menulog.html");
     
    }
    else {
      include("../menu.html");
     
      }
    


?>




<?php



include("../footer.html");

?>


