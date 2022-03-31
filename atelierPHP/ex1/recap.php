<html lang="en">
<head>
  <title>recap</title>
</head>
<body>
  <?php
    $NB_SANDWICHS_DISPO = 100;
    if( empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['nb']) 
     || empty($_POST['adr']) || empty($_POST['typeS']) || !isset($_FILES['cin'])){
      ?> <p>Commande Incomplete!</p> <?php
    }
    else {
      $nb = intval($_POST['nb'], 10);
      if( $NB_SANDWICHS_DISPO < $nb){
      ?>
        <script>
        alert("Nombre demandé non disponible :c ");
        window.location.href = "resa.html";
        </script>
      <?php
      }else {
        $prix = 4 * $_POST['nb'];
        if($_POST['nb'] >= 10){
         $prix -= $prix*0.1;
        }
        move_uploaded_file($_FILES['cin']['tmp_name'], './files/'.uniqid());
      }
      ?>  

    <div>
      Nom : 
      <p> <?=$_POST['nom']?> </p>
    </div>
    
    <div>
      Prenom : 
      <p> <?=$_POST['prenom']?> </p>
    </div>

    <div>
      Nombre Sandwichs : 
      <p><?=$_POST['nb']?></p>
    </div>

    <div>
      Adresse :
      <p><?=$_POST['adr']?></p>
    </div>
    
    <div>
      Type Sandwichs :
      <p> <?=$_POST['typeS']?> </p>
    </div>
    
    <div>
      <span>Ingredients: </span>
      <ul>
        <li> <?= empty($_POST['Harissa']) ? "Harissa" : "---" ?> </li>
        <li> <?= empty($_POST['Mayo']) ? "Mayo" : "---" ?> </li>
        <li> <?= empty($_POST['Salade']) ? "Salade" : "---" ?> </li>
      </ul>
      
    </div>
  </div>
<?php 
}
?>

</body>
</html>