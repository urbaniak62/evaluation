<?php
require_once("../modele/data.php");
/*------------------insertion into data base new project by formulaire----------------*/
if(isset($_POST['titre']) && !empty($_POST['titre']) &&  isset($_POST['chef'])
    && isset($_POST['lieu'])  && isset($_POST['description'])
    && isset($_POST['date']))

   {

  $titre=$_POST['titre'];
  $chef=$_POST['chef'];
  $lieu=$_POST['lieu'];
  $description=$_POST['description'];
  // $etape=$_POST['etape'];
  // $etape2=$_POST['etape2'];
  // $etape3=$_POST['etape3'];
  $date=$_POST['date'];
  $insert=insert($titre,$chef,$lieu,$description,$date);
  var_dump($_POST);
  // header('location: index.php');
}
else{
  echo "complete all please";
}

require_once('../vue/newProject.php');

 ?>
