<?php
include("../header.html");
?>




<div class="row">
  <div class="col-md-12">
   
  <form method="post" action="../trait/ajouter.php">
    
      
      Nom Vetement: <input type="text" class="form-control" id="nomVet" name="nomVet"  /><br/><br/>


      type Vetement:
      <select class="form-control" id="type" name="type">
        <?php
        require_once("../connection.php");
        $sql='select * from Type';
        $res = $mysqli->query($sql);
        while (NULL !== ($row = $res->fetch_array())) {
          echo  '<option value="'.$row['idType'].'">'.$row['nomType'].'</option>';
        }
      
        ?>
      </select>
      <br/><br/>

      taille Vetement:
      <select class="form-control" id="taille" name="taille">
        <?php
        require_once("../connection.php");
        $sql='select * from Taille';
        $res = $mysqli->query($sql);
        while (NULL !== ($row = $res->fetch_array())) {
          echo  '<option value="'.$row['idTaille'].'">'.$row['nomTaille'].'</option>';
        }
      
        ?>
      </select>
      <br/><br/>

      Genre Vetement:
      <select class="form-control" id="genre" name="genre">
        <?php
        require_once("../connection.php");
        $sql='select * from Genre';
        $res = $mysqli->query($sql);
        while (NULL !== ($row = $res->fetch_array())) {
          echo  '<option value="'.$row['idGenre'].'">'.$row['nomGenre'].'</option>';
        }
      
        ?>
      </select>
      <br/><br/>

      <input type="checkbox" id="marque" name="marque"> Coche cette case si ce Vetement est de marque
<br/><br/>
Matiere Vetement: <input type="text" class="form-control" id="matiere" name="matiere" placeholder="Text" /><br/><br/>
Couleur Vetement: <input type="text" class="form-control" id="couleur" name="couleur" placeholder="Text" /><br/><br/>

Prix du Vetement: <input type="int" class="form-control" id="prix" name="prix" placeholder="entier" /><br/><br/>
Image 1 Vetement: <input type="text" class="form-control" id="img1" name="img1" placeholder="img" /><br/><br/>
Image 2 Vetement: <input type="text" class="form-control" id="img2" name="img2" placeholder="img"/><br/><br/>

    

      <button type="submit" class="btn btn-success">Ajouter</button>

  
  </form>

</div>
</div>
<?php



include("../footer.html");

?>
