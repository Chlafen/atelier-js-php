<?php
session_start();
?>

<html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="container p-2">
    <div class="bg-light p-5 border">
    <h1 class="m-5">Google Keep</h1>
    <form action="/ajouterNote.php" method="post">
      <div class="form-group">
        <label for="titre">Titre: </label>
        <input class="form-control" id="titre" name="titre" type=text /> 
      </div>

      <div class="form-group">
        <label for="note">Note:</label>
        <input class="form-control" id="note" name="note" type=text />
      </div>
      
      <button type="submit" class="btn btn-primary">Ajouter Note</button>
    </form>
    <div class="d-flex flex-wrap flex-row justify-content-center">
      <?php
    if(isset($_SESSION['notes'])) {
      $clr = ['primary', 'secondary', 'success', 'warning', 'danger'];
      $i=0;
      foreach($_SESSION['notes'] as $note){
        ?>
        <div class="w-40 card m-2 mh-100 bg-<?=$clr[$i % count($clr)]?>" style="width: 20rem; min-height:250px">
          <div class="d-flex flex-column justify-content-end  card-body ">
            <h4 class="card-title text-light">
              <?=$note[0]?>
            </h5>
            <p class="card-text text-light">
              <?=$note[1]?>
            </p>
            <div style="width: 100%;height:1px;background-color:white;margin:10px 0; opacity:0.5"></div>
            <div class="d-flex justify-content-between" style="width:100%;color:white;">
              <?php include 'svgFriend.svg';?>
              <?php include 'svgDots.svg';?>
              <?php include 'svgHand.svg';?>
              <?php include 'svgImg.svg';?>
              <?php include 'svgPalette.svg';?>
              <div style="width:50px"></div>
            </div>
          </div>
        </div>
        <?php
        $i++;
      }
      ?>
      </div><?php
    }
    else {
      echo "<p>Pas de notes encore, Ajouter une!</p>";
    }
    ?>
    </div>
  </body>
</html>