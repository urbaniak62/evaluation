<?php
function connection(){
try {
  $bdd= new PDO('mysql:host=localhost;dbname=evaluation;metacharset=utf8','root',' ', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
 catch (Exception $e)
  {
    die('erreur:'.$e->getMessage());
}
 return $bdd;
 }
 ?>
