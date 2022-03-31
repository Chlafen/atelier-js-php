<?php
session_start();
if(isset($_POST['note']) && isset($_POST['titre'])){
  if(!isset($_SESSION['notes'])) {
    $_SESSION['notes'] = array();//initialisation liste
  }
  $_SESSION['notes'][] =  [$_POST['titre'] ,$_POST['note']];//ajout note+titre
  
}
header("location: /index.php");
?>