<html lang="en">
<body>
  <form method="post">
    <p>Que pensez vous du cours php?</p> 
    <br>
    <input value="bon"     type="radio" name="vote" >Bon     <br>
    <input value="moyen"   type="radio" name="vote" >Moyen   <br>
    <input value="mauvais" type="radio" name="vote" >Mauvais <br> <br>
    <button type="submit" name="submit"> VOTEZ</button>
  </form>

  <?php
  if(isset($_COOKIE['a_vote'])) {
  ?>
    <p>Vous avez déja voté : <i><?=$_COOKIE['a_vote']?></i></p>
  <?php
  }else if(!empty($_POST['vote'])){
    setcookie('a_vote', $_POST['vote'], time() + 10000);
  }
  
  ?>
</body>
</html>